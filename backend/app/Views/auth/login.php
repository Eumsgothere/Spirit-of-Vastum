<?= view('components/header'); ?>

<style>
  .login-section {
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
      url("<?= base_url('Images/spirit_of_vastum_Banner.png'); ?>");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
  }

  .login-card {
    width: 100%;
    max-width: 430px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(12px);
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 40px 35px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
    color: white;
  }

  .login-title {
    text-align: center;
    font-size: 2.3rem;
    font-weight: 800;
    margin-bottom: 30px;
    color: #fdf5e6;
  }

  .form-control {
    border-radius: 15px;
    padding: 14px;
    border: none;
    background: rgba(255, 255, 255, 0.9);
    font-size: 1rem;
  }

  .form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 128, 128, 0.3);
  }

  .login-btn {
    width: 100%;
    background: linear-gradient(135deg, teal, #00b3b3);
    border: none;
    color: white;
    padding: 14px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: 0.3s ease;
  }

  .login-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  .register-text {
    margin-top: 20px;
    text-align: center;
    color: #fdf5e6;
  }

  .register-text a {
    color: #7fffd4;
    text-decoration: none;
    font-weight: 600;
  }

  .register-text a:hover {
    text-decoration: underline;
  }

  .alert {
    border-radius: 12px;
  }
</style>

<div class="login-section">

  <div class="login-card">

    <h3 class="login-title">
      Login
    </h3>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <form action="<?= base_url('login'); ?>" method="post">

      <div class="mb-3">
        <input class="form-control"
          name="email"
          type="email"
          placeholder="Email"
          required>
      </div>

      <div class="mb-4">
        <input class="form-control"
          name="password"
          type="password"
          placeholder="Password"
          required>
      </div>

      <button type="submit" class="login-btn">
        Login
      </button>

    </form>

    <p class="register-text">
      Don’t have an account?
      <a href="<?= base_url('signup'); ?>">
        Register
      </a>
    </p>

  </div>

</div>

<?= view('components/footer'); ?>