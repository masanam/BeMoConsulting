<?php namespace Tests\Repositories;

use App\Models\Admin\Contacts;
use App\Repositories\Admin\ContactsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ContactsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ContactsRepository
     */
    protected $contactsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->contactsRepo = \App::make(ContactsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_contacts()
    {
        $contacts = factory(Contacts::class)->make()->toArray();

        $createdContacts = $this->contactsRepo->create($contacts);

        $createdContacts = $createdContacts->toArray();
        $this->assertArrayHasKey('id', $createdContacts);
        $this->assertNotNull($createdContacts['id'], 'Created Contacts must have id specified');
        $this->assertNotNull(Contacts::find($createdContacts['id']), 'Contacts with given id must be in DB');
        $this->assertModelData($contacts, $createdContacts);
    }

    /**
     * @test read
     */
    public function test_read_contacts()
    {
        $contacts = factory(Contacts::class)->create();

        $dbContacts = $this->contactsRepo->find($contacts->id);

        $dbContacts = $dbContacts->toArray();
        $this->assertModelData($contacts->toArray(), $dbContacts);
    }

    /**
     * @test update
     */
    public function test_update_contacts()
    {
        $contacts = factory(Contacts::class)->create();
        $fakeContacts = factory(Contacts::class)->make()->toArray();

        $updatedContacts = $this->contactsRepo->update($fakeContacts, $contacts->id);

        $this->assertModelData($fakeContacts, $updatedContacts->toArray());
        $dbContacts = $this->contactsRepo->find($contacts->id);
        $this->assertModelData($fakeContacts, $dbContacts->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_contacts()
    {
        $contacts = factory(Contacts::class)->create();

        $resp = $this->contactsRepo->delete($contacts->id);

        $this->assertTrue($resp);
        $this->assertNull(Contacts::find($contacts->id), 'Contacts should not exist in DB');
    }
}
