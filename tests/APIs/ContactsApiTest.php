<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Admin\Contacts;

class ContactsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_contacts()
    {
        $contacts = factory(Contacts::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin/contacts', $contacts
        );

        $this->assertApiResponse($contacts);
    }

    /**
     * @test
     */
    public function test_read_contacts()
    {
        $contacts = factory(Contacts::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin/contacts/'.$contacts->id
        );

        $this->assertApiResponse($contacts->toArray());
    }

    /**
     * @test
     */
    public function test_update_contacts()
    {
        $contacts = factory(Contacts::class)->create();
        $editedContacts = factory(Contacts::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin/contacts/'.$contacts->id,
            $editedContacts
        );

        $this->assertApiResponse($editedContacts);
    }

    /**
     * @test
     */
    public function test_delete_contacts()
    {
        $contacts = factory(Contacts::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin/contacts/'.$contacts->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin/contacts/'.$contacts->id
        );

        $this->response->assertStatus(404);
    }
}
