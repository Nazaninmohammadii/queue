<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<?php require ("partials/header.php");?>

    <section id="about" class="about">
        <div class="empty"></div>
        <article>
            <div class="title">
                <h1>Hello I'm Izzy</h1>
            </div>
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laborum atque quis fugiat nisi consectetur sint.</p>  
            </div>
        </article>
    </section>

    <section id="services" class="service service-html sticky">
        <article>
            <figure>
                <img src="img/diamond.png" width="200"/>
            </figure>
            <div class="text">
            <h2>HTML</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi iste nulla, consectetur amet impedit libero quo fugiat sint.</p>
            <a href="https://wikipedia.com">More about HTML</a>
            </div> 
        </article>
    </section>


    <section id="services" class="service service-css sticky">
        <article>
            <figure>
                <img src="img/triangle.png" width="200"/>
            </figure>
            <div class="text">
            <h2>CSS</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi iste nulla, consectetur amet impedit libero quo fugiat sint. </p>
            <a href="https://wikipedia.com">More about CSS</a>
            </div>
        </article>
    </section>


    <section id="services" class="service service-js sticky">
        <article>
            <figure>
                <img class="animate__animated animate__rubberBand animate__infinite"
                src="img/octagon.png" width="200"/>
            </figure>
            <div class="text">
            <h2>JS</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi iste nulla, consectetur amet impedit libero quo fugiat sint.</p>
            <a href="https://wikipedia.com">More about JS</a>
            </div>
        </article>
    </section>

    <section class="contact full-screen">
        <a href="mailto:hello@gmail.com">hello@gmail.com</a>
    </section>

<?php require ("partials/header.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/animation.js"></script>


</body>

</html>