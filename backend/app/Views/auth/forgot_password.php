<?= view('components/header'); ?>

<style>
    body {
        background-color: #F4E9CD;
        font-family: Arial, sans-serif;
    }

    .login-section {
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .login-card {
        width: 100%;
        max-width: 450px;
        background: white;
        border-radius: 30px;
        padding: 50px 40px;
        border-top: 8px solid #468189;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        position: relative;
        overflow: hidden;
    }

    .login-card::before {
        content: "";
        position: absolute;
        top: -60px;
        right: -60px;
        width: 180px;
        height: 180px;
        background: rgba(70, 129, 137, 0.12);
        border-radius: 50%;
    }

    .login-card::after {
        content: "";
        position: absolute;
        bottom: -70px;
        left: -70px;
        width: 200px;
        height: 200px;
        background: rgba(3, 25, 38, 0.08);
        border-radius: 50%;
    }

    .login-title {
        text-align: center;
        font-size: 2.2rem;
        font-weight: 800;
        color: #031926;
        margin-bottom: 12px;
        position: relative;
        z-index: 2;
    }

    .login-subtitle {
        text-align: center;
        color: #555;
        margin-bottom: 35px;
        line-height: 1.8;
        position: relative;
        z-index: 2;
    }

    .form-control {
        border-radius: 15px;
        padding: 14px 18px;
        border: 2px solid #d9d9d9;
        font-size: 1rem;
        transition: 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .form-control:focus {
        border-color: #468189;
        box-shadow: 0 0 0 0.2rem rgba(70, 129, 137, 0.2);
    }

    .login-btn {
        width: 100%;
        background: linear-gradient(135deg, #031926, #468189);
        color: #F4E9CD;
        border: none;
        padding: 14px;
        border-radius: 15px;
        font-size: 1rem;
        font-weight: 700;
        transition: 0.3s ease;
        margin-top: 10px;
        position: relative;
        z-index: 2;
    }

    .login-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(3, 25, 38, 0.25);
    }

    .alert {
        border-radius: 15px;
        padding: 14px 18px;
        font-size: 0.95rem;
        position: relative;
        z-index: 2;
    }

    .alert-danger {
        background: #ffe3e3;
        color: #b02a37;
        border: none;
    }

    .alert-success {
        background: #d1f7df;
        color: #146c43;
        border: none;
    }

    @media (max-width: 576px) {

        .login-card {
            padding: 40px 25px;
        }

        .login-title {
            font-size: 1.9rem;
        }
    }
</style>

<div class="login-section">

    <div class="login-card">

        <h3 class="login-title">
            Forgot Password
        </h3>

        <p class="login-subtitle">
            Enter your email address and we’ll send you a link to reset your password.
        </p>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('forgot-password'); ?>" method="post">

            <div class="mb-3">

                <input
                    class="form-control"
                    name="email"
                    type="email"
                    placeholder="Enter your email"
                    required>

            </div>

            <button type="submit" class="login-btn">
                Send Reset Link
            </button>

        </form>

    </div>

</div>

<?= view('components/footer'); ?>