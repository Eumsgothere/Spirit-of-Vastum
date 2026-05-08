<?= view('components/header'); ?>

<div class="py-5 devlog-wrapper">
    <div class="container">

        <!-- Page Header -->
        <div class="mb-5 text-center">
            <h1 class="devlog-title">Developer Logs</h1>
            <p class="devlog-subtitle">
                Follow the latest updates, improvements, and development progress of Spirit of Vastum.
            </p>
        </div>

        <!-- Alerts -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="text-center alert custom-alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="text-center alert custom-alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Create Button -->
        <?php if (session()->get('role') === 'admin'): ?>
            <div class="mb-4 text-end">
                <a href="<?= base_url('devlog/create'); ?>" class="btn create-btn">
                    + Create Post
                </a>
            </div>
        <?php endif; ?>

        <!-- Dev Logs -->
        <div class="justify-content-center row">
            <div class="col-lg-10">

                <?php foreach ($posts as $post): ?>
                    <div class="mb-5 devlog-card">

                        <!-- Decorative Top Bar -->
                        <div class="devlog-topbar"></div>

                        <div class="p-4">

                            <!-- Date Badge -->
                            <div class="mb-3">
                                <span class="date-badge">
                                    <?= esc($post['date']); ?>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="post-title">
                                <?= esc($post['title']); ?>
                            </h2>

                            <!-- Content -->
                            <p class="post-content">
                                <?= esc($post['content']); ?>
                            </p>

                            <!-- Admin Controls -->
                            <?php if (session()->get('role') === 'admin'): ?>
                                <div class="mt-4 text-end">
                                    <form action="<?= base_url('devlog/delete/' . $post['id']); ?>" method="post" style="display:inline;">
                                        <button type="submit" class="btn delete-btn">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>

<style>
    .devlog-wrapper {
        min-height: 100vh;
    }

    .devlog-title {
        color: teal;
        font-size: 3.5rem;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .devlog-subtitle {
        color: #666;
        font-size: 1.1rem;
        max-width: 700px;
        margin: auto;
        margin-top: 15px;
        line-height: 1.8;
    }

    .devlog-card {
        background: #fffaf0;
        border-radius: 25px;
        overflow: hidden;
        border: 2px solid rgba(0, 128, 128, 0.2);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
    }

    .devlog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 128, 128, 0.15);
    }

    .devlog-topbar {
        height: 8px;
        background: linear-gradient(to right, teal, #00b3b3);
    }

    .date-badge {
        background-color: rgba(0, 128, 128, 0.12);
        color: teal;
        padding: 8px 16px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.9rem;
        display: inline-block;
    }

    .post-title {
        color: teal;
        font-size: 2.1rem;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .post-content {
        color: #444;
        font-size: 1.15rem;
        line-height: 2;
        white-space: pre-line;
    }

    .create-btn {
        background-color: teal;
        color: white;
        padding: 12px 25px;
        border-radius: 12px;
        font-weight: 700;
        border: none;
        transition: 0.3s ease;
    }

    .create-btn:hover {
        background-color: #006d6d;
        color: white;
        transform: scale(1.03);
    }

    .delete-btn {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 10px;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .delete-btn:hover {
        background-color: #bb2d3b;
        transform: scale(1.03);
    }

    .custom-alert-success {
        background-color: #d1f2eb;
        border: 2px solid teal;
        color: teal;
        border-radius: 15px;
        padding: 15px;
        font-weight: 600;
    }

    .custom-alert-danger {
        background-color: #ffe5e5;
        border: 2px solid #dc3545;
        color: #b02a37;
        border-radius: 15px;
        padding: 15px;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .devlog-title {
            font-size: 2.5rem;
        }

        .post-title {
            font-size: 1.6rem;
        }

        .post-content {
            font-size: 1rem;
        }
    }
</style>

<?= view('components/footer'); ?>