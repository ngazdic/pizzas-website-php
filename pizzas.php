<?php 

include './partials/menu.php';
include './partials/products.php';
include './partials/header.php';

?>

  <main>
    <div class="container">
       
         <!--Section pizzas start-->
        
        <section class="pizzas">
            <?php 
            if (empty($pizzas)) {
                echo "Pizza list is empty, nothing to show";
            } else {
                foreach ($pizzas as $key => $value) {
            ?>
            
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=<?php echo $key ?>">
                        <img src="<?php echo $value['image']; ?>" >
                    </a>
                    <?php
                    
                    if ($value['favorite'] === true) {
                        echo '<span class="favorite fa fa-heart"></span>';
                    } else {
                        echo '<span class="favorite fa fa-heart-o"></span>';
                    }
                    ?>
                    
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title"><?php echo $value['name']; ?></h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span><?php echo $value['preparationTime']; ?> min</span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span><?php echo $value['rating']; ?></span>
                            </p>
                        </div>
                        <p><?php echo $value['description']; ?></p>
                    </div>
                </article>
            <?php 
                }
            } 
            ?>
        </section>
          <!--Section pizzas end-->
    </div>
      <!--div container end-->
</main>

        
<?php 

include './partials/footer.php'

?>