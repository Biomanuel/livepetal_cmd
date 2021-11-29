<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders </title>
        <?php require_once "includes/meta.php"; ?>
        <?php require_once ("components/core/session-authentication.php"); ?>
        <?php require_once ("components/actions-signup.php"); ?>
    </head>
    <body>
        <?php require_once "includes/header.php"; ?>
        <main class="main">
            <div class="bg-img-page">
                <section class="min-vh-100">
                    <div id="cover-caption">
                        <div class="container">
                            <div class="row text-white">
                                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                                    <div class="cover">
                                        <h2 class="force-color-black">Register</h2>
                                        <img src="assets/img/step-2-1-form.svg" /> <br><br>
                                    </div>
                                    <div class="px-2">
                                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                            <span class="force-color-black"><span class="force-color-blue">*</span>Required fields</span><br>
                                            <div class="form-group">
                                                <label class="force-color-black">Full Name <span class="force-color-blue">*</span></label>
                                                <input type="text" class="form-control input-outline" name="us_full_name" value="<?= $us_full_name ?>">
                                                <span class="force-color-red"><?= $us_full_name_err ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Email Address <span class="force-color-blue">*</span></label>
                                                <input type="email" class="form-control input-outline" name="us_email" value="<?= $us_email ?>" >
                                                <span class="force-color-red"><?= $us_email_err ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Phone Number <span class="force-color-blue">*</span></label>
                                                <input type="tel" class="form-control input-outline" name="us_phone" value="<?= $us_phone ?>" >
                                                <span class="force-color-red"><?= $us_phone_err ?></span>
                                            </div>
                                            <div class="cover">
                                                <button type="submit" class="btn btn-primary btn-lg text-center" name="submit_form_1_btn">Continue</button>
                                                <p>
                                                    <br>
                                                    <span class="force-color-pale-white">Have an account?</span>
                                                    <span><a href="#" class="force-color-blue">Login</a></span>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        <script>
            <?php if($message_err != ""){ ?>
            window.onload = (event) => {
               bs4pop.notice('<?= $message_err ?>', {position: 'topright', type: 'danger'})
            };
            <?php } ?>
            
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "invalid"){
                window.onload = (event) => {
                   bs4pop.notice('Invalid Link', {position: 'topright', type: 'danger'})
                };
            }
        </script>
    </body>
</html>