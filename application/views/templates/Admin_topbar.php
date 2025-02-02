<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php if (!is_null($user) && isset($user['image'], $user['nama_user'])): ?>
              <img src="<?= base_url('assets/images/') . $user['image']; ?>" alt=""><?= htmlspecialchars($user['nama_user']); ?>
            <?php else: ?>
              <img src="<?= base_url('assets/images/default.png'); ?>" alt="Guest">Guest
            <?php endif; ?>
            <span class="fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?= base_url('admin/profile'); ?>"><i class="fa fa-user pull-right"></i> My Profile</a></li>
            <li><a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin Keluar?');"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
