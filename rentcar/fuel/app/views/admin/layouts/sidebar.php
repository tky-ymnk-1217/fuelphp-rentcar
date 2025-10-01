<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-text mx-3">レンタカー管理</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>ダッシュボード</span>
        </a>
    </li>

    <?php if($role == 'system'): ?>
    <li class="nav-item">
        <a class="nav-link" href="/admin/admins">
            <i class="fas fa-fw fa-users"></i>
            <span>管理者管理</span>
        </a>
    </li>
    <?php endif; ?>
</ul>
