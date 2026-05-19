<?= view('components/header'); ?>

<?php

$features = [
    [
        'icon' => '🌊',
        'title' => 'Explore Oceans',
        'description' => 'Travel through polluted underwater environments filled with secrets, dangers, and hidden paths.'
    ],

    [
        'icon' => '♻️',
        'title' => 'Clean the Sea',
        'description' => 'Collect garbage and recycle waste materials to help restore balance to marine ecosystems.'
    ],

    [
        'icon' => '⚔️',
        'title' => 'Fight Pollution',
        'description' => 'Face dangerous enemies responsible for spreading toxins across the ocean.'
    ]
];

$screenshots = [
    'Images/game1.png',
    'Images/game2.png',
    'Images/game3.png'
];

?>

<style>
    :root {
        --primary: #008b8f;
        --primary-dark: #006d70;
        --secondary: #d9d3c3;
        --card-bg: #f7f4ed;
        --page-bg: #ece3cb;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: var(--page-bg);
        color: #444;
    }

    /* Banner */

    .banner {
        position: relative;
        overflow: hidden;
    }

    .banner img {
        width: 100%;
        height: 95vh;
        object-fit: cover;
        filter: brightness(55%);
    }

    .banner-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        width: 90%;
    }

    .banner-overlay h1 {
        font-size: clamp(3rem, 7vw, 6rem);
        font-weight: 900;
        letter-spacing: 3px;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    }

    .banner-overlay p {
        font-size: 1.4rem;
        margin-top: 20px;
        max-width: 700px;
        margin-inline: auto;
        line-height: 1.8;
    }

    /* Buttons */

    .custom-btn {
        background: var(--primary);
        color: white;
        border: none;
        padding: 15px 38px;
        border-radius: 50px;
        font-size: 1.05rem;
        font-weight: 700;
        transition: 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin-top: 25px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.18);
    }

    .custom-btn:hover {
        background: var(--primary-dark);
        transform: translateY(-5px);
        color: white;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.22);
    }

    /* Titles */

    .section-title {
        color: var(--primary);
        font-size: 2.8rem;
        font-weight: 900;
        margin-bottom: 25px;
    }

    .section-text {
        font-size: 1.15rem;
        line-height: 2;
        color: #555;
    }

    /* Main Cards */

    .glass-card {
        background: var(--card-bg);
        border-radius: 30px;
        padding: 45px;
        border-top: 6px solid var(--primary);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    /* Feature Cards */

    .feature-box {
        background: var(--card-bg);
        border-radius: 25px;
        padding: 35px;
        border-top: 5px solid var(--primary);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease;
        height: 100%;
    }

    .feature-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .feature-box h4 {
        color: var(--primary);
        font-weight: 800;
        margin-bottom: 15px;
    }

    .feature-box p {
        color: #555;
        line-height: 1.8;
    }

    /* Gameplay */

    .gameplay-img {
        border-radius: 25px;
        overflow: hidden;
        transition: 0.3s ease;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        border-top: 5px solid var(--primary);
        background: var(--card-bg);
    }

    .gameplay-img:hover {
        transform: scale(1.03);
    }

    .gameplay-img img {
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    @media (max-width: 768px) {

        .banner img {
            height: 75vh;
        }

        .banner-overlay h1 {
            font-size: 3rem;
        }

        .banner-overlay p {
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 2.1rem;
        }

        .glass-card {
            padding: 30px;
        }
    }
</style>

<!-- Banner -->
<div class="p-0 container-fluid">

    <div class="banner">

        <img
            <img src="Images/spirit_of_vastum_Banner.png" alt="banner"
            alt="Spirit of Vastum Banner">

        <div class="banner-overlay">

            <h1>Spirit of Vastum</h1>

            <p>
                Dive into a polluted underwater world and fight to restore balance to the seas.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <a href="<?= base_url('story'); ?>" class="custom-btn">
                    View Story
                </a>

                <a href="<?= base_url('devlog'); ?>" class="custom-btn">
                    Visit Devlog
                </a>

            </div>

        </div>

    </div>

</div>

<main>

    <!-- Welcome -->
    <div class="py-5 container">

        <div class="text-center glass-card">

            <h2 class="section-title">
                Welcome to Spirit of Vastum
            </h2>

            <p class="section-text">
                Explore an underwater adventure where players battle pollution,
                protect marine life, and uncover the mysteries hidden beneath the ocean.
            </p>

        </div>

    </div>

    <!-- About -->
    <div class="pb-5 container">

        <div class="glass-card">

            <h2 class="text-center section-title">
                What is Spirit of Vastum?
            </h2>

            <p class="section-text">
                Spirit of Vastum is an environmental action game featuring Bill,
                a determined fishfolk on a mission to restore polluted waters.
                Players collect and recycle garbage while exploring dangerous
                underwater environments filled with enemies and hidden secrets.
                Through engaging gameplay, the game encourages awareness about
                ocean pollution and the importance of protecting marine ecosystems.
            </p>

        </div>

    </div>

    <!-- Features -->
    <div class="pb-5 container">

        <h2 class="text-center section-title">
            Game Features
        </h2>

        <div class="g-4 row">

            <?php foreach ($features as $feature): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="text-center feature-box">

                        <div class="feature-icon">
                            <?= esc($feature['icon']) ?>
                        </div>

                        <h4>
                            <?= esc($feature['title']) ?>
                        </h4>

                        <p>
                            <?= esc($feature['description']) ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>


    <!-- Mission -->
    <div class="pb-5 container">

        <div class="text-center glass-card">

            <h2 class="section-title">
                Our Mission
            </h2>

            <p class="section-text">
                Spirit of Vastum aims to inspire players to care for the environment
                by spreading awareness about ocean pollution through storytelling,
                exploration, and immersive gameplay experiences.
            </p>

        </div>

    </div>

</main>

<?= view('components/footer'); ?>