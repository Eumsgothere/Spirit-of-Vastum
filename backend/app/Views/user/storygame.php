<?= view('components/header'); ?>

<div class="py-5 story-wrapper">
    <div class="container">

        <!-- Page Header -->
        <div class="mb-5 text-center">
            <h1 class="story-title">Game Story</h1>
            <p class="story-subtitle">
                Discover the journey of Bill and the fight to restore balance in the ocean.
            </p>
        </div>

        <!-- Story Cards -->
        <div class="justify-content-center row">
            <div class="col-lg-10">

                <!-- Chapter 1 -->
                <div class="mb-5 story-card">
                    <div class="story-topbar"></div>
                    <div class="p-4">
                        <h2 class="chapter-title">Chapter 1: The Polluted Depths</h2>
                        <p class="chapter-content">
                            Bill begins his journey in murky waters filled with trash and toxins.
                            As he swims deeper, he realizes the scale of pollution threatening marine life.
                        </p>
                    </div>
                </div>

                <!-- Chapter 2 -->
                <div class="mb-5 story-card">
                    <div class="story-topbar"></div>
                    <div class="p-4">
                        <h2 class="chapter-title">Chapter 2: Allies of the Sea</h2>
                        <p class="chapter-content">
                            Along the way, Bill meets friendly sea creatures who guide him and
                            provide knowledge about protecting their fragile ecosystem.
                        </p>
                    </div>
                </div>

                <!-- Chapter 3 -->
                <div class="mb-5 story-card">
                    <div class="story-topbar"></div>
                    <div class="p-4">
                        <h2 class="chapter-title">Chapter 3: The Final Battle</h2>
                        <p class="chapter-content">
                            Bill confronts the source of pollution — a massive waste dump
                            spreading toxins across the ocean. With courage and determination,
                            he fights to restore balance and bring hope back to the seas.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<style>
    .story-wrapper {
        min-height: 100vh;
    }

    .story-title {
        color: #031926;
        font-size: 3.5rem;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .story-subtitle {
        color: #468189;
        font-size: 1.1rem;
        max-width: 700px;
        margin: auto;
        margin-top: 15px;
        line-height: 1.8;
    }

    .story-card {
        background: #fffaf0;
        border-radius: 25px;
        overflow: hidden;
        border: 2px solid rgba(70, 129, 137, 0.3);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
    }

    .story-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .story-topbar {
        height: 8px;
        background: linear-gradient(to right, #031926, #468189);
    }

    .chapter-title {
        color: #031926;
        font-size: 2.1rem;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .chapter-content {
        color: #444;
        font-size: 1.15rem;
        line-height: 2;
        white-space: pre-line;
    }

    @media (max-width: 768px) {
        .story-title {
            font-size: 2.5rem;
        }

        .chapter-title {
            font-size: 1.6rem;
        }

        .chapter-content {
            font-size: 1rem;
        }
    }
</style>

<?= view('components/footer'); ?>