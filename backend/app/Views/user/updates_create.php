<?= view('components/header'); ?>

<div class="d-flex align-items-center justify-content-center container" style="min-height: 80vh;">
    <div class="shadow-lg card" style="max-width: 600px; width: 100%;">
        <div class="card-body">
            <h3 class="mb-4 text-center" style="color: teal;">Create Update Log Post</h3>

            <!-- Add enctype for file upload -->
            <form action="<?= base_url('updates/store'); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input class="form-control" name="title" placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <input class="form-control"
                        name="date"
                        type="date"
                        value="<?= date('Y-m-d'); ?>"
                        required>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="content" rows="6" placeholder="Content" required></textarea>
                </div>

                <!-- New image upload field -->
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" name="image" accept="image/*">
                </div>

                <button type="submit" class="w-100 btn" style="background-color: teal; color: #fdf5e6;">
                    Save Update
                </button>
            </form>
        </div>
    </div>
</div>

<?= view('components/footer'); ?>