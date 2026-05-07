<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Spirit of Vastum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F4E9CD;
            /* beige background */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar link styles */
        .navbar-nav .nav-link {
            color: #F4E9CD;
            padding: 6px 14px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 25px;
        }

        .navbar-nav .nav-link.active {
            background-color: #fdf5e6;
            color: teal !important;
            border-radius: 25px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #004d4d, teal); padding: 0.8rem 1rem;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/" style="color: #fdf5e6; font-size: 1.4rem;">
                Spirit of Vastum
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="ms-auto navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/devlog">Devlog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contactus">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>

                    <?php $session = session(); ?>
                    <?php if ($session->get('username')): ?>
                        <?php if ($session->get('role') === 'admin'): ?>
                            <li class="nav-item"><a class="nav-link" href="/admin/create-post" style="color: gold;">Create Post</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/gallery-upload" style="color: gold;">Upload Image</a></li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <form action="/logout" method="post" style="display:inline;">
                                <button type="submit" class="nav-link btn btn-link" style="color:#ff6666; text-decoration:none;">
                                    Logout (<?= esc($session->get('username')) ?>)
                                </button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/signup">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>