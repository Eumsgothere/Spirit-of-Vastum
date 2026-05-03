    <?= view('components/header'); ?>

    <!-- Background wrapper -->
    <div style="position: relative; min-height: 100vh; background: url('Images/spirit_of_vastum_Banner.png') no-repeat center center; background-size: cover;">

        <!-- Content -->
        <div class="text-center container" style="position: relative; z-index: 1; padding-top: 8rem; padding-bottom: 4rem;">
            <h2 style="color: teal; font-weight: 800; font-size: 3rem;">We Are Here to Help!</h2>
            <p style="font-size: 1.6rem; line-height: 2; color: #031926;">
                Join our Discord for updates or contact us via email.
            </p>

            <!-- Contact Info -->
            <div class="mt-4">
                <h3 style="color: teal; font-weight: 700; font-size: 2.2rem;">Contact</h3>
                <p style="font-size: 1.5rem; color: #031926;">ThirdEyeFEU@gmail.com</p>
            </div>

            <!-- Discord QR -->
            <div class="mt-5">
                <h3 style="color: white; font-weight: 700; font-size: 2.2rem;">Discord</h3>
                <img src="Images/qrDC.png" alt="Discord QR Code"
                    class="d-block mx-auto" style="max-width:200px; height:auto;">
                <p style="margin-top: 10px; font-size: 1.4rem; color: #ffffff;">Scan to join our community</p>
            </div>
        </div>
    </div>

    <?= view('components/footer'); ?>