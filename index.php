<?php include('./partials/index_head.php') ?>
<title>Document</title>
<link rel="stylesheet" href="./css/style_index.css">
</head>
<body>
    <?php include('./partials/index_nabvar.php') ?>
    <div class="container-slider">
        <div id="carouselExampleInterval" class="carousel slide carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="./images/img_bg_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-title" style="color: #CB4335;">CRECER</h5>
                        <h6 class="font-dark">Es mi siguiente paso</h6>
                        <p class="font-foother">Con Aspel SAE controlo todas las operaciones de compra-venta de mi empresa</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/img_bg_2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-title" style="color: #48C9B0;">CONTROL</h5>
                        <h6 class="font-dark" style="margin-right: 18rem;">Total</h6>
                        <p class="font-foother">Con Nuestros servicios en la Nube accede a todos tus sistemas Aspel desde </br> donde te encuentres.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/img_bg_3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-title" style="color: #3498DB;">EXACTITUD</h5>
                        <h6 class="font-dark" style="margin-right: 6.5rem;">En el control contable</h6>
                        <p class="font-foother">Con Aspel COI estoy listo para cumplir con todos los requerimientos de la </br> Contabilidad Electrónica.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="container-aspel">
            <button type="button" class="btn" style="background: #ff0224; color: #FBFCFC;">SAE 8.0</button>
            <button type="button" class="btn" style="background: #00d0e3; color: #FBFCFC;">NUBE</button>
            <button type="button" class="btn" style="background: #00afdc; color: #FBFCFC;">COI 9.0</button>
            <button type="button" class="btn" style="background: #ff8300; color: #FBFCFC;">NOI 9.0</button>
            <button type="button" class="btn" style="background: #ca1027; color: #FBFCFC;">FACTURE 5.0</button>
            <button type="button" class="btn" style="background: #f7354d; color: #FBFCFC;">MOVIL</button>
            <button type="button" class="btn" style="background: #ffc400; color: #FBFCFC;">CAJA 4.0</button>
            <button type="button" class="btn" style="background: #513e87; color: #FBFCFC;">PROD 4.0</button>
        </div>
        <div class="containerServices">
            <h3>Servicios</h3>
            <div class="containerServices-grid">
                <div class="service">
                    <img src="images/icos/timbres.png" alt="">
                    <div>
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti maiores delectus tenetur vel fugiat tempora.</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/icos/nubeser.png" alt="">
                    <div>
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos odio, harum distinctio ex impedit qui?</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/icos/ideas.png" alt="">
                    <div>
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum animi obcaecati sint officia, natus assumenda.</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/icos/tutos.png" alt="">
                    <div>
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas obcaecati eum! Hic, accusantium perspiciatis.</p>
                    </div>
                </div>
                <div class="service">
                    <img src="images/icos/equipos.png" alt="">
                    <div>
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tenetur, porro et delectus quo deleniti!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./partials/countOnUs.php') ?>
    <?php include('./partials/index_foother.php') ?>
