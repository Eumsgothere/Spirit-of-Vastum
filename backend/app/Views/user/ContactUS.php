<?= view('components/header'); ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
        font-family: Arial, sans-serif;
    }

    .contact-wrapper {
        position: relative;
        width: 100%;
        min-height: 100vh;
        background: url('Images/spirit_of_vastum_Banner.png') center center / cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 100px 20px 50px;
    }

    .contact-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    .contact-content {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 900px;
        text-align: center;
        color: white;
    }

    .contact-title {
        color: #00d1b2;
        font-weight: bold;
        font-size: clamp(2rem, 5vw, 3.5rem);
        margin-bottom: 20px;
    }

    .contact-description {
        font-size: clamp(1rem, 2vw, 1.4rem);
        line-height: 1.8;
        margin-bottom: 40px;
    }

    .contact-card {
        width: 100%;
        max-width: 600px;
        margin: auto;
        padding: 30px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(8px);
    }

    .contact-card h3 {
        color: #00d1b2;
        margin-bottom: 20px;
        font-size: clamp(1.5rem, 3vw, 2rem);
    }

    .contact-card p {
        font-size: clamp(1rem, 2vw, 1.2rem);
        margin: 10px 0;
    }

    .discord-section {
        margin-top: 50px;
    }

    .discord-section h3 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        margin-bottom: 20px;
    }

    .discord-section img {
        width: 100%;
        max-width: 220px;
        border-radius: 15px;
    }

    .discord-section p {
        margin-top: 20px;
        font-size: clamp(1rem, 2vw, 1.2rem);
    }

    .contact-buttons {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .contact-btn {
        text-decoration: none;
        color: white;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s;
    }

    .email-btn {
        background: #00d1b2;
    }

    .discord-btn {
        background: #5865F2;
    }

    .contact-btn:hover {
        transform: scale(1.05);
    }

    /* Responsive Fix */
    @media (max-width: 768px) {

        .contact-wrapper {
            padding-top: 120px;
        }

        .contact-buttons {
            flex-direction: column;
            align-items: center;
        }

        .contact-btn {
            width: 100%;
            max-width: 250px;
        }

        .contact-card {
            padding: 20px;
        }
    }
</style>

<div class="contact-wrapper">

    <div class="contact-overlay"></div>

    <div class="contact-content">

        <h2 class="contact-title">
            We Are Here to Help!
        </h2>

        <p class="contact-description">
            Have questions, feedback, or need assistance?
            Our team is ready to support you.
            Join our community on Discord or send us an email anytime.
        </p>

        <div class="contact-card">

            <h3>Contact Information</h3>

            <p>📧 ThirdEyeFEU@gmail.com</p>

            <p>⏰ Support Available: Monday - Friday</p>

        </div>

        <div class="discord-section">

            <h3>Join Our Discord Community</h3>

            <img src="Images/qrDC.png" alt="Discord QR Code">

            <p>
                Scan the QR code to join our community,
                receive updates, and connect with other players.
            </p>

        </div>

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