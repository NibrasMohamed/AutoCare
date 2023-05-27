<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Repairs;

class RepairsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_repairs()
    {
        $repairs = Repairs::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/repairs', $repairs
        );

        $this->assertApiResponse($repairs);
    }

    /**
     * @test
     */
    public function test_read_repairs()
    {
        $repairs = Repairs::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/repairs/'.$repairs->id
        );

        $this->assertApiResponse($repairs->toArray());
    }

    /**
     * @test
     */
    public function test_update_repairs()
    {
        $repairs = Repairs::factory()->create();
        $editedRepairs = Repairs::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/repairs/'.$repairs->id,
            $editedRepairs
        );

        $this->assertApiResponse($editedRepairs);
    }

    /**
     * @test
     */
    public function test_delete_repairs()
    {
        $repairs = Repairs::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/repairs/'.$repairs->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/repairs/'.$repairs->id
        );

        $this->response->assertStatus(404);
    }
}
