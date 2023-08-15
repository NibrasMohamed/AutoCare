<?php
$user = auth()->user();
?>

@if ($user->hasRole('employee') || $user->hasRole('manager') || $user->hasRole('admin'))
    <li class="side-menus {{ Request::is('repairs.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('repairs.index') }}">
            <i class=" fas fa-building"></i><span>Appointments</span>
        </a>
    </li>
@endif

@if ($user->hasRole('admin') || $user->hasRole('manager'))
    {{-- <li class="side-menus {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class=" fas fa-building"></i><span>Dashboard</span>
        </a>
    </li> --}}

    <li class="side-menus {{ Request::is('employees*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('employees.index') }}"><i class="fas fa-building"></i><span>Employees</span></a>
    </li>

    <li class="side-menus {{ Request::is('repairs*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('repairs.index') }}"><i class="fas fa-building"></i><span>Repairs</span></a>
    </li>

    <li class="side-menus {{ Request::is('inventories*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('inventories.index') }}"><i
                class="fas fa-building"></i><span>Inventory</span></a>
    </li>

    <li class="side-menus {{ Request::is('suppliers*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('suppliers.index') }}"><i
                class="fas fa-building"></i><span>Suppliers</span></a>
    </li>

    <li class="side-menus {{ Request::is('spareParts*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('spareParts.index') }}"><i class="fas fa-building"></i><span>Spare
                Parts</span></a>
    </li>

    <li class="side-menus {{ Request::is('orders*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('orders.index') }}"><i class="fas fa-building"></i><span>Orders</span></a>
    </li>

    <li class="side-menus {{ Request::is('repairTypes*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('repairTypes.index') }}"><i class="fas fa-building"></i><span>Repair
                Types</span></a>
    </li>

    <li class="side-menus {{ Request::is('supplierInventories*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('supplierInventories.index') }}"><i
                class="fas fa-building"></i><span>Supplier Inventories</span></a>
    </li>

    <li class="side-menus {{ Request::is('manufacturers*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('manufacturers.index') }}"><i
                class="fas fa-building"></i><span>Manufacturers</span></a>
    </li>

    <li class="side-menus {{ Request::is('appointments*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('appointments.index') }}"><i
                class="fas fa-building"></i><span>Appointments</span></a>
    </li>

    <li class="side-menus {{ Request::is('vehicles*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('vehicles.index') }}"><i
                class="fas fa-building"></i><span>Vehicles</span></a>
    </li>
@endif

@if ($user->hasRole('customer'))
    <li class="side-menus {{ Request::is('vehicles*') ? 'active' : '' }}">
        <a class="nav-link" href="/make-appointment"><i
                class="fas fa-building"></i><span>Vehicles</span></a>
    </li>
@endif
