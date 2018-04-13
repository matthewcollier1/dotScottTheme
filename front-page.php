<?php get_header(); ?>
        
<!--  Main page container --> 

    <div class="main">
        <div class="main__container">

            <img src="<?php the_post_thumbnail( 'full', attr ); ?> 
            <h2><a href="http://dotscottstudio.etsy.com"><button>Shop Etsy</button></a></h2>
            
        </div>   
    </div>

<!--  Main Page Secondary Shops  -->


    <div class="main__container--alternates--holder">
          
        <div class="main__container--alternates">
        
        
            <a href="https://artofwhere.com/artists/dotscottstudio" target="_blank"><button class="artofwhere-shop-link"></button></a>
            <a href="http://dotscottstudio.threadless.com" target="_blank"><button class="threadless-shop-link"></button></a>
        

        </div>

    </div>

<?php get_footer(); ?>