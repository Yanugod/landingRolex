<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S</title>
    <!-- CONECTAR CON CSS -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>

    <?php include 'assets/vistas/header.php' ?>

    <!-- CONTENIDO -->
    <main class="hero__content" id="hero__content">
        <section class="hero__texts">
            <h2>Some new models have arrived</h2>
            <p>Three new models have come to our acquisitions. Our engineers created these products entirely in metal
                stylized in diamond quartz.<br><br>  <span> Take advantage of the new offers</span></p>
            <button>Read More</button>
        </section>

        <figure class="hero__content-img">
            <img src="assets/img/imgReloj.png" alt="imgReloj" class="img__reloj">
        </figure>

        <section class="img__models">
            <ul>
                <li> <img src="assets/img/imgReloj2.png" class="imgModels" alt="" onclick="cambiarImg(1);"></li>
                <li><img src="assets/img/imgReloj3.png" alt="" class="imgModels imgModels-active"
                        onclick="cambiarImg(2);"></li>
            </ul>
        </section>
    </main>

    <div class="line"></div>
    <!-- PRODUCTOS -->

    <section class="hero__products" id="hero__products">

        <section class="hero__products--news">
            <h2>New Arrivals</h2>
            <p>The new models took a week to arrive at our facilities due to flight problems due to the COVID-19 pandemic. We always have to give the best guarantee to our buyers, so we will have this week on offer.</p>
        </section>

        <div class="hero__products--card">
            <div class="hero__products--img">
                <img src="assets/img/imgReloj.png" alt="">
            </div>
            <div class="hero__products--texts">
                <h2>Rolex Luxury Oyster <span>Gold</span> </h2>
                <p>Waxed in the best machines, fully polished in stainless steel and cast in natural solid 18k gold
                    nuggets.</p>
                <span class="hero__products--texts--price">23,999.00 USD</span>
                <button>Buy Now</button>
            </div>
        </div>
        </div>

        <div class="hero__products--card">
            <div class="hero__products--img">
                <img src="assets/img/imgReloj2.png" alt="">
            </div>
            <div class="hero__products--texts">
            <h2>Rolex <span>Mistery</span> Maxwell <span>Black</span> </h2>
                <p>Waxed in the best machines, fully polished in stainless steel and cast in natural solid 18k gold
                    nuggets.</p>
                <span class="hero__products--texts--price">19, 699.00 USD</span>
                <button>Buy Now</button>
            </div>
        </div>
        </div>

        <div class="hero__products--card">
            <div class="hero__products--img">
                <img src="assets/img/imgReloj3.png" alt="">
            </div>
            <div class="hero__products--texts">
                <h2>Rolex <span>Cristal</span> Quartz <span>White</span></h2>
                <p>Waxed in the best machines, fully polished in stainless steel and cast in natural solid 18k gold
                    nuggets.</p>
                <span class="hero__products--texts--price">25,499.00 USD</span>
                <button>Buy Now</button>
            </div>
        </div>
        </div>
    </section>



    <!-- CONECTAR CON JS -->
    <script src="assets/script.js"></script>
</body>

</html>