<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\RepairType;

class RepairTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_repair_type()
    {
        $repairType = RepairType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/repair_types', $repairType
        );

        $this->assertApiResponse($repairType);
    }

    /**
     * @test
     */
    public function test_read_repair_type()
    {
        $repairType = RepairType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/repair_types/'.$repairType->id
        );

        $this->assertApiResponse($repairType->toArray());
    }

    /**
     * @test
     */
    public function test_update_repair_type()
    {
        $repairType = RepairType::factory()->create();
        $editedRepairType = RepairType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/repair_types/'.$repairType->id,
            $editedRepairType
        );

        $this->assertApiResponse($editedRepairType);
    }

    /**
     * @test
     */
    public function test_delete_repair_type()
    {
        $repairType = RepairType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/repair_types/'.$repairType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/repair_types/'.$repairType->id
        );

        $this->response->assertStatus(404);
    }
}
