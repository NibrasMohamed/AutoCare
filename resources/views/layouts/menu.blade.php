<li class="side-menus {{ Request::is('dashboard') ? 'active' : '' }}">
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

<li class="side-menus {{ Request::is('inventories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inventories.index') }}"><i class="fas fa-building"></i><span>Inventory</span></a>
</li>

<li class="side-menus {{ Request::is('suppliers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('suppliers.index') }}"><i class="fas fa-building"></i><span>Suppliers</span></a>
</li>

<li class="side-menus {{ Request::is('spareParts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('spareParts.index') }}"><i class="fas fa-building"></i><span>Spare Parts</span></a>
</li>

<li class="side-menus {{ Request::is('orders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('orders.index') }}"><i class="fas fa-building"></i><span>Orders</span></a>
</li>

<li class="side-menus {{ Request::is('repairTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('repairTypes.index') }}"><i class="fas fa-building"></i><span>Repair Types</span></a>
</li>

<li class="side-menus {{ Request::is('supplierInventories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('supplierInventories.index') }}"><i class="fas fa-building"></i><span>Supplier Inventories</span></a>
</li>

<li class="side-menus {{ Request::is('manufacturers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('manufacturers.index') }}"><i class="fas fa-building"></i><span>Manufacturers</span></a>
</li>

<li class="side-menus {{ Request::is('appointments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('appointments.index') }}"><i class="fas fa-building"></i><span>Appointments</span></a>
</li>

<li class="side-menus {{ Request::is('vehicles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('vehicles.index') }}"><i class="fas fa-building"></i><span>Vehicles</span></a>
</li>

