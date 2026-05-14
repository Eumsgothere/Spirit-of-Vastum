<?= view('components/header'); ?>

<div class="login-section">
    <div class="login-card">
        <h3 class="login-title">Reset Password</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('reset-password/' . $token); ?>" method="post">
            <div class="mb-3">
                <input class="form-control" name="password" type="password" placeholder="New Password" required>
            </div>
            <div class="mb-3">
                <input class="form-control" name="password_confirm" type="password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="login-btn">Update Password</button>
        </form>
    </div>
</div>

<?= view('components/footer'); ?>