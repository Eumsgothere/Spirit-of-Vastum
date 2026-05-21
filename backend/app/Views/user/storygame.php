<?= view('components/header'); ?>

<?php

$story = "Spirit of Vastum follows the journey of Bill, a young fishfolk who joins the River Corps to help protect the ocean from the growing threat of pollution. As he explores dangerous waters filled with waste and mysterious corruption, Bill encounters allies who guide him through the challenges hidden beneath the sea. Along the way, he uncovers secrets connected to the Spirit of Vastum — an ancient force tied to the balance of the ocean itself. Through teamwork, courage, and discovery, Bill learns that protecting the sea is more than just a mission; it is a responsibility shared by everyone.";

$characters = [
    [
        'name' => 'Bill',
        'image' => 'Images/Bill.png',
        'description' => 'A determined young fishfolk who joins the River Corps to protect the ocean. Despite being inexperienced, Bill’s courage and dedication push him forward throughout his journey.'
    ],

    [
        'name' => 'Gill',
        'image' => 'Images/Gill.png',
        'description' => 'A relaxed but highly experienced member of the River Corps. Gill serves as Bill’s mentor, helping him survive the dangers hidden within polluted waters.'
    ],

    [
        'name' => 'Corxalis',
        'image' => 'Images/Corxalis.png',
        'description' => 'The mysterious Spirit of Vastum and guardian of the ocean’s balance. Corxalis watches over the sea and appears during moments of great danger.'
    ],

    [
        'name' => 'The Boss',
        'image' => 'Images/TheBoss.png',
        'description' => 'The strict leader of the River Corps who values discipline and responsibility. Though serious in nature, he deeply cares for the safety of both his team and the ocean.'
    ]
];

?>

<div class="py-5 story-wrapper">

    <div class="container">

        <!-- Header -->
        <header class="mb-5 py-5 text-center story-header">

            <h1 class="story-title">
                GAME STORY
            </h1>

            <p class="story-subtitle">
                Discover the journey of Bill and uncover the mysteries hidden beneath the polluted seas.
            </p>

        </header>

        <!-- Story Section -->
        <div class="justify-content-center row">

            <div class="col-lg-10">

                <section class="mb-5 story-card">

                    <header class="story-topbar"></header>

                    <article class="p-4 p-md-5">

                        <h2 class="story-section-title">
                            Spirit of Vastum
                        </h2>

                        <p class="story-content">
                            <?= esc($story) ?>
                        </p>

                    </article>

                </section>

                <!-- Character Section -->
                <section class="character-section">

                    <div class="container">

                        <h2 class="text-center character-title">
                            Featured Characters
                        </h2>

                        <div class="row g-4">

                            <?php foreach ($characters as $character): ?>

                                <div class="col-lg-6">

                                    <div class="h-100 character-card">

                                        <div class="character-image-wrapper">

                                            <img
                                                src="/<?= esc($character['image']) ?>"
                                                alt="<?= esc($character['name']) ?>"
                                                class="character-image">

                                        </div>

                                        <div class="character-content">

                                            <h3>
                                                <?= esc($character['name']) ?>
                                            </h3>

                                            <p>
                                                <?= esc($character['description']) ?>
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

</div>

<style>
    :root {
        --primary: #00747c;
        --accent: #6fbdbb;
        --bg-light: #f7eedc;
        --bg-main: #e3dac0;
    }

    body {
        background-color: var(--bg-main);
    }

    .story-wrapper {
        min-height: 100vh;
    }

    .story-header {
        background-color: var(--bg-light);
        border-radius: 25px;
        padding: 70px 25px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .story-title {
        color: var(--primary);
        font-size: clamp(2.8rem, 6vw, 4.5rem);
        font-weight: 900;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .story-subtitle {
        color: #4d6668;
        font-size: 1.15rem;
        max-width: 750px;
        margin: auto;
        line-height: 2;
        font-weight: 500;
    }

    .story-card {
        background: var(--bg-light);
        border-radius: 25px;
        overflow: hidden;
        border: 2px solid rgba(70, 129, 137, 0.2);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease;
    }

    .story-card:hover {
        transform: translateY(-5px);
    }

    .story-topbar {
        height: 8px;
        background: linear-gradient(to right, var(--primary), var(--accent));
    }

    .story-section-title {
        color: var(--primary);
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 20px;
        text-align: center;
    }

    .story-content {
        color: #444;
        font-size: 1.08rem;
        line-height: 2;
        text-align: justify;
    }

    .character-section {
        margin-top: 70px;
        margin-bottom: 40px;
    }

    .character-title {
        color: var(--primary);
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 900;
        margin-bottom: 50px;
    }

    .character-card {
        background: var(--bg-light);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 2px solid rgba(70, 129, 137, 0.15);
    }

    .character-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .character-image-wrapper {
        background: linear-gradient(to bottom, #d8efe8, #f7eedc);
        padding: 30px;
        text-align: center;
    }

    .character-image {
        width: 100%;
        max-width: 260px;
        transition: transform 0.3s ease;
    }

    .character-card:hover .character-image {
        transform: scale(1.05);
    }

    .character-content {
        padding: 30px;
    }

    .character-content h3 {
        color: var(--primary);
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-align: center;
    }

    .character-content p {
        color: #444;
        font-size: 1.02rem;
        line-height: 1.9;
        text-align: justify;
    }

    @media (max-width: 768px) {

        .story-header {
            padding: 50px 20px;
        }

        .story-title {
            font-size: 2.3rem;
        }

        .story-subtitle {
            font-size: 1rem;
        }

        .story-section-title {
            font-size: 1.7rem;
        }

        .story-content {
            font-size: 1rem;
            line-height: 1.8;
        }

        .character-title {
            font-size: 2.2rem;
        }

        .character-content {
            padding: 25px;
        }

        .character-content h3 {
            font-size: 1.7rem;
        }

        .character-content p {
            font-size: 0.98rem;
            line-height: 1.8;
        }

        .character-image {
            max-width: 200px;
        }
    }
</style>

<?= view('components/footer'); ?>