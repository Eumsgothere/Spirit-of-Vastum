<?= view('components/header'); ?>

<style>
    body .banner {
        position: relative;
        overflow: hidden;
    }

    .banner img {
        width: 100%;
        height: 90vh;
        object-fit: cover;
    }

    .banner-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fdf5e6;
        width: 90%;
    }

    .banner-overlay h1 {
        font-size: 5rem;
        font-weight: 800;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    }

    .banner-overlay p {
        font-size: 1.6rem;
        margin-top: 15px;
    }

    .custom-btn {
        background: linear-gradient(135deg, teal, #00b3b3);
        color: #fff;
        border: none;
        padding: 14px 35px;
        border-radius: 50px;
        font-size: 1.2rem;
        font-weight: 600;
        transition: 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .custom-btn:hover {
        transform: translateY(-4px);
        color: white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .section-title {
        color: teal;
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 25px;
    }

    .section-text {
        font-size: 1.2rem;
        line-height: 2;
        color: #444;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        padding: 40px;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
    }

    .feature-box {
        background: white;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease;
        height: 100%;
    }

    .feature-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .feature-icon {
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .character-card {
        background: white;
        border-radius: 25px;
        padding: 25px;
        text-align: center;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease;
    }

    .character-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .character-card img {
        width: 150px;
        height: 150px;
        object-fit: contain;
        margin-bottom: 15px;
    }

    .character-card h4 {
        font-size: 1.5rem;
        font-weight: 700;
        color: teal;
    }

    .character-card p {
        font-size: 1rem;
        color: #555;
        line-height: 1.8;
    }

    @media (max-width: 768px) {

        .banner img {
            height: 70vh;
        }

        .banner-overlay h1 {
            font-size: 3rem;
        }

        .banner-overlay p {
            font-size: 1.2rem;
        }

        .section-title {
            font-size: 2.2rem;
        }
    }
</style>

<!-- Banner Section -->
<div class="p-0 container-fluid">
    <div class="banner">

        <img src="Images/spirit_of_vastum_Banner.png"
            alt="Spirit of Vastum Banner">

        <div class="banner-overlay">
            <h1>Spirit of Vastum</h1>

            <p>
                Protect the waters. Restore balance.
            </p>

            <a href="<?= base_url('devlog'); ?>" class="custom-btn">
                Visit Devlog
            </a>
        </div>
    </div>
</div>

<main>

    <!-- Welcome Section -->
    <div class="py-5 container">
        <div class="text-center glass-card">

            <h2 class="section-title">
                Welcome to Spirit of Vastum
            </h2>

            <p class="section-text">
                Explore the story, discover unique characters, and experience a world where players fight against pollution to restore balance in the ocean.
            </p>

        </div>
    </div>

    <!-- About Section -->
    <div class="pb-5 container">
        <div class="glass-card">

            <h2 class="text-center section-title">
                What is Spirit of Vastum?
            </h2>

            <p class="section-text">
                Spirit of Vastum is an environmental action game featuring Bill, a determined fish on a mission to restore polluted waters. Players collect and recycle garbage while exploring increasingly dangerous underwater environments. Along the way, Bill faces powerful enemies responsible for spreading pollution across the ocean. Through action-packed gameplay, players learn the importance of proper waste management and protecting marine life.
            </p>

        </div>
    </div>

    <!-- Features -->
    <div class="pb-5 container">

        <h2 class="text-center section-title">
            Game Features
        </h2>

        <div class="g-4 row">

            <div class="col-md-4">
                <div class="text-center feature-box">
                    <div class="feature-icon">🌊</div>

                    <h4>Clean Polluted Waters</h4>

                    <p>
                        Collect and properly dispose of trash to restore balance in the ecosystem.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center feature-box">
                    <div class="feature-icon">🐟</div>

                    <h4>Play as Bill</h4>

                    <p>
                        Swim through dangerous waters while fighting pollution and protecting marine life.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center feature-box">
                    <div class="feature-icon">♻️</div>

                    <h4>Manage Waste</h4>

                    <p>
                        Sort and recycle waste efficiently before pollution spreads further.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Characters -->
    <div class="pb-5 container">

        <h2 class="text-center section-title">
            Featured Characters
        </h2>

        <div class="g-4 row">

            <!-- Bill -->
            <div class="col-lg-3 col-md-6">
                <div class="character-card">

                    <img src="Images/Bill.png" alt="Bill">

                    <h4>Bill</h4>

                    <p>
                        A hardworking fishfolk from the West Philippine Sea who joins the River Corps to help clean and protect the ocean.
                    </p>

                </div>
            </div>

            <!-- Gill -->
            <div class="col-lg-3 col-md-6">
                <div class="character-card">

                    <img src="Images/Gill.png" alt="Gill">

                    <h4>Gill</h4>

                    <p>
                        A laidback senior member of the River Corps who guides Bill throughout his journey.
                    </p>

                </div>
            </div>

            <!-- Corxalis -->
            <div class="col-lg-3 col-md-6">
                <div class="character-card">

                    <img src="Images/Corxalis.png" alt="Corxalis">

                    <h4>Corxalis</h4>

                    <p>
                        The mysterious Spirit of Vastum who maintains balance between nature and external forces.
                    </p>

                </div>
            </div>

            <!-- Boss -->
            <div class="col-lg-3 col-md-6">
                <div class="character-card">

                    <img src="Images/TheBoss.png" alt="The Boss">

                    <h4>The Boss</h4>

                    <p>
                        The strict leader of the River Corps who assigns Bill to Gill and watches over the team.
                    </p>

                </div>
            </div>

        </div>
    </div>

</main>

<?= view('components/footer'); ?>