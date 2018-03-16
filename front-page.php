<?php get_header(); ?>
        
<!--  Main page container --> 

    <div class="main">
        <div class="main__container">

            <img src="<?php the_post_thumbnail( 'full', attr ); ?>" 
            <h2>Toronto Based Artist</h2>
            <h2><a href="http://dotscottstudio.etsy.com"><button>Shop Etsy</button></a></h2>
            
            
    </div>

<!--  Main Page Secondary Shops  -->

    <!-- Main Page Threadless -->

    <div class="main__container--alternates--holder">

    <div class="main__container--alternates">

        <a href="http://dotscottstudio.threadless.com" target="_blank" class="shop-linker--link"><button class="shop-linker">Shop Threadless</button></a>
        <a href="http://dotscottstudio.threadless.com" target="_blank"><button class="threadless-shop-link"></button></a>

    </div>

    <!-- Main Page Art Of Where -->

    <div class="main__container--alternates">
        
        <a href="https://artofwhere.com/artists/dotscottstudio" target="_blank" class="shop-linker--link"><button class="shop-linker">Shop Art Of Where</button></a>
        <a href="https://artofwhere.com/artists/dotscottstudio" target="_blank"><button class="artofwhere-shop-link"></button></a>

    </div>

    </div>

<?php get_footer(); ?>