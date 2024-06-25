
<?php
include './partials/social-icons.php';
?>

<footer>
    <div class="container">
        <p>&copy; All right reserved. <a href="https://cubes.edu.rs">Cubes School</a></p>
        <nav class="social">
            <?php
            foreach ($social as $key => $value) {
                ?>
                <a href="<?php echo $value['link']; ?>"
                   class="social-icon <?php echo $value['icon']; ?>" target="_blank"></a>
               <?php } ?>
        </nav>
    </div>
</footer>

<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/owl.carousel.js" type="text/javascript"></script>
<script src="./js/main.js" type="text/javascript"></script>

<script src="https://kit.fontawesome.com/f4353abedd.js" crossorigin="anonymous"></script>


</body>
</html>