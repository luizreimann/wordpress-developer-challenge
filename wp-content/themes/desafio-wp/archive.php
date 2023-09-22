<?php
/*
Template Name: Arquivo de Posts
*/

get_header();

?>

<section class="archive-body">
<div class="container py-5">
    <div class="row">
        <div id="sticky" class="col-md-4">
            <h1><?php echo get_post_type_object(get_post_type())->labels->name; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque sed felis eu commodo. Duis dapibus eu arcu varius ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vel lorem malesuada, pellentesque purus eget, porttitor purus. Etiam eleifend facilisis lobortis. Curabitur erat lacus, ullamcorper ut magna a, maximus pellentesque dolor.</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => get_post_type(get_the_ID()),
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    $id = get_the_ID();
                ?>
                    <div class="col-6 col-md-4">
                        <div class="card px-1 px-md-3">
                            <a href="<?php echo get_permalink();?>">
                                <div class="cover reduced-cover"><div class="card-cover" style="background-image: url('<?php echo get_field('bx_play_cover', $id);?>');"></div></div>
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
</div>
</section>

<?php
get_footer();
?>