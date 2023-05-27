<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\SparePart;

class SparePartApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_spare_part()
    {
        $sparePart = SparePart::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/spare_parts', $sparePart
        );

        $this->assertApiResponse($sparePart);
    }

    /**
     * @test
     */
    public function test_read_spare_part()
    {
        $sparePart = SparePart::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/spare_parts/'.$sparePart->id
        );

        $this->assertApiResponse($sparePart->toArray());
    }

    /**
     * @test
     */
    public function test_update_spare_part()
    {
        $sparePart = SparePart::factory()->create();
        $editedSparePart = SparePart::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/spare_parts/'.$sparePart->id,
            $editedSparePart
        );

        $this->assertApiResponse($editedSparePart);
    }

    /**
     * @test
     */
    public function test_delete_spare_part()
    {
        $sparePart = SparePart::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/spare_parts/'.$sparePart->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/spare_parts/'.$sparePart->id
        );

        $this->response->assertStatus(404);
    }
}
