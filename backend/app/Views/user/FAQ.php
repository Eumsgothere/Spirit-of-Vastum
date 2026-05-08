<?= view('components/header'); ?>

<style>
    body .faq-title {
        color: teal;
        font-weight: 800;
        font-size: 2.8rem;
    }

    .faq-subtitle {
        color: #666;
        font-size: 1.1rem;
    }

    .faq-card {
        background: white;
        border: none;
        border-radius: 20px;
        padding: 10px;
        transition: 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .faq-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .faq-question {
        color: teal;
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .faq-answer {
        font-size: 1.1rem;
        line-height: 1.9;
        color: #444;
        margin-bottom: 0;
    }

    .faq-icon {
        width: 60px;
        height: 60px;
        background: rgba(0, 128, 128, 0.1);
        color: teal;
        font-size: 1.8rem;
        font-weight: bold;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .faq-content {
        display: flex;
        align-items: flex-start;
    }
</style>

<div class="py-5 container">

    <!-- Header -->
    <div class="mb-5 text-center">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <p class="faq-subtitle">
            Learn more about the game, its story, objectives, and features.
        </p>
    </div>

    <!-- FAQ ITEMS -->

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">What is the game about?</h4>

                <p class="faq-answer">
                    The game follows Bill, a brave fish who fights against water pollution. Players clean trash, manage waste, and stop a villain who is dumping garbage into the ocean.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">What is the main objective of the game?</h4>

                <p class="faq-answer">
                    The main goal is to clean polluted waters by collecting and properly disposing of trash while avoiding obstacles and defeating enemies.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">How many levels are in the game?</h4>

                <p class="faq-answer">
                    The game currently has four levels, each with increasing difficulty and different environmental challenges.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">Who is the main character?</h4>

                <p class="faq-answer">
                    The main character is Bill, a fish who wants to protect the ocean and restore balance to polluted waters.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">What platforms can the game be played on?</h4>

                <p class="faq-answer">
                    The game is currently designed for PC.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">Is the game multiplayer?</h4>

                <p class="faq-answer">
                    No, the game is currently designed as a single-player experience.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-5 faq-card">
        <div class="card-body faq-content">
            <div class="faq-icon">?</div>

            <div>
                <h4 class="faq-question">What message does the game aim to share?</h4>

                <p class="faq-answer">
                    The game encourages players to practice proper waste management and environmental responsibility to help protect oceans and marine life.
                </p>
            </div>
        </div>
    </div>

</div>

<?= view('components/footer'); ?>