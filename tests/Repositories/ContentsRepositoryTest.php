<?php namespace Tests\Repositories;

use App\Models\Admin\Contents;
use App\Repositories\Admin\ContentsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ContentsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ContentsRepository
     */
    protected $contentsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->contentsRepo = \App::make(ContentsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_contents()
    {
        $contents = factory(Contents::class)->make()->toArray();

        $createdContents = $this->contentsRepo->create($contents);

        $createdContents = $createdContents->toArray();
        $this->assertArrayHasKey('id', $createdContents);
        $this->assertNotNull($createdContents['id'], 'Created Contents must have id specified');
        $this->assertNotNull(Contents::find($createdContents['id']), 'Contents with given id must be in DB');
        $this->assertModelData($contents, $createdContents);
    }

    /**
     * @test read
     */
    public function test_read_contents()
    {
        $contents = factory(Contents::class)->create();

        $dbContents = $this->contentsRepo->find($contents->id);

        $dbContents = $dbContents->toArray();
        $this->assertModelData($contents->toArray(), $dbContents);
    }

    /**
     * @test update
     */
    public function test_update_contents()
    {
        $contents = factory(Contents::class)->create();
        $fakeContents = factory(Contents::class)->make()->toArray();

        $updatedContents = $this->contentsRepo->update($fakeContents, $contents->id);

        $this->assertModelData($fakeContents, $updatedContents->toArray());
        $dbContents = $this->contentsRepo->find($contents->id);
        $this->assertModelData($fakeContents, $dbContents->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_contents()
    {
        $contents = factory(Contents::class)->create();

        $resp = $this->contentsRepo->delete($contents->id);

        $this->assertTrue($resp);
        $this->assertNull(Contents::find($contents->id), 'Contents should not exist in DB');
    }
}
