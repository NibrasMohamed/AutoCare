<?php namespace Tests\Repositories;

use App\Models\RepairType;
use App\Repositories\RepairTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RepairTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RepairTypeRepository
     */
    protected $repairTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->repairTypeRepo = \App::make(RepairTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_repair_type()
    {
        $repairType = RepairType::factory()->make()->toArray();

        $createdRepairType = $this->repairTypeRepo->create($repairType);

        $createdRepairType = $createdRepairType->toArray();
        $this->assertArrayHasKey('id', $createdRepairType);
        $this->assertNotNull($createdRepairType['id'], 'Created RepairType must have id specified');
        $this->assertNotNull(RepairType::find($createdRepairType['id']), 'RepairType with given id must be in DB');
        $this->assertModelData($repairType, $createdRepairType);
    }

    /**
     * @test read
     */
    public function test_read_repair_type()
    {
        $repairType = RepairType::factory()->create();

        $dbRepairType = $this->repairTypeRepo->find($repairType->id);

        $dbRepairType = $dbRepairType->toArray();
        $this->assertModelData($repairType->toArray(), $dbRepairType);
    }

    /**
     * @test update
     */
    public function test_update_repair_type()
    {
        $repairType = RepairType::factory()->create();
        $fakeRepairType = RepairType::factory()->make()->toArray();

        $updatedRepairType = $this->repairTypeRepo->update($fakeRepairType, $repairType->id);

        $this->assertModelData($fakeRepairType, $updatedRepairType->toArray());
        $dbRepairType = $this->repairTypeRepo->find($repairType->id);
        $this->assertModelData($fakeRepairType, $dbRepairType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_repair_type()
    {
        $repairType = RepairType::factory()->create();

        $resp = $this->repairTypeRepo->delete($repairType->id);

        $this->assertTrue($resp);
        $this->assertNull(RepairType::find($repairType->id), 'RepairType should not exist in DB');
    }
}
