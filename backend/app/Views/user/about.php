<?= view('components/header'); ?>

<style>
    body .section-title {
        color: teal;
        font-weight: 800;
        font-size: 2.7rem;
        margin-bottom: 20px;
    }

    .about-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .about-text {
        font-size: 1.2rem;
        line-height: 2;
        color: #444;
        text-align: justify;
    }

    .vision-box {
        background: linear-gradient(135deg, #009688, #00bfa5);
        color: white;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .vision-box p {
        font-size: 1.2rem;
        line-height: 2;
        margin: 0;
    }

    .member-card {
        background: white;
        border-radius: 20px;
        padding: 25px 15px;
        transition: 0.3s ease;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .member-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .member-card img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 5px solid #009688;
    }

    .member-name {
        font-size: 1.1rem;
        font-weight: 700;
        margin-top: 15px;
        color: #222;
    }

    .member-role {
        font-size: 1rem;
        color: #666;
    }

    .logo-img {
        max-width: 250px;
        border-radius: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="py-5 container">

    <!-- About Section -->
    <div class="about-card">
        <h2 class="text-center section-title">Who Are The Third Eye?</h2>

        <div class="align-items-center row">
            <div class="mb-4 mb-lg-0 col-lg-8">
                <p class="about-text">
                    The Third Eye is an independent developing group with a small team that was established with the aim of making young students aware of the fact that there is a problem called water pollution in the Philippines. The team believes that students can learn better through interactive media such as video games. Through this, Third Eye aims to create an educational game that teaches learners about the current state of water pollution in the Philippines while keeping them entertained and engaged.
                </p>
            </div>

            <div class="text-center col-lg-4">
                <img src="Images/Third_Eye_Logo.png"
                    alt="Third Eye Group Logo"
                    class="img-fluid logo-img">
            </div>
        </div>
    </div>

    <!-- Vision Section -->
    <div class="mt-5 vision-box">
        <h2 class="mb-4 text-white text-center section-title">Our Vision</h2>

        <p class="text-center">
            The Third Eye Group envisions becoming a creative and innovative development team that delivers meaningful digital experiences. The group aims to create interactive games that not only entertain but also spread awareness about real-world issues, especially environmental sustainability.
        </p>
    </div>

    <!-- Members Section -->
    <div class="mt-5">
        <h2 class="mb-5 text-center section-title">Members and Roles</h2>

        <div class="justify-content-center g-4 row">

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="text-center member-card">
                    <img src="Images/Adison.png" alt="Adison"
                        class="mb-3 rounded-circle img-fluid">

                    <h5 class="member-name">ADISON, JUSTINE LYLE</h5>
                    <p class="member-role">Project Lead & Lead Developer</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="text-center member-card">
                    <img src="Images/Capapas.png" alt="Naomie"
                        class="mb-3 rounded-circle img-fluid">

                    <h5 class="member-name">CAPAPAS, NAOMIE FEONA</h5>
                    <p class="member-role">3D Designer & Website Designer</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="text-center member-card">
                    <img src="Images/Rarang.png" alt="Hazelle"
                        class="mb-3 rounded-circle img-fluid">

                    <h5 class="member-name">RARANG, HAZELLE MAE</h5>
                    <p class="member-role">2D & 3D Artist</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="text-center member-card">
                    <img src="Images/Arabe.png" alt="Vince"
                        class="mb-3 rounded-circle img-fluid">

                    <h5 class="member-name">ARABE, VINCE CARLOS</h5>
                    <p class="member-role">Document Specialist</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="text-center member-card">
                    <img src="Images/Espiritu.png" alt="Samuel"
                        class="mb-3 rounded-circle img-fluid">

                    <h5 class="member-name">ESPIRITU, SAMUEL TERRENCE</h5>
                    <p class="member-role">Document Specialist</p>
                </div>
            </div>

        </div>
    </div>

</div>

<?= view('components/footer'); ?>