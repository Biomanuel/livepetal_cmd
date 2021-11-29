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
                    <h4 class="force-color-black">Select deposit method</h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <div class="d-flex justify-content-center mb-4">
                                <a href="deposit-transact.php" class="force-bg-white row ex-width-100">
                                    <div class="col col-lg-1">
                                        <img src="../../assets/img/coin-icon-binance.png" class="coin-icon">
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size force-color-black">
                                            8 Oct 2021
                                        </span>
                                        <span class="force-color-green">
                                            -16.4555
                                        </span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <span><i class="fa fa-chevron-right icon-coin-angle mt-2"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="#" class="force-bg-white row ex-width-100">
                                    <div class="col col-lg-1">
                                        <img src="../../assets/img/coin-icon-binance.png" class="coin-icon">
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size force-color-black">
                                            8 Oct 2021
                                        </span>
                                        <span class="force-color-green">
                                            -16.4555
                                        </span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <span><i class="fa fa-chevron-right icon-coin-angle mt-2"></i></span>
                                    </div>
                                </a>
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