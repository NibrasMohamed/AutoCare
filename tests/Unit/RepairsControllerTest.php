<?php

namespace Tests\Unit;

use App\Http\Controllers\RepairsController;
use App\Http\Requests\CreateRepairsRequest;
use App\Http\Requests\UpdateRepairsRequest;
use App\Models\Repair;
use App\Models\Repairs;
use App\Repositories\RepairsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RepairsControllerTest extends TestCase
{
    protected $repairsRepository;
    protected $repairsController;

    public function setUp(): void
    {
        parent::setUp();
        $this->repairsRepository = new RepairsRepository(new Repairs());
        $this->repairsController = new RepairsController($this->repairsRepository);
    }

    public function tearDown(): void
    {
        // Artisan::call('migrate:reset');
        parent::tearDown();
    }

    public function testIndex()
    {
        $response = $this->repairsController->index(new Request());
        $this->assertEquals('repairs.index', $response->getName());
        $this->assertArrayHasKey('repairs', $response->getData());
    }

    public function testCreate()
    {
        $response = $this->repairsController->create();
        $this->assertEquals('repairs.create', $response->getName());
    }

    public function testStore()
    {
        $data = [
            'name' => 'Test Repair',
            'description' => 'This is a test repair',
            'price' => 100,
        ];
        $request = new CreateRepairsRequest($data);
        $response = $this->repairsController->store($request);
        $this->assertEquals('repairs.index', $response->getName());
        $this->assertDatabaseHas('repairs', $data);
    }

    public function testShow()
    {
        $repair = $this->repairsRepository->create([
            'name' => 'Test Repair',
            'description' => 'This is a test repair',
            'price' => 100,
        ]);
        $response = $this->repairsController->show($repair->id);
        $this->assertEquals('repairs.show', $response->getName());
        $this->assertArrayHasKey('repairs', $response->getData());
    }

    public function testEdit()
    {
        $repair = $this->repairsRepository->create([
            'name' => 'Test Repair',
            'description' => 'This is a test repair',
            'price' => 100,
        ]);
        $response = $this->repairsController->edit($repair->id);
        $this->assertEquals('repairs.edit', $response->getName());
        $this->assertArrayHasKey('repairs', $response->getData());
    }

    public function testUpdate()
    {
        $repair = $this->repairsRepository->create([
            'name' => 'Test Repair',
            'description' => 'This is a test repair',
            'price' => 100,
        ]);
        $data = [
            'name' => 'Updated Repair',
            'description' => 'This is an updated repair',
            'price' => 200,
        ];
        $request = new UpdateRepairsRequest($data);
        $response = $this->repairsController->update($repair->id, $request);
        $this->assertEquals('repairs.index', $response->getName());
        $this->assertDatabaseHas('repairs', $data);
    }

    public function testDestroy()
    {
        $repair = $this->repairsRepository->create([
            'name' => 'Test Repair',
            'description' => 'This is a test repair',
            'price' => 100,
        ]);
        $response = $this->repairsController->destroy($repair->id);
        $this->assertEquals('repairs.index', $response->getName());
        $this->assertDatabaseMissing('repairs', ['id' => $repair->id]);
    }
}