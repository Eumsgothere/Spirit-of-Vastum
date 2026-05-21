<?= view('components/header'); ?>

<div class="position-relative container" style="z-index:2;">
    <div class="align-items-center row">

        <!-- Game Story Section -->
        <h1 class="mb-5 text-center" style="font-weight:900; letter-spacing:2px;">
            Game Story
        </h1>
        <div class="mb-5 col-12">
            <p class="text-center lead">
                Spirit of Vastum follows the journey of Bill, a young fishfolk who joins the River Corps to help protect the ocean from the growing threat of pollution.
                As he explores dangerous waters filled with waste and mysterious corruption, Bill encounters allies who guide him through the challenges hidden beneath the sea.
                Along the way, he uncovers secrets connected to the Spirit of Vastum — an ancient force tied to the balance of the ocean itself.
                Through teamwork, courage, and discovery, Bill learns that protecting the sea is more than just a mission; it is a responsibility shared by everyone.
            </p>
        </div>

        <!-- Section Header -->
        <h1 class="mb-5 text-center" style="font-weight:900; letter-spacing:2px;">
            Meet the Characters!
        </h1>

        <!-- First Section: Text Left, Image Right -->
        <div class="mb-5 text-md-start text-center col-md-6">
            <h2 class="mb-4" style="font-weight:800;">Bill</h2>
            <p class="lead">
                A determined young fishfolk who joins the River Corps to protect the ocean.
                Despite being inexperienced, Bill’s courage and dedication push him forward throughout his journey.
            </p>
        </div>
        <div class="mb-5 text-center col-md-6">
            <img src="/Images/Bill.png" alt="Bill" class="img-fluid" style="max-height:500px;">
        </div>

        <!-- Second Section: Image Left, Text Right -->
        <div class="mb-5 text-center col-md-6">
            <img src="/Images/Gill.png" alt="Gill" class="img-fluid" style="max-height:500px;">
        </div>
        <div class="mb-5 text-md-start text-center col-md-6">
            <h2 class="mb-4" style="font-weight:800;">Gill</h2>
            <p class="lead">
                A relaxed but highly experienced member of the River Corps. Gill serves as Bill’s mentor,
                helping him survive the dangers hidden within polluted waters.
            </p>
        </div>

        <!-- Third Section: Text Left, Image Right -->
        <div class="mb-5 text-md-start text-center col-md-6">
            <h2 class="mb-4" style="font-weight:800;">Corxalis</h2>
            <p class="lead">
                The mysterious Spirit of Vastum and guardian of the ocean’s balance.
                Corxalis watches over the sea and appears during moments of great danger.
            </p>
        </div>
        <div class="mb-5 text-center col-md-6">
            <img src="/Images/Corxalis.png" alt="Corxalis" class="img-fluid" style="max-height:500px;">
        </div>

        <!-- Fourth Section: Image Left, Text Right -->
        <div class="mb-5 text-center col-md-6">
            <img src="/Images/TheBoss.png" alt="The Boss" class="img-fluid" style="max-height:500px;">
        </div>
        <div class="mb-5 text-md-start text-center col-md-6">
            <h2 class="mb-4" style="font-weight:800;">The Boss</h2>
            <p class="lead">
                The strict leader of the River Corps who values discipline and responsibility.
                Though serious in nature, he deeply cares for the safety of both his team and the ocean.
            </p>
        </div>

    </div>
</div>
</div>

<?= view('components/footer'); ?>