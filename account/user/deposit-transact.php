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
                    <h4 class="force-color-black text-center">
                        <img src="../../assets/img/banner1.png" class="coin-icon" /> Bitcoin
                    </h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <h4 class="big-font-size text-center">Input amount to deposit</h4><br>
                            <div class="text-center">
                                <input type="number" placeholder="10.0" class="amt-transact-input" /><br>
                                <span class="big-font-size text-center">USD</span>
                            </div>
                            <div class="in-box-depot">
                                <div class="d-flex justify-content-between">
                                    <span>Amount</span>
                                    <span>$10</span>
                                </div><br>
                                <div class="d-flex justify-content-between">
                                    <span>Charge</span>
                                    <span>$1</span>
                                </div><br>
                                <div class="d-flex justify-content-between">
                                    <span>Total</span>
                                    <span>$10</span>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <a href="deposit-code.php" class="btn btn-primary">Deposit</a>
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