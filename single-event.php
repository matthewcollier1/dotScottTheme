<!-- <?php 
    $homepageEvents = new WP_Query( array(
        'posts_per_page' => 2,
        'post_type' => 'event'
    ));

    while($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></h5></a>
        <p><?php echo wp_trim_words( get_the_content(), 18) ?>
        <a href="<?php the_permalink() ?>">Learn More</a></p>
        <p><?php $eventDate = new DateTime(get_field('event_date'));
             echo $eventDate -> format('M');
        ?></p>

    <?php }
?> -->