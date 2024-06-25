


<!-- NAPOMENA - website nisam napravio da bude responsive, naknadno sam shvatio da nije,
ako treba nije problem mogu i to da uradim-->

<?php

include './partials/menu.php';
include './partials/homepage-slider-and-about.php';
include './partials/header.php';

?>

<main>
    <div class="container">
       <section class="hero-section">
    <?php if (empty($slider)) {
        echo 'The slider is empty, nothing to show';
        
    } else { ?>
        <div class="hero-slider owl-carousel">
            <?php foreach ($slider as $key => $value) { ?>
               
                <div class="hero-item">
                    <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['title']; ?>">
                    <div class="caption">
                        <h2><?php echo $value['title']; ?></h2>
                        <p><?php echo $value['sliderDesc']; ?></p>
                        <a class="btn" href="about.php<?php echo $value['link']; ?>">Read More</a>
                        
                    </div>
                </div>
              
            <?php } ?>
        </div>
    <?php } ?>
</section>
        <!-- Hero section end -->

       <!-- About section start -->
<?php 
if (empty($homepageAbout)) { 
    echo 'The homepage about section is empty, nothing to show';
} else {
?>
    <section class="index-section">
        <aside class="index-image">
            <img src="<?php echo $homepageAbout['image']; ?>" alt="<?php echo $homepageAbout['title']; ?>">
        </aside>
        
        <article class="index-info">
            <h2><?php echo $homepageAbout['title']; ?></h2>
            <p><?php echo $homepageAbout['aboutDesc']; ?></p>
            <a href="<?php echo $homepageAbout['link']; ?>" class="btn">Read More</a>
        </article>
        
    </section>
<?php 
}
?>
<!-- About section end -->
    </div>
</main>

<?php include './partials/footer.php'; ?>