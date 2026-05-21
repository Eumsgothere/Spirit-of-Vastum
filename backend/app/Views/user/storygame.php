<?= view('components/header'); ?>

<div class="py-5 story-wrapper" style="background-color:#F4E9CD;">

    <div class="container">

        <!-- Story Card -->
        <section class="mb-5 text-center glass-card">
            <h2 class="section-title">
                Spirit of Vastum
            </h2>
            <p class="section-text">
                Spirit of Vastum follows the journey of Bill, a young fishfolk who joins the River Corps to help protect the ocean from the growing threat of pollution.
                As he explores dangerous waters filled with waste and mysterious corruption, Bill encounters allies who guide him through the challenges hidden beneath the sea.
                Along the way, he uncovers secrets connected to the Spirit of Vastum — an ancient force tied to the balance of the ocean itself.
                Through teamwork, courage, and discovery, Bill learns that protecting the sea is more than just a mission; it is a responsibility shared by everyone.
            </p>
        </section>

        <!-- Characters -->
        <h1 class="mb-5 text-center" style="color:#031926; font-weight:900; letter-spacing:2px;">
            Meet the Characters!
        </h1>

        <div class="align-items-center row">

            <!-- Bill -->
            <div class="mb-5 text-md-start text-center col-md-6">
                <h2 class="mb-4" style="color:#468189; font-weight:800;">Bill</h2>
                <p class="lead" style="color:#031926;">
                    A determined young fishfolk who joins the River Corps to protect the ocean.
                    Despite being inexperienced, Bill’s courage and dedication push him forward throughout his journey.
                </p>
            </div>
            <div class="mb-5 text-center col-md-6">
                <img src="/Images/Bill.png" alt="Bill" class="img-fluid" style="max-height:500px;">
            </div>

            <!-- Gill -->
            <div class="mb-5 text-center col-md-6">
                <img src="/Images/Gill.png" alt="Gill" class="img-fluid" style="max-height:500px;">
            </div>
            <div class="mb-5 text-md-start text-center col-md-6">
                <h2 class="mb-4" style="color:#468189; font-weight:800;">Gill</h2>
                <p class="lead" style="color:#031926;">
                    A relaxed but highly experienced member of the River Corps. Gill serves as Bill’s mentor,
                    helping him survive the dangers hidden within polluted waters.
                </p>
            </div>

            <!-- Corxalis -->
            <div class="mb-5 text-md-start text-center col-md-6">
                <h2 class="mb-4" style="color:#468189; font-weight:800;">Corxalis</h2>
                <p class="lead" style="color:#031926;">
                    The mysterious Spirit of Vastum and guardian of the ocean’s balance.
                    Corxalis watches over the sea and appears during moments of great danger.
                </p>
            </div>
            <div class="mb-5 text-center col-md-6">
                <img src="/Images/Corxalis.png" alt="Corxalis" class="img-fluid" style="max-height:500px;">
            </div>

            <!-- The Boss -->
            <div class="mb-5 text-center col-md-6">
                <img src="/Images/TheBoss.png" alt="The Boss" class="img-fluid" style="max-height:500px;">
            </div>
            <div class="mb-5 text-md-start text-center col-md-6">
                <h2 class="mb-4" style="color:#468189; font-weight:800;">The Boss</h2>
                <p class="lead" style="color:#031926;">
                    The strict leader of the River Corps who values discipline and responsibility.
                    Though serious in nature, he deeply cares for the safety of both his team and the ocean.
                </p>
            </div>

        </div>
    </div>
</div>

<style>
    :root {
        --primary: #468189;
        /* Teal */
        --primary-dark: #031926;
        /* Ink Black */
        --secondary: #9DBEBB;
        /* Ash Grey */
        --card-bg: #ffffff;
        /* Vanilla Cream */
        --page-bg: #ece3cb;
        /* Neutral background */
    }

    body {
        background: var(--page-bg);
        color: #444;
    }

    .glass-card {
        background: var(--card-bg);
        border-radius: 30px;
        padding: 45px;
        border-top: 6px solid var(--primary);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        margin-top: 60px;
        /* padding on top */
    }

    .section-title {
        color: var(--primary-dark);
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 25px;
    }

    .section-text {
        font-size: 1.80rem;
        line-height: 1.9;
        color: var(--primary-dark);
    }
</style>

<?= view('components/footer'); ?>