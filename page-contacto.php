<?php get_header(); ?>



<main class="contact-container">

<h1>Contacto</h1>

<form id="contact-form" method="post">

<label>Nombre</label>
<input type="text" name="nombre" id="nombre">
<span class="error" id="error-nombre"></span>

<label>Email</label>
<input type="email" name="email" id="email">
<span class="error" id="error-email"></span>

<label>Mensaje</label>
<textarea name="mensaje" id="mensaje"></textarea>
<span class="error" id="error-mensaje"></span>

<button type="submit" name="enviar_mensaje">Enviar mensaje</button>

</form>

</main>

<?php get_footer(); ?>