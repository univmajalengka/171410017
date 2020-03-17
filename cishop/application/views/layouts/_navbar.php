<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">IE-SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle text-light" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
          <div class="dropdown-menu" aria-labelledby="dropdown-1">
            <a href="/admin-category.html" class="dropdown-item">Kategori</a>
            <a href="/admin-product.html" class="dropdown-item">Product</a>
            <a href="/admin-order.html" class="dropdown-item">Order</a>
            <a href="/admin-users.html" class="dropdown-item">Pengguna</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/cart.html" class="nav-link text-light"><i class="fas fa-shopping-cart"></i> Cart(0)</a>
        </li>
        <?php if (!$this->session->userdata('is_login')) : ?>
          <li class="nav-item">
            <a href="<?= base_url('/login') ?>" class="nav-link text-light">Login</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/register') ?>" class="nav-link text-light">Register</a>
          </li>
        <?php else : ?>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-light" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name') ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown-2">
              <a href="/profile.html" class="dropdown-item">Profile</a>
              <a href="/orders.html" class="dropdown-item">Orders</a>
              <a href="<?= base_url('/logout') ?>" class="dropdown-item">Logout</a>
            </div>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>