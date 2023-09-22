<?php
get_header();
?>

<section class="single-body py-5">
    <div class="container">
        <div class="details pb-3">
            <span class="py-1 my-2 px-3 mx-1 category-label"><?php echo get_post_type_object(get_post_type())->labels->name; ?></span>
            <span class="py-1 my-2 px-3 mx-1 duration-label"><?php echo get_field('field_650b61ea456c5',get_the_ID()); ?>m</span>
            <h1 class="py-3"><?php the_title();?></h1>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <?php echo get_field('bx_play_video_ID',get_the_ID()); ?>
        </div>
        <div class="pt-5">
            <p>
                <?php echo get_field('bx_play_synopsis', get_the_ID()); ?>
            </p>
        </div>
    </div>
</section>

<script>
// Adicionar a classe responsiva para evitar inserção manual pelo painel adminstrativo
jQuery(document).ready(function ($) {
    document.querySelector("iframe").classList.add("embed-responsive-item");
});
</script>

<?php
get_footer();
?>
