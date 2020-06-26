<?php include('includes/head.inc.php'); ?>

<body>
    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/curso-html/inmobiliaria/"><img src="img/logo.svg" alt="logotipo"></a>
                <?php include('includes/nav.inc.php'); ?>
            </div>
            <h1>Venta de casas y departamentos Exclusivos de lujo</h1>
        </div>
    </header>

    <section class="contenedor seccion">
        <h2 class="fw300 txt-center">Más sobre nosotros</h2>
    
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/icono1.svg" alt="seguridad">
                <h3>Seguridad</h3>
                <p>Vivamus eget mattis tortor. Mauris auctor volutpat molestie. Ut in mi risus. Vestibulum hendrerit tortor non orci sagittis volutpat.</p>
            </div>
            
            <div class="icono">
                <img src="img/icono2.svg" alt="precio">
                <h3>Mejor precio</h3>
                <p>Curabitur rhoncus odio purus, et dictum neque commodo et. Duis tortor purus, sollicitudin et rhoncus nec, varius sit amet lorem.</p>
            </div>
            
            <div class="icono">
                <img src="img/icono3.svg" alt="a tiempo">
                <h3>A tiempo</h3>
                <p>Morbi lacinia diam vitae diam pharetra euismod. Aenean vitae lacus tempus, tempor elit a, ornare arcu.</p>
            </div>
        </div>
        
    </section>

    <main class="contenedor seccion">
        <h2 class="fw300 txt-center">Casas y departamentos en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/anuncio1.jpg" alt="">
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en lago</h3>
                    <p>Mauris eu elit id libero laoreet blandit. Vestibulum blandit ante mi.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li><img src="img/icono_wc.svg" alt=""> <p>3</p></li>
                        <li><img src="img/icono_dormitorio.svg" alt=""> <p>4</p></li>
                        <li><img src="img/icono_estacionamiento.svg" alt=""> <p>2</p></li>
                    </ul>
                    <a href="#" class="btn btn-amarillo d-block">Ver propiedad</a>
                </div>                
            </div>
            <div class="anuncio">
                <img src="img/anuncio2.jpg" alt="">
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en lago</h3>
                    <p>Mauris eu elit id libero laoreet blandit. Vestibulum blandit ante mi.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li><img src="img/icono_wc.svg" alt=""> <p>3</p></li>
                        <li><img src="img/icono_dormitorio.svg" alt=""> <p>4</p></li>
                        <li><img src="img/icono_estacionamiento.svg" alt=""> <p>2</p></li>
                    </ul>
                    <a href="#" class="btn btn-amarillo d-block">Ver propiedad</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="img/anuncio4.jpg" alt="">
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en lago</h3>
                    <p>Mauris eu elit id libero laoreet blandit. Vestibulum blandit ante mi.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li><img src="img/icono_wc.svg" alt=""> <p>3</p></li>
                        <li><img src="img/icono_dormitorio.svg" alt=""> <p>4</p></li>
                        <li><img src="img/icono_estacionamiento.svg" alt=""> <p>2</p></li>
                    </ul>
                    <a href="#" class="btn btn-amarillo d-block">Ver propiedad</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="anuncios.html" class="btn btn-verde">Ver Todos</a>
        </div>
    </main>
    
    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Etiam sed gravida tortor. In et rutrum quam. Fusce sit amet nisi quis quam ultricies maximus.</p>
            <a href="contacto.html" class="btn btn-amarillo">contacto</a>
        </div>
    </section>
    
    <div class="contenedor seccion-inferior seccion">
        <section class="blog">
            <h3 class="txt-center fw300">Nuestro blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/blog1.jpg" alt="">
                </div>
                <div class="txt-entrada">
                    <a href="blog-individual.php"><h4>Terraza en el techo de tu casa</h4></a>
                    <p>Escrito el: <span>19/06/2020</span> por: <span>Admin</span></p>
                    <p>Maecenas dapibus eros sed dictum venenatis. Cras ac quam tortor. Nam dignissim et velit facilisis sollicitudin.</p>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/blog2.jpg" alt="">
                </div>
                <div class="txt-entrada">
                    <a href="blog-individual.php"><h4>Guia para la decoracion de tu hogar</h4></a>
                    <p>Escrito el: <span>19/06/2020</span> por: <span>Admin</span></p>
                    <p>Maecenas dapibus eros sed dictum venenatis. Cras ac quam tortor. Nam dignissim et velit facilisis sollicitudin.</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3 class="txt-center fw300">Testimoniales</h3>
            <div class="testimonial">
                <blockquote class="fw300">Ut tempus tempus felis eget mollis. Donec condimentum, neque eu accumsan pellentesque, nibh lacus ornare tellus, id placerat ligula odio finibus lectus. Etiam ut porta est.</blockquote>
                <p>-Dolly Gonzalez</p>
            </div>
        </section>
    </div>
    
    <?php include('includes/footer.inc.php');?>