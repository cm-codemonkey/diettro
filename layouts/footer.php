<?php defined('_EXEC') or die; ?>

        <footer class="main_footer">
            <figure>
                <img src="{$path.images}logotype.png" alt="Logotype">
            </figure>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#us">Nosotros</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
                <ul>
                    <li><a href="#contact"><i class="far fa-envelope"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
            <p>Copyright © 2021 <strong><?php echo Configuration::$web_page; ?></strong> <i class="fas fa-heart"></i> Diseñador por <a href="mailto:gmafud@temasoluciona.mx">Tema Soluciona</a> & {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank">Code Monkey</a></p>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js?v=1.0"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
