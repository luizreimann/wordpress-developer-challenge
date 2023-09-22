</main>
<footer>
    <div class="container">
        <div class="text-center text-md-left">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Tema Play">
            </a>
            <p>
                © <?php echo do_shortcode('[year]'); ?> — Play — Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>
<div class="d-lg-none nav-mobile fixed-bottom">
    <div class="row text-center">
        <div class="col-4">
            <a href="<?php echo esc_url(home_url('/filmes')); ?>">
                <img id="movie-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/filmes.svg" alt="Filmes">
                <p id="movie-item">Filmes</p>
            </a>
        </div>
        <div class="col-4">
            <a href="<?php echo esc_url(home_url('/documentarios')); ?>">
                <img id="documentary-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/documentarios.svg" alt="Documentários">
                <p id="documentary-item">Documentários</p>
            </a>
        </div>
        <div class="col-4">
            <a href="<?php echo esc_url(home_url('/series')); ?>">
                <img id="series-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/series.svg" alt="Séries">
                <p id="series-item">Séries</p>
            </a>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function($) {
    let currentURL = window.location.href;

    if (currentURL.indexOf('/filmes') !== -1) {
        $('#movie-item').addClass('red-text');
        $('#movie-icon').attr("src", "<?php echo get_template_directory_uri(); ?>/assets/img/filmes-active.svg");
    }

    if (currentURL.indexOf('/documentarios') !== -1) {
        $('#documentary-item').addClass('red-text');
        $('#documentary-icon').attr("src", "<?php echo get_template_directory_uri(); ?>/assets/img/documentarios-active.svg");

    }

    if (currentURL.indexOf('/series') !== -1) {
        $('#series-item').addClass('red-text');
        $('#series-icon').attr("src", "<?php echo get_template_directory_uri(); ?>/assets/img/series-active.svg");

    }
});
</script>
</body>