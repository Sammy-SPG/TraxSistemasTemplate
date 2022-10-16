<?php include('./partials/index_head.php') ?>
<title>Document</title>
<link rel="stylesheet" href="./css/diseno.css">
</head>

<body>
    <?php include('./partials/index_nabvar.php') ?>
    <div>
        <div class="containerImg">
            <img src="./images/diseño-trax.jpg" alt="" class="img-curso">
            <div style="height: 200px; overflow: hidden;" class="svg">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="container-diseno-grid">
                <div class="container-diseno">
                    <img src="images/icos/design.png" alt="">
                    <div>
                        <h3>Diseño Grafico</h3>
                        <ol>
                            <li>Diseño de logotipos y vectorizado de logotipos</li>
                            <li>Imagines publisitarias</li>
                            <li>Diseño general</li>
                        </ol>
                    </div>
                </div>
                <div class="container-diseno">
                    <img src="images/icos/sistemas.png" alt="">
                    <div>
                        <h3>Diseño Grafico</h3>
                        <ol>
                            <li>Diseño de logotipos y vectorizado de logotipos</li>
                            <li>Imagines publisitarias</li>
                            <li>Diseño general</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/img_caroucel/pexels-designecologist-1779487.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Desarrollo de paginas web</h5>
                            <p>Pagianas web exitosas para tu negocio, diseno web.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/img_caroucel/pexels-bich-tran-669996.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Desarrollo Ecommerce</h5>
                            <p>Concentrate en tus ventas, nosotros en tu tienda online.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/img_caroucel/pexels-tranmautritam-326503.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sitios compatibles para paginas web</h5>
                            <p>Diseno multimedia.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/img_caroucel/pexels-tima-miroshnichenko-5380666.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Seguridad informatica</h5>
                            <p>Protegemos tu informacion.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php include('./partials/countOnUs.php') ?>
    <?php include('./partials/index_foother.php') ?>