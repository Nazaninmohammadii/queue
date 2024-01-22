<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue music festival</title>
    <link rel="icon" type="image/x-icon" href="img/logo.svg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lineup.css">
</head>


<body>
    <?php require("partials/header.php"); ?>

    <div class="container">
        <section class="queue">
            <div class="queue-sound">
                <div class="queue-sound__content">
                    <h5 class="topic">quantum</h5>
                    <p class="phrase">leap into</p>
                    <h2 class="main_title">sound</h2>
                </div>
            </div>
            <article class="queue-invitation-bubbles">
                <div class="queue-invitation">
                    <div class="queue-invitation__content">
                        <h5 class="main_title_02">decrypt the</h5>
                        <p class="phrase_02">invitation</p>
                    </div>
                </div>
                <div class="queue-awaits">
                    <p>queue awaits</p>
                </div>
            </article>
        </section>

        <section class="countdown-container">
            <div id="countdown" class="countdown">
                <ul>
                    <li><span id="days">00</span>
                        <p>days</p>
                    </li>
                    <li><span id="hours">00</span>
                        <p>hours</p>
                    </li>
                    <li class="separator">:</li>
                    <li><span id="minutes">00</span>
                        <p>minutes</p>
                    </li>
                    <li class="separator">:</li>
                    <li><span id="seconds">00</span>
                        <p>seconds</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Lineup Section -->
        <section class="lineup-section">
    <h2>2024 LINEUP</h2>

    <div class="lineup-container">
        <h3 class="weekend-1">weekend 1</h3>
        <button class="small" data-artist-id="17">Bassdrop Bob</button>
        <button class="large" data-artist-id="8">Beluga</button>
        <button class="small" data-artist-id="16">Canal Tours</button>
        <button class="large" data-artist-id="7">DJ Therapy</button>
        <button class="medium" data-artist-id="12">Digital Phantom</button>
        <button class="medium" data-artist-id="9">Glitch Mirage</button>
        <button class="large" data-artist-id="15">Gótica</button>
    </div>
    <div class="lineup-container">
        <h3 class="weekend-2">weekend 2</h3>
        <button class="medium" data-artist-id="11">IGN</button>
        <button class="small" data-artist-id="1">Morning Void</button>
        <button class="medium" data-artist-id="10">Pulse Hacker</button>
        <button class="large" data-artist-id="6">The 404</button>
        <button class="medium" data-artist-id="2">Third Beach</button>
        <button class="medium" data-artist-id="3">Rhythm Thief</button>
        <button class="small" data-artist-id="4">Synth Spectre</button>
        <button class="large" data-artist-id="13">User Persona</button>
    </div>
</section>


        <div class="section-wrap">
            <section class="service">
                <div class="audio-description">
                    <p>Embark on an audio odyssey like no other at queue, where the boundaries of reality dissolve into
                        a pulsating realm of sonic enchantment. This avant-garde music festival transcends the ordinary,
                        beckoning you to a realm where beats are more than just rhythms-they’re gateways to
                        transcendence.</p>
                </div>
            </section>

            <section class="service">
                <figure class="image-container">
                    <img src="img/image_01.jpg" alt="">
                    <figcaption>
                        <h2 class="date">08.19.24</h2>
                        <p class="event">save the date</p>
                    </figcaption>
                </figure>
            </section>
        </div>

        <div class="section-wrap">
            <section class="service">
                <figure class="image-container">
                    <img src="img/image_02.jpg" />
                </figure>
            </section>


            <section class="service">
                <div class="limited-tickets">
                    <div class="limited-tickets__content">
                        <h4>Ready for queue? Save your spot on August 19, 2024. Limited Tickets. Click to be part of the
                            experience.</h4>
                    </div>
                    <div class="arrow">
                        <img src="img/arrow.png" width="40">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php require("partials/footer.php"); ?>
    <script src="js/countdown.js"></script>
    <script src="js/lineup.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>