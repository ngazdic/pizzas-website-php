<?php
if (isset($_POST['send']) && $_POST['send'] === 'true') {
    $formData = $_POST;
    $formErrors = array();

    if (!isset($formData['email'])) {
        $formErrors['email'] = 'Email does not exist';
    } else {
        $email = trim($formData['email']);
        if (empty($email)) {
            $formErrors['email'] = 'Email is required';
        } else if (strpos($email, '@') < 2) {
            $formErrors['email'] = 'Please provide a correct email address';
        }
    }

    if (!isset($formData['name'])) {
        $formErrors['name'] = 'Name does not exist';
    } else {
        $name = trim($formData['name']);
        if (empty($name)) {
            $formErrors['name'] = 'Name is required';
        } else if (strlen($name) < 2) {
            $formErrors['name'] = "Name can't be less than 2 characters long";
        }
    }

    if (!isset($formData['textarea'])) {
        $formErrors['textarea'] = 'Text does not exist';
    } else {
        $message = trim($formData['textarea']);
        if (empty($message)) {
            $formErrors['textarea'] = 'Text area is empty';
        } else if (strlen($message) < 5) {
            $formErrors['textarea'] = "Text area can't be less than 5 characters long";
        }
    }

    if (empty($formErrors)) {
        $successMessage = 'Your message has been sent successfully. Thank you for writing.';
        unset($formData);
    }
}

$contactMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs";
?>

<?php
include './partials/menu.php';
include './partials/products.php';
include './partials/header.php';
?>

<div class="container">
    <section class="contact-section">
        <aside class="form-wrapper">
            <?php if (isset($successMessage)) { ?>

                <div class="success-wrapper">

                    <?php echo $successMessage; ?>
                </div>
            <?php } ?>
            <form method="POST" action="contact.php" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name*</label>
                    <input type="text" name="name" id="name" value="<?php
                    if (isset($formData['name'])) {
                        echo ($formData['name']);
                    } else {
                        echo '';
                    }
                    ?>" class="form-control" />
                           <?php if (isset($formErrors['name'])) { ?>
                        <div class="error-wrapper"><?php echo $formErrors['name']; ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="email">Your Email*</label>
                    <input type="email" name="email" id="email" value="<?php
                    if (isset($formData['email'])) {
                        echo ($formData['email']);
                    } else {
                        echo '';
                    }
                    ?>" class="form-control" />
                           <?php if (isset($formErrors['email'])) { ?>
                        <div class="error-wrapper"><?php echo $formErrors['email']; ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="message">Your Message*</label>

                    <textarea name="textarea" id="message" class="form-control" rows="7">
                        <?php
                        if (isset($formData['textarea'])) {
                            echo ($formData['textarea']);
                        } else {
                            echo '';
                        }
                        ?>
                    </textarea>
                    <?php if (isset($formErrors['textarea'])) { ?>
                        <div class="error-wrapper"><?php echo $formErrors['textarea']; ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="send" value="true" class="btn">Send Message</button>
                </div>
            </form>
            <!-- form ends-->
            
        </aside> 
        <!--form wrapper ends-->

        <div class="contact-map">

            <iframe src="<?php echo $contactMap; ?>"
                    width="600" height="450" frameborder="0" style="border:0;" 
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <!--contact section ends-->
</div> 
<!--div container ends-->

<?php 
include './partials/footer.php'; 

?>

