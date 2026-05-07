    <?= view('components/header'); ?>

    <div class="mt-5 text-center container">
        <!-- Little Guy Image stays at the top -->
        <img src="Images/spirit_of_vastum_logo.png" alt="Mascot"
            class="d-block mx-auto mb-4" style="max-width:250px; height:auto;">

        <!-- Page Heading -->
        <h2 style="color: teal; font-weight: 800; font-size: 3rem;">Developer Logs</h2>
    </div>

    <div class="container">
        <!-- Devlog Entry -->
        <div class="shadow-sm mt-4 card" style="border: 3px solid teal; background-color: #fdf5e6;">
            <div class="card-body">
                <h3 style="color: teal; font-weight: 700; font-size: 2rem;">Devlog #0.10.5</h3>
                <p style="font-size: 1.4rem; color: #555;"><strong>Date:</strong> March 07, 2026</p>
                <h4 style="font-weight: 700; font-size: 1.6rem;">Spirit of Vastum is Coming to Steam!</h4>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    Hello everyone!

                    We’re back with a small update for the Alpha version of Spirit of Vastum: A Journey through Philippine Waters. Over the past few weeks, we’ve been carefully reviewing player feedback and internal testing results to improve the overall experience. This update mainly focuses on minor bug fixes and small gameplay adjustments to make the game run more smoothly.
                </p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    One of the main improvements in this update involves player movement and interaction. We fixed several issues where players could occasionally get stuck near environmental objects while cleaning polluted areas. Movement responsiveness has also been slightly adjusted to make navigating through the levels feel more fluid and consistent.
                </p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    We also addressed a few UI-related issues reported during testing. Some text prompts and task indicators were not appearing correctly during certain objectives. These have now been corrected so that players can more easily follow their tasks while progressing through the level.

                    Additionally, we resolved a bug where certain pieces of waste would sometimes fail to register when collected. This issue could prevent players from completing objectives even after clearing the area. With this fix, all environmental objects should now properly count toward level completion.
                </p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    While this is a relatively small update, it helps improve the stability of the current Alpha build as we continue developing new content and features. Our team is currently working on further gameplay polishing, additional level elements, and more environmental interactions for future builds.

                    As always, we appreciate everyone who has taken the time to test the game and share feedback with us. Your support helps us continue improving Spirit of Vastum as we move closer to our upcoming release.

                    Stay tuned for more updates!
                </p>
            </div>
        </div>

        <!-- Another Devlog Entry -->
        <div class="shadow-sm mt-4 card" style="border: 3px solid teal; background-color: #fdf5e6;">
            <div class="card-body">
                <h3 style="color: teal; font-weight: 700; font-size: 2rem;">Devlog #0.10.6</h3>
                <p style="font-size: 1.4rem; color: #555;"><strong>Date:</strong> March 21, 2026</p>
                <h4 style="font-weight: 700; font-size: 1.6rem;">New Level Design Updates</h4>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    We’ve added a new level inspired by coastal mangroves, introducing new challenges and mechanics. Players will now encounter stronger currents and new types of waste to manage.
                </p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    This update also includes bug fixes, improved animations, and enhanced sound effects to make the underwater world feel more immersive.
                </p>
            </div>
        </div>


                <!-- New Devlog Entry -->
        <div class="shadow-sm mt-4 card" style="border: 3px solid teal; background-color: #fdf5e6;">
            <div class="card-body">
                <h3 style="color: teal; font-weight: 700; font-size: 2rem;">Devlog #0.10.7</h3>
                <p style="font-size: 1.4rem; color: #555;"><strong>Date:</strong> May 7, 2026</p>
                <h4 style="font-weight: 700; font-size: 1.6rem;">Character Design and Gameplay</h4>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    The main character, Bill, has been fully modeled with improved details and high-quality textures to enhance the game’s visual quality and immersion. Updates were also made to the character’s overall appearance and animations for a smoother gameplay experience.
                </p>
                <p style="font-size: 1.3rem; line-height: 1.9; color: #333;">
                    This update also introduces the core gameplay mechanics of Spirit of Vastum, including player movement, interaction systems, exploration features, and other foundational gameplay elements that help shape the overall player experience.
                </p>
            </div>
        </div>
    </div>

    <?= view('components/footer'); ?>