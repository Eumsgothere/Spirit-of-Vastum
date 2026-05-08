<?= view('components/header'); ?>

<div class="d-flex align-items-center justify-content-center container" style="min-height: 80vh;">
    <div class="shadow-lg card" style="max-width: 600px; width: 100%;">
        <div class="card-body">
            <h3 class="mb-4 text-center" style="color: teal;">Create Devlog Post</h3>

            <form action="<?= base_url('devlog/store'); ?>" method="post">
                <div class="mb-3">
                    <input class="form-control" name="title" placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" name="date" type="date" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="content" rows="6" placeholder="Content" required></textarea>
                </div>
                <button type="submit" class="w-100 btn" style="background-color: teal; color: #fdf5e6;">
                    Save Post
                </button>
            </form>
        </div>
    </div>
</div>

<?= view('components/footer'); ?>