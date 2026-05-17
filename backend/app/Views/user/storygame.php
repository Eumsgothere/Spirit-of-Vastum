<?= view('components/header'); ?>

<?php

$chapters = [
    [
        'title' => 'Chapter 1: The Polluted Depths',
        'content' => 'Bill begins his journey in murky waters filled with trash and toxins.
        As he swims deeper, he realizes the scale of pollution threatening marine life.
        Dangerous waste drifts across the ocean floor while weakened sea creatures struggle to survive.
        Witnessing the destruction firsthand motivates Bill to take action and protect the waters he calls home.'
    ],
    [
        'title' => 'Chapter 2: Allies of the Sea',
        'content' => 'Along the way, Bill meets friendly sea creatures who guide him and
        provide knowledge about protecting their fragile ecosystem.
        Together, they explore hidden reefs, abandoned ruins, and polluted rivers while discovering
        the importance of unity and environmental responsibility.'
    ],
    [
        'title' => 'Chapter 3: The Final Battle',
        'content' => 'Bill confronts the source of pollution — a massive waste dump
        spreading toxins across the ocean. With courage and determination,
        he fights to restore balance and bring hope back to the seas.
        As the battle intensifies, Bill realizes that saving the ocean will require sacrifice,
        teamwork, and the courage to face overwhelming challenges.'
    ]
];

$characters = [
    [
        'name' => 'Bill',
        'image' => 'Images/Bill.png',
        'description' => 'Bill is a hardworking fishfolk from the West Philippine Sea.
        Determined and resilient, he joins the River Corps to help clean and protect the ocean.
        Despite his lack of experience, Bill possesses strong determination and a deep love for marine life.
        Throughout his adventure, he learns valuable lessons about leadership, courage, and responsibility
        while inspiring others to fight against pollution and environmental destruction.'
    ],

    [
        'name' => 'Gill',
        'image' => 'Images/Gill.png',
        'description' => 'Gill is a laidback senior member of the River Corps.
        With years of experience, he guides Bill throughout his journey.
        Although calm and humorous, Gill is highly skilled in underwater survival and understands
        the dangers hidden beneath polluted waters. He acts as Bill’s mentor and teaches him
        how to remain focused even during difficult situations.'
    ],

    [
        'name' => 'Corxalis',
        'image' => 'Images/Corxalis.png',
        'description' => 'Corxalis is the mysterious Spirit of Vastum,
        a guardian who maintains balance between nature and external forces.
        Ancient and wise, Corxalis appears only during moments of great danger to the ocean.
        With powers connected to the sea itself, Corxalis helps guide Bill toward understanding
        the true consequences of pollution and humanity’s impact on marine ecosystems.'
    ],

    [
        'name' => 'The Boss',
        'image' => 'Images/TheBoss.png',
        'description' => 'The Boss is the strict leader of the River Corps.
        Known for discipline and authority, he assigns Bill to Gill.
        While feared by many recruits because of his serious personality,
        he deeply cares about the safety of the ocean and the people under his command.
        His leadership keeps the River Corps united during dangerous missions and times of crisis.'
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
                Discover the journey of Bill and the fight to restore balance in the ocean.
            </p>

        </header>

        <!-- Story Chapters -->
        <div class="justify-content-center row">

            <div class="col-lg-10">

                <?php foreach ($chapters as $chapter): ?>

                    <section class="mb-5 story-card">

                        <header class="story-topbar"></header>

                        <article class="p-4">

                            <h2 class="chapter-title">
                                <?= esc($chapter['title']) ?>
                            </h2>

                            <p class="chapter-content">
                                <?= esc($chapter['content']) ?>
                            </p>

                        </article>

                    </section>

                <?php endforeach; ?>

                <!-- Character Section -->
                <section class="character-section">

                    <div class="py-5 container">

                        <h2 class="text-center character-title">
                            Featured Characters
                        </h2>

                        <?php foreach ($characters as $index => $character): ?>

                            <div class="character-block <?= $index % 2 ? 'reverse' : '' ?>">

                                <div class="character-text">

                                    <h3>
                                        <?= esc($character['name']) ?>
                                    </h3>

                                    <p>
                                        <?= esc($character['description']) ?>
                                    </p>

                                </div>

                                <div class="character-image">

                                    <img
                                        src="<?= base_url($character['image']) ?>"
                                        alt="<?= esc($character['name']) ?>">

                                </div>

                            </div>

                        <?php endforeach; ?>

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
    }

    body {
        background-color: #e3dac0;
    }

    .story-wrapper {
        min-height: 100vh;
    }

    .story-header {
        background-color: var(--bg-light);
        border-radius: 20px;
        padding: 60px 20px;
        margin-bottom: 60px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .story-title {
        color: var(--primary);
        font-size: clamp(2.5rem, 6vw, 4rem);
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .story-subtitle {
        color: var(--accent);
        font-size: 1.2rem;
        max-width: 700px;
        margin: auto;
        line-height: 1.8;
        font-weight: 500;
    }

    .story-card {
        background: var(--bg-light);
        border-radius: 25px;
        overflow: hidden;
        border: 2px solid rgba(70, 129, 137, 0.3);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        margin-bottom: 40px;
    }

    .story-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .story-topbar {
        height: 8px;
        background: linear-gradient(to right, var(--primary), var(--accent));
    }

    .chapter-title {
        color: var(--primary);
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .chapter-content {
        color: #444;
        font-size: 1.1rem;
        line-height: 2;
        text-align: justify;
    }

    .character-section {
        background-color: var(--bg-light);
        border-radius: 25px;
        padding: 60px 20px;
        margin-top: 60px;
    }

    .character-title {
        color: var(--primary);
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 60px;
    }

    .character-block {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 80px;
        margin-bottom: 120px;
    }

    .character-block.reverse {
        flex-direction: row-reverse;
    }

    .character-text {
        flex: 1;
        max-width: 650px;
    }

    .character-text h3 {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 20px;
    }

    .character-text p {
        font-size: 1.15rem;
        line-height: 2;
        text-align: justify;
        color: #333;
    }

    .character-image img {
        max-width: 360px;
        border-radius: 20px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.4);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .character-image img:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {

        .story-title {
            font-size: 2.5rem;
        }

        .chapter-title {
            font-size: 1.5rem;
        }

        .chapter-content {
            font-size: 1rem;
        }

        .character-title {
            font-size: 2.2rem;
        }

        .character-block {
            flex-direction: column;
            text-align: center;
            gap: 40px;
            margin-bottom: 80px;
        }

        .character-block.reverse {
            flex-direction: column;
        }

        .character-text {
            max-width: 100%;
        }

        .character-text h3 {
            font-size: 2rem;
        }

        .character-text p {
            font-size: 1rem;
            line-height: 1.8;
        }

        .character-image img {
            max-width: 240px;
        }
    }
</style>

<?= view('components/footer'); ?>