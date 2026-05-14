<?= view('components/header'); ?>

<div class="login-section">
    <div class="login-card">
        <h3 class="login-title">Forgot Password</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('forgot-password'); ?>" method="post">
            <div class="mb-3">
                <input class="form-control" name="email" type="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="login-btn">Send Reset Link</button>
        </form>
    </div>
</div>

<?= view('components/footer'); ?>