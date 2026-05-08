<?= view('components/header'); ?>

<div class="d-flex align-items-center justify-content-center container" style="min-height: 80vh;">
  <div class="shadow-lg card" style="max-width: 450px; width: 100%;">
    <div class="card-body">
      <h3 class="mb-4 text-center" style="color: teal;">Register</h3>

      <form action="<?= base_url('signup'); ?>" method="post">
        <div class="mb-3">
          <input class="form-control" name="first_name" placeholder="First Name" required>
        </div>
        <div class="mb-3">
          <input class="form-control" name="last_name" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
          <input class="form-control" name="email" type="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input class="form-control" name="password" type="password" placeholder="Password" required>
        </div>
        <button type="submit" class="w-100 btn" style="background-color: teal; color: #fdf5e6;">
          Register
        </button>
      </form>

      <p class="mt-3 text-center">
        Already have an account? <a href="<?= base_url('login'); ?>" style="color: teal;">Login</a>
      </p>
    </div>
  </div>
</div>

<?= view('components/footer'); ?>