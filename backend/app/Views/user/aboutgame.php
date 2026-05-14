<?= view('components/header'); ?>

<style>
    body {
        background-color: #F4E9CD;
        font-family: Arial, sans-serif;
    }

    /* HERO SECTION */
    .about-hero {
        background: linear-gradient(135deg, #031926, #468189);
        border-radius: 25px;
        padding: 90px 50px;
        color: #F4E9CD;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(3, 25, 38, 0.25);
    }

    .about-title {
        font-size: clamp(2rem, 5vw, 3.8rem);
        font-weight: 800;
        margin-bottom: 20px;
        color: #F4E9CD;
        position: relative;
        z-index: 2;
        letter-spacing: 1px;
    }

    .about-description {
        max-width: 700px;
        font-size: 1.1rem;
        line-height: 2;
        color: #dfe9e7;
        position: relative;
        z-index: 2;
        text-align: justify;
        hyphens: auto;
        word-spacing: 0.05em;
    }

    /* SECTION TITLE */
    .section-title {
        color: #031926;
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    /* FEATURE CARDS */
    .feature-card {
        background: white;
        border-radius: 25px;
        padding: 35px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-top: 6px solid #468189;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        width: 75px;
        height: 75px;
        background: #468189;
        color: #F4E9CD;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 25px;
    }

    .feature-title {
        color: #031926;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .feature-text {
        color: #333;
        line-height: 2;
        text-align: justify;
        hyphens: auto;
        word-spacing: 0.05em;
    }

    /* INFO SECTION */
    .info-section {
        background: #9DBEBB;
        border-radius: 30px;
        padding: 70px 60px;
        margin-top: 80px;
    }

    .info-title {
        color: #031926;
        font-weight: 800;
        margin-bottom: 20px;
        letter-spacing: 1px;
        font-size: 2rem;
    }

    .info-text {
        color: #1f1f1f;
        line-height: 2.1;
        text-align: justify;
        hyphens: auto;
        word-spacing: 0.08em;
        font-size: 1.05rem;
    }


    .info-section .col-lg-6 {
        padding: 40px;
    }

    .info-section .col-lg-6:first-child {
        border-right: 6px solid #031926;
        padding-right: 50px;
    }

    .info-section .col-lg-6:last-child {
        padding-left: 50px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .about-title {
            font-size: 2.2rem;
        }

        .about-description {
            font-size: 1rem;
        }

        .about-hero {
            padding: 70px 30px;
        }

        /* On mobile, switch to horizontal divider */
        .info-section .col-lg-6:first-child {
            border-right: none;
            border-bottom: 6px solid #031926;
            margin-bottom: 30px;
            padding-bottom: 40px;
        }
    }
</style>

<div class="py-5 container">

    <!-- HERO -->
    <div class="mb-5 about-hero">
        <h1 class="about-title">About The Game</h1>
        <p class="about-description">
            Spirit of Vastum is an underwater adventure game focused on environmental awareness.
            Players take control of Bill, a brave fish determined to stop pollution and restore
            balance to the ocean. Through exploration, missions, and waste-cleaning mechanics,
            players experience both fun gameplay and meaningful lessons about protecting marine life.
        </p>
    </div>

    <!-- GAME FEATURES -->
    <div class="mt-5 text-center">
        <h2 class="section-title">Game Features</h2>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">🌊</div>
                <h4 class="feature-title">Clean Polluted Waters</h4>
                <p class="feature-text">
                    Collect and properly dispose of trash to restore balance in the ecosystem.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">🐟</div>
                <h4 class="feature-title">Play as Bill</h4>
                <p class="feature-text">
                    Swim through dangerous waters while fighting pollution and protecting marine life.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">♻️</div>
                <h4 class="feature-title">Manage Waste</h4>
                <p class="feature-text">
                    Sort and recycle waste efficiently before pollution spreads further.
                </p>
            </div>
        </div>
    </div>

    <!-- MISSION SECTION -->
    <div class="info-section">
        <div class="align-items-center row">
            <div class="mb-4 mb-lg-0 col-lg-6">
                <h2 class="info-title">Our Mission</h2>
                <p class="info-text">
                    The game was created to spread awareness about ocean pollution and inspire
                    players to care for the environment through interactive storytelling.
                    Every mission encourages positive action and responsible waste management.
                </p>
            </div>

            <div class="col-lg-6">
                <h2 class="info-title">Why It Matters</h2>
                <p class="info-text">
                    Marine pollution affects countless sea creatures and ecosystems worldwide.
                    Spirit of Vastum transforms this real-world issue into a meaningful gaming
                    experience that promotes awareness while remaining fun and engaging.
                </p>
            </div>
        </div>
    </div>

</div>

<?= view('components/footer'); ?>