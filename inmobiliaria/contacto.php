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

    <h1 class="fw300 txt-center">Contacto</h1>
    <img src="img/destacada3.jpg" alt="imagen contacto">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw300 txt-center">Llena el formulario de contacto</h2>
        <form action="">
            <fieldset>
                <legend>Informacion personal</legend>
                <label for="nombre">Nombre </label>
                <input type="text" name="" id="nombre" placeholder="Tu nombre" value="">
                <label for="correo">Correo</label>
                <input type="email" name="" id="correo" placeholder="Tu correo electronico">
                <label for="telefono"></label>
                <input type="tel" name="" id="telefono" placeholder="Tu telefono">
                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="comprar">Comprar</option>
                    <option value="vender">Vender</option>
                </select>
                <label for="cantidad">Presupuesto</label>
                <input type="number" name="" id="cantidad" min="0">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Forma de contacto:</p>
                <label for="telefono">Telefono</label>
                <input type="radio" id="telefono" name="contacto" value="telefono">
                <label for="correo">Correo</label>
                <input type="radio" id="correo" name="contacto" value="correo">
                <p>Horarios de contacto:</p>
                <label for="fecha">Fecha</label>
                <input type="date" name="" id="fecha">
                <label for="horario">Hora</label>
                <input type="time" name="" id="horario" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="btn btn-verde">
        </form>
    </main>
    
    <?php include('includes/footer.inc.php');?>