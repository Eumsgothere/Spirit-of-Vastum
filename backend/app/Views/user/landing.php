    <?= view('components/header'); ?>

    <!-- Banner Section -->
    <div class="p-0 container-fluid">
        <div class="banner" style="position: relative;">
            <img src="Images/spirit_of_vastum_Banner.png" alt="Spirit of Vastum Banner"
                style="width:100%; height:auto; display:block;">
            <!-- Overlay text -->
            <div style="position: absolute; top: 50%; left: 50%; 
                transform: translate(-50%, -50%); 
                color: #fdf5e6; text-align: center;">
                <h1 style="font-size: 4rem; font-weight: 800;">Spirit of Vastum</h1>
                <p style="font-size: 1.5rem;">Protect the waters. Restore balance.</p>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="mt-5 text-center container">
        <h2 style="color: teal; font-size: 2.5rem;">Welcome to Spirit of Vastum</h2>
        <p style="font-size: 1.5rem; color: #333;">
            Explore the story, share ideas, and view epic game moments.
        </p>
        <a href="devlog.php" class="btn btn-lg"
            style="background-color: teal; color: #fdf5e6; border-radius: 25px; padding: 14px 28px; font-size: 1.3rem;">
            Visit Devlog
        </a>
    </div>

    <!-- About Section -->
    <div class="mt-5 container">
        <h2 class="text-center" style="color: teal; font-size: 2.5rem;">What is Spirit of Vastum?</h2>
        <p style="font-size: 1.4rem; line-height: 1.8; color: #333;">
            Spirit of Vastum is a video game, an environmental
            action game that makes use of a character Bill,
            who is a determined fish in a mission to restore
            polluted waters. During the game, players gather
            and recycle garbage as they explore more and
            more difficult water worlds. Bill struggles against a
            highly influential villain that throws huge piles of
            garbage in the ocean as the pollution spreads.
            Players can correct imbalance in the ecosystem
            and acquire the value of good waste management
            and preservation of marine life by cleaning the
            waters and breaking the barriers.
        </p>
    </div>

    <!-- Features -->
    <div class="mt-5 text-center container">
        <h2 style="color: teal; font-size: 2.5rem;">Game Features</h2>
        <ul style="list-style-type: none; padding-left: 0; display: inline-block; text-align: left; font-size: 1.3rem;">
            <li>🌊 Clean the polluted water: Collect and dispose of trash to restore balance.</li>
            <li>🐟 Play as Bill the cleaner fish: Swim through dangerous waters and fight pollution.</li>
            <li>🤝 Engage with other characters: Meet allies and foes who shape your mission.</li>
            <li>♻️ Manage waste efficiently: Sort trash quickly before pollution spreads.</li>
            <li>🌱 Protect marine ecosystem: Experience how cleaning restores life to the ocean.</li>
        </ul>
    </div>

    <!-- Characters -->
    <div class="mt-5 container">
        <h2 style="color: teal; font-size: 2.5rem;">Featured Characters</h2>
        <div class="row">
            <!-- Bill -->
            <div class="text-center col-md-3">
                <img src="Images/Bill.png" alt="Bill the Cleaner Fish"
                    style="width:100%; max-width:150px; height:auto; margin-bottom:10px;">
                <h4 style="font-size: 1.6rem;">Bill</h4>
                <p style="font-size: 1.2rem;">The main character is an average fishfolk, Bill. He lives with his family on the
                    West Philippine Sea. This naive and adventurous fish is a new hardworking
                    employee for the Seabound Alliance's River Corps. His work on the company
                    is to collect waste and feed it to the corresponding machine, segregating
                    different types of wastes.</p>
            </div>

            <!-- Gill -->
            <div class="text-center col-md-3">
                <img src="Images/Gill.png" alt="Gill the Mentor"
                    style="width:100%; max-width:150px; height:auto; margin-bottom:10px;">
                <h4 style="font-size: 1.6rem;">Gill</h4>
                <p style="font-size: 1.2rem;">Gill is a laidback and cool senior that will help Bill start
                    his place in the Seabound Alliance's River Corps. He will
                    teach and guide Bill throughout his works</p>
            </div>

            <!-- Corxalis -->
            <div class="text-center col-md-3">
                <img src="Images/Corxalis.png" alt="Corxalis the Spirit"
                    style="width:100%; max-width:150px; height:auto; margin-bottom:10px;">
                <h4 style="font-size: 1.6rem;">Corxalis</h4>
                <p style="font-size: 1.2rem;">The Spirit of Vastum itself. Corxalis is the one who keeps
                    the balance between the world, and an external force. It's
                    a mysterious creature, rarely in sight of other fishfolks.</p>
            </div>

            <!-- The Boss -->
            <div class="text-center col-md-3">
                <img src="Images/TheBoss.png" alt="The Boss Villain"
                    style="width:100%; max-width:150px; height:auto; margin-bottom:10px;">
                <h4 style="font-size: 1.6rem;">The Boss</h4>
                <p style="font-size: 1.2rem;">The "Boss" of the River Corps, who assigns Bill to Gill as
                    the newbie of the team. Has a bossy personality, perfect
                    for a leader. Nothing special about him, probably a bit too
                    suspicious.</p>
            </div>
        </div>
    </div>


    <?= view('components/footer'); ?>