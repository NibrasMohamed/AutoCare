<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('employees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('employees.index') }}"><i class="fas fa-building"></i><span>Employees</span></a>
</li>

<li class="side-menus {{ Request::is('repairs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('repairs.index') }}"><i class="fas fa-building"></i><span>Repairs</span></a>
</li>

