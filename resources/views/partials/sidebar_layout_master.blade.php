<button class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-chevron-left"></i>
</button>

<div class="p-4">
    <h4 class="logo-text fw-bold mb-0">NexusFlow</h4>
    <p class="text-muted small hide-on-collapse">Dashboard</p>
</div>

<div class="nav flex-column">
    <a href="{{ route('admin-view') }}" class="sidebar-link active text-decoration-none p-3">
        <i class="fas fa-home me-3"></i>
        <span class="hide-on-collapse">Dashboard</span>
    </a>
    <a href="{{ route('information-product') }}" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-chart-bar me-3"></i>
        <span class="hide-on-collapse">information product</span>
    </a>
    <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-users me-3"></i>
        <span class="hide-on-collapse">Customers</span>
    </a>

    <a href="{{ route('create-product') }}" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-box me-3"></i>
        <span class="hide-on-collapse">Products</span>
    </a>
    <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-gear me-3"></i>
        <span class="hide-on-collapse">Settings</span>
    </a>
</div>

<div class="profile-section mt-auto p-2 d-flex">
    <div class="d-flex align-items-center">
        <img src="/storage/duy.jpg" style="height:60px" class="rounded-circle" alt="Profile">
        <div class="ms-3 profile-info">
            <h6 class="text-white mb-0">{{ $user['name'] }}</h6>
            <small class="text-white">{{ $user['rolse'] }}</small>
        </div>
    </div>
    <div class="logout-zone">
        <button id="id-Logout-btn">Logout</button>
    </div>

</div>
