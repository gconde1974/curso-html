<?php include('includes/head.inc.php'); ?>

<body>
    <header class="site-header ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/curso-html/inmobiliaria/"><img src="img/logo.svg" alt="logotipo"></a>
                <?php include('includes/nav.inc.php'); ?>
            </div>
        </div>
    </header>

    <main class="contenedor">
        <h1 class="txt-center fw300">Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <img src="img/nosotros.jpg" alt="imagen sobre nosotros">
            </div>
            <div class="txt-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                <p>Cras sed mattis risus. Vestibulum pulvinar molestie congue. Vestibulum dictum ligula quis velit vehicula sodales. Proin nec lacinia eros. Vestibulum semper consectetur est sit amet tristique. Nulla facilisi. In id viverra neque, ac semper leo. Nullam et pellentesque tellus. Quisque ut sagittis nunc. Morbi sit amet metus in massa consectetur convallis. Sed eu pellentesque sapien, vitae interdum ex. Sed magna risus, blandit ultricies elit vel, dignissim imperdiet nunc.</p>
                <p>Sed consectetur bibendum odio nec efficitur. Nulla facilisi. Morbi nec lacus tristique, dignissim arcu vitae, volutpat magna. Morbi est nulla, condimentum vitae dui a, finibus venenatis est. Duis porta arcu nunc, sed varius justo finibus eu. Integer dictum id turpis rutrum luctus.</p>
            </div>
        </div>
    </main>

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
    
    <?php include('includes/footer.inc.php');?>