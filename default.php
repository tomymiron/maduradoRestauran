<?php include('public/pages/header.html'); ?>
<title>Madurado</title>
<link rel="icon" type="image/x-icon" href="public/img/homeCircle.png">
<style><?php include('public/css/home.css'); ?></style>
<!-- LAZY LOAD -->
<style type="text/css">
    .b-lazy {
    transform: scale(.2);
    transition: transform 0.5s, opacity .5s;
    opacity:0;
    }
    .b-loaded {
    transform: scale(1);
    opacity:1;
    }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/navImg.png"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.6667 11.6667L8.33337 11.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M25 20L8.33337 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.6667 28.3333L8.33337 28.3334" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#aboutSection">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dryAgedSection">DRY AGED</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menuSection">MENU</a></li>
                    <li class="nav-item"><a class="nav-link" href="#placeSection">PLACE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contactSection">CONTACT</a></li>
                    <div class="moreOptions">
                        <a class="socialMedia" target="_BLANK" href="https://www.instagram.com/madurado.resto/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.06 38.06"><defs><style>.cls-1{fill:#78423B;}.cls-2{fill:#fff;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M19,38.06h0A19,19,0,0,1,0,19H0A19,19,0,0,1,19,0h0a19,19,0,0,1,19,19h0A19,19,0,0,1,19,38.06Z"/><path class="cls-2" d="M19,10.48c2.79,0,3.12,0,4.22.06a5.38,5.38,0,0,1,1.93.36,3.12,3.12,0,0,1,1.2.78,3,3,0,0,1,.78,1.2,5.38,5.38,0,0,1,.36,1.93c.05,1.1.06,1.43.06,4.22s0,3.12-.06,4.22a5.38,5.38,0,0,1-.36,1.93,3.45,3.45,0,0,1-2,2,5.38,5.38,0,0,1-1.93.36c-1.1.05-1.43.06-4.22.06s-3.12,0-4.22-.06a5.38,5.38,0,0,1-1.93-.36,3,3,0,0,1-1.2-.78,3.12,3.12,0,0,1-.78-1.2,5.38,5.38,0,0,1-.36-1.93c0-1.1-.06-1.43-.06-4.22s0-3.12.06-4.22a5.38,5.38,0,0,1,.36-1.93,3.45,3.45,0,0,1,2-2,5.38,5.38,0,0,1,1.93-.36c1.1,0,1.43-.06,4.22-.06M19,8.6c-2.83,0-3.19,0-4.3.06a7.83,7.83,0,0,0-2.53.48A5.4,5.4,0,0,0,9.14,12.2a7.83,7.83,0,0,0-.48,2.53C8.61,15.84,8.6,16.2,8.6,19s0,3.19.06,4.3a8,8,0,0,0,.48,2.54,5.42,5.42,0,0,0,3.06,3.05,7.57,7.57,0,0,0,2.53.48c1.11.05,1.47.06,4.3.06s3.19,0,4.3-.06a7.69,7.69,0,0,0,2.54-.48,5.44,5.44,0,0,0,3.05-3.05,8,8,0,0,0,.48-2.54c.05-1.11.06-1.47.06-4.3s0-3.19-.06-4.3a7.83,7.83,0,0,0-.48-2.53,5.42,5.42,0,0,0-3.05-3.06,8,8,0,0,0-2.54-.48c-1.11-.05-1.47-.06-4.3-.06"/><path class="cls-2" d="M19,13.67A5.36,5.36,0,1,0,24.39,19,5.36,5.36,0,0,0,19,13.67m0,8.84A3.48,3.48,0,1,1,22.51,19,3.48,3.48,0,0,1,19,22.51"/><path class="cls-2" d="M25.85,13.46a1.25,1.25,0,1,1-1.25-1.25,1.25,1.25,0,0,1,1.25,1.25"/></g></g></svg>
                        </a>
                        <a class="bookTable" target="_BLANK" href="https://madurado.meitre.com">
                            <p>BOOK YOUR TABLE</p>    
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div id="homeBackground">
        <img class="b-lazy" id="background1" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/homeBackground.jpg"/>
        <img class="b-lazy" id="homeCircle" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/homeCircle.png"/>
    </div>
    <section id="home"> 
        <div id="homeText">
            <h2>BARILOCHE - ARGENTINA</h2>
            <h1>PRIMER RESTAURANT DE CARNES MADURADAS EN BARILOCHE</h1>
            <a target="_BLANK" href="https://madurado.meitre.com"><p>RESERVAR</p></a>
        </div>
    </section>
    <section id="aboutSection">
        <div id="aboutContainer" class="row containerSection">
            <div class="col-12 col-lg-8">
                <img class="b-lazy" id="homeCircle" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/1.jpg"/>
            </div>
            <div class="col-12 col-lg-4">
                <h3>ABOUT</h3>
                <div class="line"></div>
                <p>Con una amplia experiencia y varios premios en su destacada labor nuestro Chef Pablo Quiven ideario y socio propietario junto a Carlos Patarata brindan a Bariloche una propuesta de gastronómica única en Bariloche.<br>Nuestra misión es brindar un servicio distintivo y de calida en la Patagonia, utilizando nuestro producto estrella de Argentina como es la carne.<br>Pensamos en MADURADO es un restaurante de parilla gourmet donde encontraras distintos cortes de carne a la parrilla e introdcuciendo a la región un producto que destaca en el mundo como las carnes maduradas.<br>Utilizando materia prima regional y estacional para elaborar platos que salen de lo convencional.</p>
            </div>
        </div>
    </section>
    <section id="dryAgedSection">
        <div id="dryAgedContainer">
            <h3>DRY AGED STEAKHOUSE</h3>
            <a target="_BLANK" href="https://madurado.meitre.com"><p>SEE MORE</p></a>
        </div>
    </section>
    <section id="metInfoSection">
        <div id="metInfoContainer" class="row containerSection">
            <div class="col-12 col-lg-4">
                <h3>CARNES MADURAS</h3>
                <div class="line"></div>
                <p>La maduración implica someter la carne a reposo en condiciones especiales, durante un período de dieciocho a veinticuatro días. Su sabor y su textura la hacen irresistible.<br>Carnes con mayor jugosidad La carne madurada incrementa la capacidad de retención de agua y con ello se obtiene una carne más jugosa, menos dura, por lo que durante la masticación la liberación de jugos produce una mejor percepción de la palatabilidad.<br>Carnes con mayor jugosidad La maduración muy prolongada, hace aparecer en la carne sabores muy exóticos que pueden llegar (en el caso de maduraciones extremas) a recordar a los quesos azules.</p>
            </div>
            <div class="metInfoImgContainer col-12 col-lg-4">
                <img class="b-lazy" id="metInfoImg1" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/metInfo1.jpeg"/>
            </div>
            <div class="metInfoImgContainer col-12 col-lg-4 row">
                <img class="b-lazy" id="metInfoImg2" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/metInfo2.jpg"/>
                <img class="b-lazy" id="metInfoImg3" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/metInfo3.jpg"/>
            </div>
        </div>
    </section>
    <section id="menuSection">
        <div id="menuContainer">
            <h3>OUR DISHES</h3>
            <a target="_BLANK" href="https://madurado.meitre.com"><p>SEE MORE</p></a>
        </div>
    </section>
    <section id="menu2Section">
    <div id="menu2Container" class="row containerSection">
            <div class="order-3 order-lg-1 menu2ImgContainer col-12 col-lg-4 row">
                <img class="b-lazy" id="menu2Img1" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/menu21.jpg"/>
            </div>
            <div class="order-2 order-lg-2 menu2ImgContainer col-12 col-lg-4 row">
                <img class="b-lazy" id="menu2Img2" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/menu22.jpeg"/>
                <img class="b-lazy" id="menu2Img3" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/menu23.jpg"/>
            </div>
            <div class="order-1 order-lg-3 col-12 col-lg-4">
                <h3>OUR DISHES</h3>
                <div class="line"></div>
                <p>Nuestra especialidad son las Carnes. Argentina es famosa en el mundo por la exquisita producción de carne que provee. Tenemos la mejor materia prima para ejecutar platos de excelentisimo nivel.<br>Podras optar por gran variedad de cortes de carne en la cual su tipo de coccion y acompañamiento brindara un plato que hara que disfrutes al maximo nuestras carnes.<br>Con gran variedad de productos locales nuestro Chef Pablo Quiven hará que tu experiencia por MADURADO sea memorable.<span> Acompañanos en este tour gastrónomico por nuestras Carnes Argentinas!</span></p>
            </div>
        </div>
    </section>

    <section id="placeSection">
        <div id="placeContainer">
            <h3>OUR RESTAURANT</h3>
            <a target="_BLANK" href="https://madurado.meitre.com"><p>SEE MORE</p></a>
        </div>
    </section>

    <section id="place2Section">
        <div id="place2Container" class="row containerSection">
            <div class="col-12 col-lg-5">
                <h3>OUR PLACE</h3>
                <div class="line"></div>
                <p>Veni a disfrutar de la mejor gastónomia en un entorno magico. Nuestro restaurant esta ubicado en la costa del lago Nahuel Huapi y cuenta con una vista increible para el disfrute de todos tus sentidos.<br>Contamos con una exclusiva bodega en la que encontraras los mejores vinos de varias regiones de nuestro país con etiquetas cuidadosamente seleccionadas por nuestro sommelier.<br>A la vista de nuestros comensales se encuentra nuestro parrillero quien cocina las carnes y utiliza el horno de barro para dar cocción y terminación a los platos.<br>En nuestra barra de bebidaspodrás encontrar tragos clásicos y de autor realizados con productos regionales de productores locales y también las marcas más prestigiosas de bebidas espirituosas.</p>
            </div>
            <div class="place2ContainerImg col-12 col-lg-7 row">
                <div class="place2ImgContainer col-12 row">
                    <img class="b-lazy col-12" id="place2Img1" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/place21.jpg"/>
                </div>
                <div class="place2ImgContainer col-12 row">
                    <img class="b-lazy col-4" id="place2Img2" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/place22.jpg"/>
                    <img class="b-lazy col-4" id="place2Img3" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/place23.jpg"/>
                    <img class="b-lazy col-4" id="place2Img4" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="public/img/place24.jpg"/>
                </div>
            </div>
        </div>
    </section>
    <section id="locationSection">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.540131744812!2d-71.49158804841001!3d-41.05718463412833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961a75e7e0297211%3A0x61cbb49fbe94f98d!2sClub%20de%20Regatas%20Bariloche!5e0!3m2!1ses!2sar!4v1671079753929!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="350"></iframe>
    </section>
</main>
<footer id="contactSection">
    <div class="row">
        <div class="col-6">
            <p>Contacto:<br>Tel.: +54 294 578034<br>Movil.: +54 294 4915587<br>Mail: info@maduradoresto.com</p>
        </div>
        <div id="footerSocial" class="col-6">
            <a target="_BLANK" href="https://www.instagram.com/madurado.resto/" class="socialMedia"><svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.03 4.75751C15.1536 4.75751 14.6683 4.77368 13.1459 4.84314C11.6264 4.9126 10.5883 5.15428 9.68056 5.50729C8.72906 5.86505 7.86605 6.42644 7.15243 7.15338C6.42664 7.86619 5.86491 8.72859 5.50633 9.68057C5.15523 10.5883 4.91259 11.6273 4.84313 13.1469C4.77463 14.6683 4.7575 15.1526 4.7575 19.03C4.7575 22.9074 4.77368 23.3917 4.84313 24.9141C4.91259 26.4336 5.15428 27.4717 5.50728 28.3794C5.86505 29.3309 6.42643 30.194 7.15338 30.9076C7.8662 31.6333 8.72859 32.1951 9.68056 32.5537C10.5883 32.9057 11.6264 33.1474 13.1459 33.2169C14.6683 33.2863 15.1536 33.3025 19.03 33.3025C22.9064 33.3025 23.3917 33.2863 24.9141 33.2169C26.4336 33.1474 27.4717 32.9057 28.3794 32.5527C29.3309 32.195 30.194 31.6336 30.9076 30.9066C31.6334 30.1938 32.1951 29.3314 32.5537 28.3794C32.9057 27.4717 33.1474 26.4336 33.2169 24.9141C33.2863 23.3917 33.3025 22.9064 33.3025 19.03C33.3025 15.1536 33.2863 14.6683 33.2169 13.1459C33.1474 11.6264 32.9057 10.5883 32.5527 9.68057C32.1944 8.72818 31.6326 7.86541 30.9066 7.15243C30.1938 6.42665 29.3314 5.86492 28.3794 5.50634C27.4717 5.15523 26.4327 4.9126 24.9131 4.84314C23.3917 4.77463 22.9074 4.75751 19.03 4.75751ZM19.03 7.32941C22.8408 7.32941 23.2927 7.34368 24.798 7.41219C26.1891 7.47594 26.9446 7.70716 27.4479 7.90412C28.114 8.16197 28.5897 8.47216 29.0893 8.97075C29.5888 9.47029 29.898 9.94604 30.1559 10.6121C30.3519 11.1154 30.5841 11.8709 30.6478 13.262C30.7163 14.7673 30.7306 15.2193 30.7306 19.03C30.7306 22.8408 30.7163 23.2927 30.6478 24.798C30.5841 26.1891 30.3529 26.9446 30.1559 27.4479C29.9275 28.0679 29.563 28.6287 29.0893 29.0893C28.6288 29.5631 28.0679 29.9276 27.4479 30.1559C26.9446 30.3519 26.1891 30.5841 24.798 30.6478C23.2927 30.7163 22.8417 30.7306 19.03 30.7306C15.2183 30.7306 14.7673 30.7163 13.262 30.6478C11.8709 30.5841 11.1154 30.3529 10.6121 30.1559C9.99213 29.9275 9.43127 29.563 8.97074 29.0893C8.49706 28.6287 8.13259 28.0678 7.90411 27.4479C7.7081 26.9446 7.47594 26.1891 7.41218 24.798C7.34368 23.2927 7.3294 22.8408 7.3294 19.03C7.3294 15.2193 7.34368 14.7673 7.41218 13.262C7.47594 11.8709 7.70715 11.1154 7.90411 10.6121C8.16197 9.94604 8.47216 9.47029 8.97074 8.97075C9.43121 8.49694 9.99209 8.13245 10.6121 7.90412C11.1154 7.70811 11.8709 7.47594 13.262 7.41219C14.7673 7.34368 15.2192 7.32941 19.03 7.32941V7.32941Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.03 23.7923C18.4046 23.7923 17.7853 23.6691 17.2076 23.4298C16.6298 23.1904 16.1048 22.8397 15.6626 22.3974C15.2204 21.9552 14.8696 21.4302 14.6302 20.8525C14.3909 20.2747 14.2677 19.6554 14.2677 19.03C14.2677 18.4046 14.3909 17.7854 14.6302 17.2076C14.8696 16.6298 15.2204 16.1048 15.6626 15.6626C16.1048 15.2204 16.6298 14.8696 17.2076 14.6303C17.7853 14.3909 18.4046 14.2678 19.03 14.2678C20.293 14.2678 21.5043 14.7695 22.3974 15.6626C23.2905 16.5557 23.7923 17.767 23.7923 19.03C23.7923 20.293 23.2905 21.5043 22.3974 22.3974C21.5043 23.2905 20.293 23.7923 19.03 23.7923V23.7923ZM19.03 11.6939C17.0844 11.6939 15.2184 12.4669 13.8426 13.8426C12.4668 15.2184 11.6939 17.0844 11.6939 19.03C11.6939 20.9757 12.4668 22.8416 13.8426 24.2174C15.2184 25.5932 17.0844 26.3661 19.03 26.3661C20.9756 26.3661 22.8416 25.5932 24.2174 24.2174C25.5932 22.8416 26.3661 20.9757 26.3661 19.03C26.3661 17.0844 25.5932 15.2184 24.2174 13.8426C22.8416 12.4669 20.9756 11.6939 19.03 11.6939V11.6939ZM28.5003 11.5607C28.5003 12.0207 28.3176 12.4617 27.9924 12.7869C27.6672 13.1121 27.2261 13.2948 26.7662 13.2948C26.3063 13.2948 25.8652 13.1121 25.54 12.7869C25.2148 12.4617 25.0321 12.0207 25.0321 11.5607C25.0321 11.1008 25.2148 10.6597 25.54 10.3345C25.8652 10.0093 26.3063 9.82663 26.7662 9.82663C27.2261 9.82663 27.6672 10.0093 27.9924 10.3345C28.3176 10.6597 28.5003 11.1008 28.5003 11.5607" fill="white"/></svg></a>
            <a target="_BLANK" href="https://api.whatsapp.com/send/?phone=542944915587&text&type=phone_number&app_absent=0" class="socialMedia"><svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.0899 5.2179C11.2556 5.2179 4.87997 11.3588 4.8772 18.9057C4.87536 21.3191 5.53098 23.6745 6.77407 25.7491L4.7575 32.8421L12.2925 30.9388C14.3884 32.0352 16.7189 32.6071 19.0843 32.6054H19.0899C26.9241 32.6054 33.2997 26.4637 33.3025 18.9167C33.3043 15.2611 31.8274 11.8201 29.1432 9.23353C26.46 6.64607 22.8919 5.21882 19.0899 5.2179ZM19.0899 30.2933H19.0852C16.9656 30.2933 14.8864 29.7445 13.0724 28.7077L12.6396 28.4609L8.17001 29.5898L9.36337 25.3909L9.08253 24.9609C7.90289 23.1618 7.27492 21.0571 7.27591 18.9057C7.27867 12.6322 12.5788 7.53004 19.0945 7.53004C22.2491 7.53096 25.2151 8.71604 27.4462 10.8661C29.6773 13.0162 30.9047 15.8753 30.9029 18.9158C30.9001 25.1893 25.6009 30.2933 19.0889 30.2933H19.0899ZM25.5696 21.7712C25.2141 21.6009 23.4683 20.7731 23.1423 20.658C22.8173 20.5447 22.5806 20.4858 22.344 20.8283C22.1083 21.1709 21.4269 21.9416 21.2206 22.169C21.0125 22.3974 20.8053 22.425 20.4499 22.2547C20.0945 22.0834 18.9499 21.7224 17.5945 20.5567C16.5383 19.6506 15.8256 18.5309 15.6184 18.1875C15.4112 17.8458 15.5963 17.6608 15.774 17.4904C15.9333 17.3385 16.1295 17.0917 16.3063 16.8919C16.483 16.6921 16.542 16.5493 16.6617 16.321C16.7795 16.0935 16.7206 15.8928 16.6313 15.7225C16.542 15.5503 15.833 13.867 15.5355 13.1829C15.2482 12.5162 14.9554 12.6055 14.7372 12.5945C14.53 12.5853 14.2943 12.5825 14.0558 12.5825C13.821 12.5825 13.4352 12.6681 13.1092 13.0107C12.7842 13.3532 11.8661 14.1801 11.8661 15.8633C11.8661 17.5475 13.1387 19.1736 13.3164 19.402C13.4941 19.6294 15.821 23.0852 19.3836 24.5677C20.2307 24.9186 20.8919 25.1294 21.4084 25.2878C22.2593 25.5484 23.0337 25.5106 23.6451 25.4232C24.3265 25.3246 25.7464 24.5963 26.041 23.7979C26.3375 22.9996 26.3375 22.3145 26.2491 22.1718C26.1626 22.0291 25.925 21.9434 25.5696 21.7712V21.7712Z" fill="white"/></svg></a>
            <a href="mailto:info@maduradoresto.com" class="socialMedia"><svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5.00009" y="9" width="30" height="22" rx="3" stroke="white" stroke-width="2"/><path d="M5.00009 11L17.2708 22.4527C18.8076 23.8871 21.1925 23.8871 22.7294 22.4527L35.0001 11" stroke="white" stroke-width="2"/></svg></a>
        </div>
        <div id="footerCopy" class="col-12">
            <p>Madurado BRC Restaurant 2023</p>
        </div>
    </div>
</footer>
<!-- LAZY LOAD -->
<script src="public/js/blazy.min.js" type="text/javascript"></script>
<script type="text/javascript">
    (function() {
        var bLazy = new Blazy();
    })();
</script>
<?php include('public/pages/footer.html'); ?>
