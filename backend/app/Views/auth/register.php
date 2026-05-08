<?= view('components/header'); ?>

<style>
  .register-section {
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

  .register-card {
    width: 100%;
    max-width: 460px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(12px);
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 40px 35px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
    color: white;
  }

  .register-title {
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

  .register-btn {
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

  .register-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  .login-text {
    margin-top: 20px;
    text-align: center;
    color: #fdf5e6;
  }

  .login-text a {
    color: #7fffd4;
    text-decoration: none;
    font-weight: 600;
  }

  .login-text a:hover {
    text-decoration: underline;
  }
</style>

<div class="register-section">

  <div class="register-card">

    <h3 class="register-title">
      Register
    </h3>

    <form action="<?= base_url('signup'); ?>" method="post">

      <div class="mb-3">
        <input class="form-control"
          name="first_name"
          placeholder="First Name"
          required>
      </div>

      <div class="mb-3">
        <input class="form-control"
          name="last_name"
          placeholder="Last Name"
          required>
      </div>

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

      <button type="submit" class="register-btn">
        Register
      </button>

    </form>

    <p class="login-text">
      Already have an account?
      <a href="<?= base_url('login'); ?>">
        Login
      </a>
    </p>

  </div>

</div>

<?= view('components/footer'); ?>