<footer class="footer-custom">
    <div class="container footer-container">

        <h5 class="footer-title">
            DEVELOPED BY THIRD-EYE GROUP © 2026
        </h5>

        <p class="footer-text">
            FAR EASTERN UNIVERSITY: INSTITUTE OF TECHNOLOGY
        </p>

    </div>
</footer>

<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        font-family: Arial, sans-serif;
    }

    main {
        flex: 1;
        width: 100%;
    }

    .footer-custom {
        width: 100%;
        background: linear-gradient(135deg, #004d4d, teal);
        color: #fdf5e6;
        text-align: center;
        padding: clamp(1.5rem, 3vw, 2.5rem) 1rem;
        margin-top: auto;
        box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.15);
    }

    .footer-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .footer-title {
        font-weight: 700;
        font-size: clamp(1rem, 2vw, 1.4rem);
        letter-spacing: 1px;
        margin-bottom: 10px;
        word-wrap: break-word;
    }

    .footer-text {
        margin: 0;
        font-size: clamp(0.85rem, 1.5vw, 1rem);
        opacity: 0.9;
        line-height: 1.6;
        word-wrap: break-word;
    }

    /* Tablet */
    @media (max-width: 768px) {

        .footer-custom {
            padding: 1.5rem 1rem;
        }

        .footer-title {
            letter-spacing: 0.5px;
        }
    }

    /* Mobile */
    @media (max-width: 480px) {

        .footer-custom {
            padding: 1.2rem 0.8rem;
        }

        .footer-title,
        .footer-text {
            line-height: 1.5;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>