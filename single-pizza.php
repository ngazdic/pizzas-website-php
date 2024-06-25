<?php 

include './partials/menu.php'

?>



<?php 

 


include './partials/products.php'

?>



<?php 


include './partials/header.php'

?>

<main>
    <div class="container">
        <?php
        if (!isset($_GET['id'])) {
            ?>
            <h2>PAGE DOESN'T EXIST</h2>
            <a href="/pizzas.php">Back to pizzas</a>
            <?php
        } else {
            if (array_key_exists($_GET['id'], $pizzas)) {
                $pizza = $pizzas[$_GET['id']];
                ?>
                <section class="single-pizza">
                    <aside class="pizza-image">
                        <img src="<?php echo $pizza['image']; ?>">
                    </aside>
                    <article class="pizza-detail">
                        <h1 class="pizza-title"><?php echo $pizza['name']; ?></h1>
                        <p class="pizza-description">
                            <?php echo $pizza['description']; ?>
                        </p>
                        <div class="price">
                            <p><b>Size:</b><span class="size"> M <?php echo  $pizza['size']['M']['radius'] . ' '; ?> cm. Price </span> : <b class="price"><?php echo $pizza['size']['M']['price']; ?></b> &euro;</p>
                            <p><b>Size:</b><span class="size"> L <?php echo  $pizza['size']['L']['radius'] . ' '; ?> cm. Price</span> : <b class="price"><?php echo $pizza['size']['L']['price']; ?></b> &euro;</p>
                            <p><b>Size:</b><span class="size"> XL <?php echo  $pizza['size']['XL']['radius'] . ' ';; ?>cm. Price </span> : <b class="price"><?php echo $pizza['size']['XL']['price']; ?></b> &euro;</p>
                        </div>
                        <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizza['preparationTime']; ?></span> min</p>
                        <p><b>Customer rate</b>: <span class="rate"><?php echo $pizza['rating']; ?></span> <span class="fa fa-star"></span></p>
                      <?php
                        if ($pizza['favorite']) {
                            echo '<span class="favorite fa fa-heart" style="color:red;"></span>';
                        } else {
                            echo '<span></span>';
                        }
                        
                         ?>
                    </article>
                    <!--article ends-->
                </section> 
            <!--single pizza section ends-->
                <?php
            } else {
                ?>
                <h2>Pizza not found</h2>
                <a href="/pizzas.php">Back to pizzas</a>
                <?php
            }
        }
        ?>
    </div>
    <!--div container ends-->
</main>


        
<?php 


include './partials/footer.php'

?>
