<?php

include './partials/menu.php';
include './partials/homepage-slider-and-about.php';
include './partials/header.php';

?>

<main>
    <div class="container">
        <section class="hero-section">
            <?php if (empty($slider)) : ?>
                <p>The slider is empty, nothing to show</p>
            <?php else : ?>
                <div class="hero-slider owl-carousel">
                    <?php foreach ($slider as $key => $value) : ?>
                        <!-- Item start -->
                        <div class="hero-item">
                            <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['title']; ?>">
                            <div class="caption">
                                <h2><?php echo $value['title']; ?></h2>
                                <p><?php echo $value['sliderDesc']; ?></p>
                                <a class="btn" href="about.php<?php echo $value['link']; ?>">Read More</a>
                            </div>
                        </div>
                        <!-- Item end -->
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
        <!-- Hero section end -->

        <!-- About section start -->
        <?php if (empty($homepageAbout)) : ?>
            <p>The homepage about section is empty, nothing to show</p>
        <?php else : ?>
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
        <?php endif; ?>
        <!-- About section end -->
    </div>
</main>

<?php include './partials/footer.php'; ?>