<?php
$destaque_query = new WP_Query(array(
    'post_type' => 'filmes',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
));

if ($destaque_query->have_posts()) :
    while ($destaque_query->have_posts()) : $destaque_query->the_post();
        $title = get_the_title();
        $cover = get_field('bx_play_cover');
        $duration = get_field('bx_play_video_duration');
        
        ?>
        <section class="frontpage-highlight" style="background-image: url('<?php echo $cover; ?>');">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="py-1 px-3 mx-1 category-label">Filmes</span>
                        <span class="py-1 px-3 mx-1 duration-label"><?php echo $duration; ?>m</span>
                        <h1 class="my-3"><?php echo $title; ?></h1>
                        <a href="<?php echo get_permalink(); ?>" class="btn-info">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php
    endwhile;
    wp_reset_postdata();
else:
    echo 'Nenhum filme encontrado.';
endif;
?>
<section class="all-content">
    <div id="movie" class="py-5">
        <div class="container pb-3">
            <h2>Filmes</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="movie-carousel" class="carousel">
                    <?php
                    $args = array(
                        'post_type' => 'filmes',
                        'posts_per_page' => -1,
                    );

                    $filmes_query = new WP_Query($args);

                    if ($filmes_query->have_posts()) :
                        while ($filmes_query->have_posts()) : $filmes_query->the_post();
                        $id = get_the_ID();
                    ?>
                        <div class="carousel-item">
                            <div class="card px-3">
                                <a href="<?php echo get_permalink();?>">
                                    <div class="cover"><div class="card-cover" style="background-image: url('<?php echo get_field('bx_play_cover', $id);?>');"></div></div>
                                </a>
                                <p><span class="py-1 my-2 duration-label"><?php echo get_field('bx_play_video_duration', $id);?>m</span></p>
                                <a href="<?php echo get_permalink();?>">
                                    <h3><?php echo the_title();?></h3>
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="documentary" class="py-5">
        <div class="container pb-3">
            <h2>Documentários</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="documentary-carousel" class="carousel">
                    <?php
                    $args = array(
                        'post_type' => 'documentarios',
                        'posts_per_page' => -1,
                    );

                    $documentary_query = new WP_Query($args);

                    if ($documentary_query->have_posts()) :
                        while ($documentary_query->have_posts()) : $documentary_query->the_post();
                        $id = get_the_ID();
                    ?>
                        <div class="carousel-item">
                            <div class="card px-3">
                                <a href="<?php echo get_permalink();?>">
                                    <div class="cover"><div class="card-cover" style="background-image: url('<?php echo get_field('bx_play_cover', $id);?>');"></div></div>
                                </a>
                                <p><span class="py-1 my-2 duration-label"><?php echo get_field('bx_play_video_duration', $id);?>m</span></p>
                                <a href="<?php echo get_permalink();?>">
                                    <h3><?php echo the_title();?></h3>
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="series" class="py-5">
        <div class="container pb-3">
            <h2>Séries</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="series-carousel" class="carousel">
                    <?php
                    $args = array(
                        'post_type' => 'series',
                        'posts_per_page' => -1,
                    );

                    $series_query = new WP_Query($args);

                    if ($series_query->have_posts()) :
                        while ($series_query->have_posts()) : $series_query->the_post();
                        $id = get_the_ID();
                    ?>
                        <div class="carousel-item">
                            <div class="card px-3">
                                <a href="<?php echo get_permalink();?>">
                                    <div class="cover"><div class="card-cover" style="background-image: url('<?php echo get_field('bx_play_cover', $id);?>');"></div></div>
                                </a>
                                <p><span class="py-1 my-2 duration-label"><?php echo get_field('bx_play_video_duration', $id);?>m</span></p>
                                <a href="<?php echo get_permalink();?>">
                                    <h3><?php echo the_title();?></h3>
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Carrossel de filmes
jQuery(document).ready(function ($) {
    $('#movie-carousel').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        infinite: false,
        initialSlide: 2,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 4,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0
                }
            }
        ]
    });

    // Carrossel de documentários
    $('#documentary-carousel').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        infinite: false,
        initialSlide: 2,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 4,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0
                }
            }
        ]
    });

    // Carrossel de séries
    $('#series-carousel').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        infinite: false,
        initialSlide: 2,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 4,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    initialSlide: 0
                }
            }
        ]
    });
});
</script>

