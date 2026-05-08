<?= view('components/header'); ?>

<div class="mt-5 container">
    <h2 class="text-center" style="color: teal; font-weight: 800; font-size: 3rem;">Developer Logs</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php if (session()->get('role') === 'admin'): ?>
        <div class="mb-3 text-end">
            <a href="<?= base_url('devlog/create'); ?>" class="btn btn-success">+ Create Post</a>
        </div>
    <?php endif; ?>

    <?php foreach ($posts as $post): ?>
        <div class="shadow-sm mt-4 card" style="border: 3px solid teal; background-color: #fdf5e6;">
            <div class="card-body">
                <h3 style="color: teal; font-weight: 700; font-size: 2rem;"><?= esc($post['title']); ?></h3>
                <p style="font-size: 1.4rem; color: #555;"><strong>Date:</strong> <?= esc($post['date']); ?></p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;"><?= esc($post['content']); ?></p>

                <?php if (session()->get('role') === 'admin'): ?>
                    <form action="<?= base_url('devlog/delete/' . $post['id']); ?>" method="post" style="display:inline;">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= view('components/footer'); ?>