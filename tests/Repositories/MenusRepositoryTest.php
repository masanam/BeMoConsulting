<?php namespace Tests\Repositories;

use App\Models\Admin\Menus;
use App\Repositories\Admin\MenusRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class MenusRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var MenusRepository
     */
    protected $menusRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->menusRepo = \App::make(MenusRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_menus()
    {
        $menus = factory(Menus::class)->make()->toArray();

        $createdMenus = $this->menusRepo->create($menus);

        $createdMenus = $createdMenus->toArray();
        $this->assertArrayHasKey('id', $createdMenus);
        $this->assertNotNull($createdMenus['id'], 'Created Menus must have id specified');
        $this->assertNotNull(Menus::find($createdMenus['id']), 'Menus with given id must be in DB');
        $this->assertModelData($menus, $createdMenus);
    }

    /**
     * @test read
     */
    public function test_read_menus()
    {
        $menus = factory(Menus::class)->create();

        $dbMenus = $this->menusRepo->find($menus->id);

        $dbMenus = $dbMenus->toArray();
        $this->assertModelData($menus->toArray(), $dbMenus);
    }

    /**
     * @test update
     */
    public function test_update_menus()
    {
        $menus = factory(Menus::class)->create();
        $fakeMenus = factory(Menus::class)->make()->toArray();

        $updatedMenus = $this->menusRepo->update($fakeMenus, $menus->id);

        $this->assertModelData($fakeMenus, $updatedMenus->toArray());
        $dbMenus = $this->menusRepo->find($menus->id);
        $this->assertModelData($fakeMenus, $dbMenus->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_menus()
    {
        $menus = factory(Menus::class)->create();

        $resp = $this->menusRepo->delete($menus->id);

        $this->assertTrue($resp);
        $this->assertNull(Menus::find($menus->id), 'Menus should not exist in DB');
    }
}
