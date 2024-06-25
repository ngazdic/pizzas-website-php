<?php 

include './partials/menu.php';
include './partials/about-sections.php';
include './partials/social-icons.php';
include './partials/homepage-slider-and-about.php';
include './partials/header.php';

?>

   <main>
    <div class="container">
        <section class="about-section" >
            <?php 
            if(!isset($aboutSections)) {
                echo "Page is empty";
            } else {
                $count = 0;
                foreach($aboutSections as $key => $value) {
                    $count++;
                    
                     if ($count % 2 == 0) {
                        $itemClass = 'even-item';
                    } else {
                        $itemClass = 'odd-item';
                    }
                    
                    
         ?>
            
            
                    <div class="about-item <?php echo $itemClass; ?>" id = "<?php echo $value['id']; ?>" >
                        <?php if ($count % 2 == 0) { ?>
                            <article class="about-info">
                                <h2 class="section-title"><?php echo $value['title']; ?></h2>
                                <div class="about-info-data">
                                    <?php echo $value['fullText']; ?>
                                </div>
                            </article>
                            <aside class="about-image">
                                <img src="<?php echo $value['image']; ?>" alt="">
                            </aside>
                        <?php } else { ?>
                            <aside class="about-image">
                                <img src="<?php echo $value['image']; ?>" alt="">
                            </aside>
                            <article class="about-info">
                                <h2 class="section-title"><?php echo $value['title']; ?></h2>
                                <div class="about-info-data">
                                    <?php echo $value['fullText']; ?>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
            <?php
                }
           
            }
            ?>
        </section>
    </div>
</main>


          
<?php 


include './partials/footer.php'

?>