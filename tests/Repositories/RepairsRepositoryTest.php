<?php namespace Tests\Repositories;

use App\Models\Repairs;
use App\Repositories\RepairsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class RepairsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var RepairsRepository
     */
    protected $repairsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->repairsRepo = \App::make(RepairsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_repairs()
    {
        $repairs = Repairs::factory()->make()->toArray();

        $createdRepairs = $this->repairsRepo->create($repairs);

        $createdRepairs = $createdRepairs->toArray();
        $this->assertArrayHasKey('id', $createdRepairs);
        $this->assertNotNull($createdRepairs['id'], 'Created Repairs must have id specified');
        $this->assertNotNull(Repairs::find($createdRepairs['id']), 'Repairs with given id must be in DB');
        $this->assertModelData($repairs, $createdRepairs);
    }

    /**
     * @test read
     */
    public function test_read_repairs()
    {
        $repairs = Repairs::factory()->create();
        
        $dbRepairs = $this->repairsRepo->find($repairs->id);

        $dbRepairs = $dbRepairs->toArray();
        $this->assertModelData($repairs->toArray(), $dbRepairs);
    }

    /**
     * @test update
     */
    public function test_update_repairs()
    {
        $repairs = Repairs::factory()->create();
        $fakeRepairs = Repairs::factory()->make()->toArray();

        $updatedRepairs = $this->repairsRepo->update($fakeRepairs, $repairs->id);

        $this->assertModelData($fakeRepairs, $updatedRepairs->toArray());
        $dbRepairs = $this->repairsRepo->find($repairs->id);
        $this->assertModelData($fakeRepairs, $dbRepairs->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_repairs()
    {
        $repairs = Repairs::factory()->create();

        $resp = $this->repairsRepo->delete($repairs->id);

        $this->assertTrue($resp);
        $this->assertNull(Repairs::find($repairs->id), 'Repairs should not exist in DB');
    }
}
