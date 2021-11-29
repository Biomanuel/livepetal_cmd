<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php require_once "includes/meta.php"; ?>
        <?php //require_once ("components/core/session-authentication.php"); ?>
        <?php //require_once ("components/core/actions-aaa-select.php"); ?>
    </head>
    <body>
        <main class="main-dash row">
            <section class="col col-lg-1">
                <?php require_once "includes/sidebar.php"; ?>
            </section>
            <section class="heading-dash col col-lg-11">
                <div class="head-border-bottom">
                    <?php require_once "includes/header.php"; ?>
                </div>
                <div class="mt-5 ml-5">
                    <h4 class="force-color-black">
                        Your account is not yet verified
                        <span class="force-bg-red px-2 py-2 small-font-size border-curve-5">UNVERIFIED</span>
                    </h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 px-5 border-curve-5">
                            <div class="d-flex justify-content-between">
                                <span class="force-color-black big-font-size">
                                    Snapshot
                                </span>
                                <span class="force-color-blue small-font-size">
                                    Step 1
                                </span>
                            </div>
                            <div class="row px-5 py-5">
                                <div class="text-center">
                                    <span class="big-font-size">
                                        Hold your phone at eye level and make sure your face is entered in the oval shape for the snapshot
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-5">Take snapshot</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>