<footer class="footer-custom">
    <div class="container">
        <h5 class="footer-title">
            DEVELOPED BY THIRD-EYE GROUP © 2026
        </h5>

        <p class="footer-text">
            FAR EASTERN UNIVERSITY: INSTITUTE OF TECHNOLOGY
        </p>
    </div>
</footer>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
    }

    .footer-custom {
        background: linear-gradient(135deg, #004d4d, teal);
        color: #fdf5e6;
        text-align: center;
        padding: 2rem 1rem;
        margin-top: auto;
        box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.1);
    }

    .footer-title {
        font-weight: 700;
        font-size: 1.2rem;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .footer-text {
        margin: 0;
        font-size: 0.95rem;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .footer-title {
            font-size: 1rem;
        }

        .footer-text {
            font-size: 0.85rem;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>