<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Admin\Contents;

class ContentsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_contents()
    {
        $contents = factory(Contents::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin/contents', $contents
        );

        $this->assertApiResponse($contents);
    }

    /**
     * @test
     */
    public function test_read_contents()
    {
        $contents = factory(Contents::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin/contents/'.$contents->id
        );

        $this->assertApiResponse($contents->toArray());
    }

    /**
     * @test
     */
    public function test_update_contents()
    {
        $contents = factory(Contents::class)->create();
        $editedContents = factory(Contents::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin/contents/'.$contents->id,
            $editedContents
        );

        $this->assertApiResponse($editedContents);
    }

    /**
     * @test
     */
    public function test_delete_contents()
    {
        $contents = factory(Contents::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin/contents/'.$contents->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin/contents/'.$contents->id
        );

        $this->response->assertStatus(404);
    }
}
