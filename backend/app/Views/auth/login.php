<?= view('components/header'); ?>

<div class="d-flex align-items-center justify-content-center container" style="min-height: 80vh;">
  <div class="shadow-lg card" style="max-width: 400px; width: 100%;">
    <div class="card-body">
      <h3 class="mb-4 text-center" style="color: teal;">Login</h3>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <form action="<?= base_url('login'); ?>" method="post">
        <div class="mb-3">
          <input class="form-control" name="email" type="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input class="form-control" name="password" type="password" placeholder="Password" required>
        </div>
        <button type="submit" class="w-100 btn" style="background-color: teal; color: #fdf5e6;">
          Login
        </button>
      </form>

      <p class="mt-3 text-center">
        Don’t have an account? <a href="<?= base_url('signup'); ?>" style="color: teal;">Register</a>
      </p>
    </div>
  </div>
</div>

<?= view('components/footer'); ?>