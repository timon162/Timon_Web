<button class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-chevron-left"></i>
</button>

<div class="p-4">
    <h4 class="logo-text fw-bold mb-0">NexusFlow</h4>
    <p class="text-muted small hide-on-collapse">Dashboard</p>
</div>

<div class="nav flex-column">
    <a href="#" class="sidebar-link active text-decoration-none p-3">
        <i class="fas fa-home me-3"></i>
        <span class="hide-on-collapse">Dashboard</span>
    </a>
    <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-chart-bar me-3"></i>
        <span class="hide-on-collapse">Analytics</span>
    </a>
    <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-users me-3"></i>
        <span class="hide-on-collapse">Customers</span>
    </a>

    <a href="#" class="sidebar-link text-decoration-none p-3">
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
        <img src="https://scontent.fvca1-2.fna.fbcdn.net/v/t39.30808-1/335021336_224267506837577_4734492825034716372_n.jpg?stp=cp0_dst-jpg_s40x40_tt6&_nc_cat=104&ccb=1-7&_nc_sid=28885b&_nc_ohc=scnbMYFPFLwQ7kNvwGEWSUY&_nc_oc=AdkhkduxiZGjU7xoxJmSglU2K5xF1BWlCdNR3Cx1OwmHMB8ZqITNG_A2YoS7K7CdfI4&_nc_zt=24&_nc_ht=scontent.fvca1-2.fna&_nc_gid=clIBduV2XCctgY-ggCtvpA&oh=00_AfhQmYGY0q869gMdqZTmQCIL1nxWBmE-yEpykWbawVfifA&oe=69318ADE"
            style="height:60px" class="rounded-circle" alt="Profile">
        <div class="ms-3 profile-info">
            <h6 class="text-white mb-0">{{ $user['name'] }}</h6>
            <small class="text-white">{{ $user['rolse'] }}</small>
        </div>
    </div>
    <div class="logout-zone">
        <button id="id-Logout-btn">Logout</button>
    </div>

</div>
