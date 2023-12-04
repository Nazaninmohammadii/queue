<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue music festival</title>
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<?php require ("partials/header.php");?>

    <section class="queue">
        <div class="queue-sound">
            <div class="queue-sound__content">
                <h5 class="topic">quantum</h5>
                <p class="phrase">leap into</p>
                <h1 class="main_title">sound</p>
            </div>
        </div>
        <article>
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
                <li><span id="days">00</span>days</li>
                <li><span id="hours">00</span>hours</li>
                <li class="separator">:</li>
                <li><span id="minutes">00</span>minutes</li>
                <li class="separator">:</li>
                <li><span id="seconds">00</span>seconds</li>
            </ul>
        </div>
    </section>


    <section class="service sticky">
        <article>
            <div class="audio-description">
                <p>Embark on an audio odyssey like no other at queue, where the boundaries of reality dissolve into a pulsating realm of sonic enchantment. This avant-garde music festival transcends the ordinary, beckoning you to a realm where beats are more than just rhythms-they’re gateways to transcendence.</p>
            </div> 
        </article>
    </section>

    <section class="service sticky">
        <article>
            <figure class="image-container">
                <img src="img/image_01.png" alt="Image Description"/>
            <figcaption>
                <h2 class="date">08.19.24</h2>
                <p class="event">save the date</p>
            </figcaption>
            </figure>
        </article>
    </section>


    <!-- <section class="service service-css sticky">
        <article>
            <figure class="cc">
                <p>*lineup here</p>
                <img src="img/image_01.png"/>
            </figure>
        </article>
    </section> -->


    <section class="service sticky">
        <article>
            <figure>
                <img src="img/image_02.jpeg" />
            </figure>
        </article>
    </section>


    <section class="service sticky">
        <article>
            <div class="limited-tickets">
                <h4>Ready for queue? Save your spot on August 19, 2024. Limited Tickets. Click to be part of the experience.</h4>
            </div> 
        </article>
    </section>

<?php require ("partials/footer.php");?>



</body>
</html>