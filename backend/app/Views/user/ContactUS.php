<?= view('components/header'); ?>

<style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
    }

    .contact-wrapper {
        position: relative;
        min-height: 100vh;
        width: 100%;
        background: url('Images/spirit_of_vastum_Banner.png') no-repeat center center;
        background-size: cover;
        overflow: hidden;
    }

    .contact-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 0;
    }

    .contact-content {
        position: relative;
        z-index: 1;
        padding-top: 7rem;
        padding-bottom: 4rem;
        text-align: center;
        color: white;
    }

    .contact-title {
        color: #00d1b2;
        font-weight: 800;
        font-size: 3.2rem;
        text-shadow: 2px 2px 10px black;
    }

    .contact-description {
        font-size: 1.4rem;
        line-height: 2;
        max-width: 800px;
        margin: 20px auto 0 auto;
    }

    .contact-card {
        max-width: 600px;
        margin: 3rem auto 0 auto;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(8px);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    }

    .contact-card h3 {
        color: #00d1b2;
        font-weight: 700;
        font-size: 2rem;
    }

    .contact-card p {
        font-size: 1.3rem;
        margin-top: 15px;
    }

    .discord-section {
        margin-top: 4rem;
    }

    .discord-section h3 {
        color: white;
        font-weight: 700;
        font-size: 2rem;
    }

    .discord-section img {
        max-width: 220px;
        height: auto;
        margin-top: 20px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .discord-section p {
        margin-top: 15px;
        font-size: 1.3rem;
    }

    .contact-buttons {
        margin-top: 4rem;
    }

    .contact-btn {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 12px;
        font-weight: bold;
        text-decoration: none;
        color: white;
        margin: 10px;
        transition: 0.3s ease;
    }

    .email-btn {
        background-color: #00d1b2;
    }

    .discord-btn {
        background-color: #5865F2;
    }

    .contact-btn:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }
</style>

<div class="contact-wrapper">

    <!-- Dark Overlay -->
    <div class="contact-overlay"></div>

    <!-- Main Content -->
    <div class="container contact-content">

        <!-- Title -->
        <h2 class="contact-title">
            We Are Here to Help!
        </h2>

        <!-- Description -->
        <p class="contact-description">
            Have questions, feedback, or need assistance?
            Our team is ready to support you.
            Join our community on Discord or send us an email anytime.
        </p>

        <!-- Contact Card -->
        <div class="contact-card">

            <h3>Contact Information</h3>

            <p>📧 ThirdEyeFEU@gmail.com</p>

            <p>⏰ Support Available: Monday - Friday</p>

        </div>

        <!-- Discord Section -->
        <div class="discord-section">

            <h3>Join Our Discord Community</h3>

            <img src="Images/qrDC.png" alt="Discord QR Code">

            <p>
                Scan the QR code to join our community,
                receive updates, and connect with other players.
            </p>

        </div>

        <!-- Buttons -->
        <div class="contact-buttons">

            <a href="mailto:ThirdEyeFEU@gmail.com"
               class="contact-btn email-btn">
                Email Us
            </a>

            <a href="#"
               class="contact-btn discord-btn">
                Join Discord
            </a>

        </div>

    </div>
</div>

<?= view('components/footer'); ?>