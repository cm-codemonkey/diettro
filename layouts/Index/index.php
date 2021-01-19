<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0.0']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<main class="main_body">
    <section id="home" class="home">
        <figure>
            <img src="{$path.images}logotype.png" alt="Logotype">
        </figure>
        <div class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}home_1.png');"></div>
        </div>
    </section>
    <section id="us" class="us">
        <div>
            <h1><strong>Detrás de la</strong> arquitectura</h1>
            <p>Todo proyecto tiene su raíz, su punto de partida. Estámos abocados a entender profundamente el proposito de cada uno de nuestros espacios, para proponer una solución más humana, que abrace al usuario. Somos una sociedad arquitectónica que plasma sentimientos en un espacio.</p>
        </div>
        <figure>
            <img src="{$path.images}signature_1.png" alt="Signature">
            <img src="{$path.images}signature_2.png" alt="Signature">
        </figure>
    </section>
    <section id="projects" class="projects">
        <div class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}project_1.png');"></div>
            <div class="item" style="background-image: url('{$path.images}project_2.png');"></div>
            <div class="item" style="background-image: url('{$path.images}project_3.png');"></div>
            <div class="item" style="background-image: url('{$path.images}project_4.png');"></div>
        </div>
        <a class="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="next"><i class="fas fa-chevron-right"></i></a>
    </section>
    <section class="portafolio">
        <a href="{$path.images}portafolio.pdf" download="portafolio.pdf">Descarfar portafolio</a>
    </section>
    <section id="services" class="services" style="background-image: url('{$path.images}services.png');">
        <h2><strong>¿Que podemos</strong> ofrecerte?</h2>
        <h3><span>1.</span> <strong>Iniciemos</strong> el proyecto de <strong>la residencia</strong> que sueñas.</h3>
        <h3><strong>Diseñamos el espacio</strong> perfecto para tus <strong>huéspedes o inquilinos</strong> <span>2.</span></h3>
        <h3><span>3.</span> hagamos de tu <strong>oficina o negocio</strong> un ambiente con estilo propio.</h3>
        <a href="#contact">Contactanos</a>
    </section>
    <form id="contact" class="contact">
        <h2>Contactanos</h2>
        <div class="row">
            <fieldset class="col-12 col-lg-6">
                <h3>Nombre</h3>
                <input type="text" name="name">
            </fieldset>
            <fieldset class="col-12 col-lg-6">
                <h3>Apellido</h3>
                <input type="text" name="lastname">
            </fieldset>
            <fieldset class="col-12">
                <h3>Correo electrónico</h3>
                <input type="email" name="email">
            </fieldset>
            <fieldset class="col-12">
                <h3>Ciudad</h3>
                <input type="text" name="city">
            </fieldset>
            <fieldset class="col-12">
                <h3>Mensaje</h3>
                <textarea name="message" placeholder="Mensaje"></textarea>
            </fieldset>
        </div>
        <button type="submit">Enviar</button>
    </form>
</main>
