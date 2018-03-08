<?php get_header(); ?>
        

<div class="main">
    <div class="main__container">
        <div class="main__container--left">
            <img src= <?php echo get_theme_file_uri("/img/example.jpg") ?> alt="">
        </div>
        <div class="main__container--right">
            <div class="main__container--right--image main__container--right--image--one">
                <button class="store-button-one">Etsy</button>
            </div>
            <div class="main__container--right--image main__container--right--image--two">
            <button class="store-button-two">Threadless</button>
            </div>
            <div class="main__container--right--image main__container--right--image--three">
            <button class="store-button-three">Insta</button>
            </div>
        </div>

    </div>
</div>


<?php get_footer();?>