<?php get_header(); ?>
        
<!--  Main page container --> 

    <div class="main">
        <div class="main__container">

            <img src="<?php the_post_thumbnail( 'full', attr ); ?>" 
            <h2>Toronto Based Artist</h2>
            <h2><a href="http://dotscottstudio.etsy.com"><button>Visit The Etsy Store</button></a></h2>
            <h3>Or Visit My Threadless and Art Of Where Stores Below</h3>
            
    </div>

<!--  Main Page Secondary Shops  -->

    <!-- Main Page Threadless -->

    <div class="main__container--alternates">

        <h2><a href="http://dotscottstudio.threadless.com" target="_blank"><button class="threadless-shop-link">If you would like any of these pretty things on t-shirts and bags please click here to visit my threadless shop</button></a></h2>

    </div>

    <!-- Main Page Art Of Where -->

    <div class="main__container--alternates">

        <h2><a href="https://artofwhere.com/artists/dotscottstudio" target="_blank"><button class="artofwhere-shop-link">If you would like any of these pretty things on t-shirts and bags please click here to visit my Art Of Where shop</button></a></h2>

    </div>

<?php get_footer(); ?>