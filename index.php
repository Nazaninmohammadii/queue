<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue music festival</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<?php require ("partials/header.php");?>

    <section class="queue">
        <div class="queue-sound">
            <div class="queue-sound__content">
                <h5 class="topic">quantum</h5>
                <p class="phrase">leap into</p>
                <h2 class="main_title">sound</h2>
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
                <li><span id="days">00</span><p>days</p></li>
                <li><span id="hours">00</span><p>hours</p></li>
                <li class="separator">:</li>
                <li><span id="minutes">00</span><p>minutes</p></li>
                <li class="separator">:</li>
                <li><span id="seconds">00</span><p>seconds</p></li>
            </ul>
        </div>
    </section>

<div class="section-wrap">
    <section class="service">
            <div class="audio-description">
                <p>Embark on an audio odyssey like no other at queue, where the boundaries of reality dissolve into a pulsating realm of sonic enchantment. This avant-garde music festival transcends the ordinary, beckoning you to a realm where beats are more than just rhythms-they’re gateways to transcendence.</p>
            </div> 
    </section>

    <section class="service">
            <figure class="image-container">
                <img src="img/image_01.png" alt="">
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
                <img src="img/image_02.jpeg" />
            </figure>
    </section>


    <section class="service">
            <div class="limited-tickets">
            <div class="limited-tickets__content">
                <h4>Ready for queue? Save your spot on August 19, 2024. Limited Tickets. Click to be part of the experience.</h4>
            </div>
            <div class="arrow">
                <img src="img/arrow.png" width="40">
            </div>
            </div> 
    </section>
</div>

<?php require ("partials/footer.php");?>
<script src="js/countdown.js"></script>



</body>
</html>