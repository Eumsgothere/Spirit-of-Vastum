<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Spirit of Vastum</title>

    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #F4E9CD;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        /* NAVBAR */

        .custom-navbar {
            background: linear-gradient(90deg, #004d4d, teal);
            padding: 1rem 1.2rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
        }

        /* LOGO */

        .navbar-brand {
            color: #fdf5e6 !important;
            font-size: clamp(1.5rem, 2vw, 1.9rem);
            font-weight: bold;
            letter-spacing: 1px;
            transition: 0.3s ease;
        }

        .navbar-brand:hover {
            opacity: 0.9;
        }

        /* NAV LINKS */

        .navbar-nav .nav-link {
            color: #F4E9CD;
            padding: 10px 18px;
            margin: 0 4px;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-weight: 500;
            white-space: nowrap;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }

        .navbar-nav .nav-link.active {
            background-color: #fdf5e6;
            color: teal !important;
            font-weight: 600;
        }

        /* AUTH BUTTONS */

        .login-btn,
        .register-btn,
        .logout-btn {
            padding: 8px 18px;
            border-radius: 10px;
            font-weight: 600;
            margin-left: 10px;
            transition: 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
        }

        /* LOGIN */

        .login-btn {
            border: 1px solid #fdf5e6;
            color: #fdf5e6;
            background: transparent;
        }

        .login-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            color: white;
        }

        /* REGISTER */

        .register-btn {
            background: #fdf5e6;
            color: teal;
            border: none;
        }

        .register-btn:hover {
            opacity: 0.9;
        }

        /* LOGOUT */

        .logout-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffd6d6;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        /* ADMIN LINK */

        .admin-link {
            color: gold !important;
            font-weight: bold;
        }

        /* MOBILE */

        @media (max-width: 991px) {

            .navbar-collapse {
                margin-top: 1rem;
            }

            .navbar-nav {
                gap: 8px;
            }

            .navbar-nav .nav-link {
                text-align: center;
            }

            .login-btn,
            .register-btn,
            .logout-btn {
                width: 100%;
                margin-left: 0;
                text-align: center;
            }

            .auth-buttons {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg custom-navbar">

        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand"
                href="/">

                Spirit of Vastum

            </a>

            <!-- TOGGLER -->
            <button class="bg-light navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- NAVIGATION -->
            <div class="collapse navbar-collapse"
                id="menu">

                <?php $current = service('uri')->getSegment(1); ?>

                <!-- CENTER LINKS -->
                <ul class="align-items-lg-center mx-auto navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == '' ? 'active' : '') ?>"
                            href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'faq' ? 'active' : '') ?>"
                            href="/faq">
                            FAQ
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'devlog' ? 'active' : '') ?>"
                            href="/devlog">
                            Devlog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'contactus' ? 'active' : '') ?>"
                            href="/contactus">
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'about' ? 'active' : '') ?>"
                            href="/about">
                            About Team
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'aboutgame' ? 'active' : '') ?>"
                            href="/aboutgame">
                            About Game
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current == 'storygame' ? 'active' : '') ?>"
                            href="/storygame">
                            Story
                        </a>
                    </li>

                </ul>

                <!-- RIGHT SIDE -->
                <ul class="align-items-lg-center navbar-nav auth-buttons">

                    <?php $session = session(); ?>

                    <?php if ($session->get('username')): ?>

                        <?php if ($session->get('role') === 'admin'): ?>

                            <li class="nav-item">

                                <a class="nav-link admin-link"
                                    href="/devlog/create">

                                    Create Post

                                </a>

                            </li>

                        <?php endif; ?>

                        <li class="nav-item">

                            <form action="/logout"
                                method="post">

                                <button type="submit"
                                    class="logout-btn">

                                    Logout
                                    (<?= esc($session->get('username')) ?>)

                                </button>

                            </form>

                        </li>

                    <?php else: ?>

                        <li class="nav-item">

                            <a class="login-btn"
                                href="/login">

                                Login

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="register-btn"
                                href="/signup">

                                Register

                            </a>

                        </li>

                    <?php endif; ?>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>