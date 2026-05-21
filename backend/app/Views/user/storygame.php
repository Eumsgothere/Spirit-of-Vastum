<?= view('components/header'); ?>

<div class="position-relative d-flex align-items-center about-section"
    style="background: url('/Images/spiritofvastum-bg.png') no-repeat center center / cover; 
            color:#fff; 
            min-height:100vh;">

    <!-- Dark overlay -->
    <div class="overlay"
        style="background: rgba(0,0,0,0.6); 
              position: absolute; 
              top:0; 
              left:0; 
              width:100%; 
              height:100%; 
              z-index:1;">
    </div>

    <div class="position-relative container" style="z-index:2;">
        <div class="align-items-center row">

            <!-- Section Header -->
            <h1 class="mb-5 text-center" style="font-weight:900; letter-spacing:2px;">
                Meet the Characters!
            </h1>

            <?php foreach ($characters as $index => $character): ?>
                <?php if ($index % 2 == 0): ?>
                    <!-- Text Left, Image Right -->
                    <div class="mb-5 text-md-start text-center col-md-6">
                        <h2 class="mb-4" style="font-weight:800;"><?= esc($character['name']) ?></h2>
                        <p class="lead"><?= esc($character['description']) ?></p>
                    </div>
                    <div class="mb-5 text-center col-md-6">
                        <img src="/<?= esc($character['image']) ?>"
                            alt="<?= esc($character['name']) ?>"
                            class="img-fluid" style="max-height:500px;">
                    </div>
                <?php else: ?>
                    <!-- Image Left, Text Right -->
                    <div class="mb-5 text-center col-md-6">
                        <img src="/<?= esc($character['image']) ?>"
                            alt="<?= esc($character['name']) ?>"
                            class="img-fluid" style="max-height:500px;">
                    </div>
                    <div class="mb-5 text-md-start text-center col-md-6">
                        <h2 class="mb-4" style="font-weight:800;"><?= esc($character['name']) ?></h2>
                        <p class="lead"><?= esc($character['description']) ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?= view('components/footer'); ?>