<li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.users.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/menuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.menuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Menus</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/sliders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.sliders.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sliders</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/contents*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.contents.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contents</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/contacts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.contacts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contacts</span>
    </a>
</li>
