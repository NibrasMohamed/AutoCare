<?php namespace Tests\Repositories;

use App\Models\SparePart;
use App\Repositories\SparePartRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class SparePartRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var SparePartRepository
     */
    protected $sparePartRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->sparePartRepo = \App::make(SparePartRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_spare_part()
    {
        $sparePart = SparePart::factory()->make()->toArray();

        $createdSparePart = $this->sparePartRepo->create($sparePart);

        $createdSparePart = $createdSparePart->toArray();
        $this->assertArrayHasKey('id', $createdSparePart);
        $this->assertNotNull($createdSparePart['id'], 'Created SparePart must have id specified');
        $this->assertNotNull(SparePart::find($createdSparePart['id']), 'SparePart with given id must be in DB');
        $this->assertModelData($sparePart, $createdSparePart);
    }

    /**
     * @test read
     */
    public function test_read_spare_part()
    {
        $sparePart = SparePart::factory()->create();

        $dbSparePart = $this->sparePartRepo->find($sparePart->id);

        $dbSparePart = $dbSparePart->toArray();
        $this->assertModelData($sparePart->toArray(), $dbSparePart);
    }

    /**
     * @test update
     */
    public function test_update_spare_part()
    {
        $sparePart = SparePart::factory()->create();
        $fakeSparePart = SparePart::factory()->make()->toArray();

        $updatedSparePart = $this->sparePartRepo->update($fakeSparePart, $sparePart->id);

        $this->assertModelData($fakeSparePart, $updatedSparePart->toArray());
        $dbSparePart = $this->sparePartRepo->find($sparePart->id);
        $this->assertModelData($fakeSparePart, $dbSparePart->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_spare_part()
    {
        $sparePart = SparePart::factory()->create();

        $resp = $this->sparePartRepo->delete($sparePart->id);

        $this->assertTrue($resp);
        $this->assertNull(SparePart::find($sparePart->id), 'SparePart should not exist in DB');
    }
}
