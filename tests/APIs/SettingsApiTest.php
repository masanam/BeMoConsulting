<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Admin\Settings;

class SettingsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_settings()
    {
        $settings = factory(Settings::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin/settings', $settings
        );

        $this->assertApiResponse($settings);
    }

    /**
     * @test
     */
    public function test_read_settings()
    {
        $settings = factory(Settings::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin/settings/'.$settings->id
        );

        $this->assertApiResponse($settings->toArray());
    }

    /**
     * @test
     */
    public function test_update_settings()
    {
        $settings = factory(Settings::class)->create();
        $editedSettings = factory(Settings::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin/settings/'.$settings->id,
            $editedSettings
        );

        $this->assertApiResponse($editedSettings);
    }

    /**
     * @test
     */
    public function test_delete_settings()
    {
        $settings = factory(Settings::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin/settings/'.$settings->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin/settings/'.$settings->id
        );

        $this->response->assertStatus(404);
    }
}
