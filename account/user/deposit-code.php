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
                            <div class="alert-box">
                             <i class="fas fa-exclamation-triangle mr-2 force-color-green"></i> Scan QR code or copy wallet address to deposit
                            </div>
                            <br><br>
                            <div class="text-center">
                                <img src="../../assets/img/backcode.png" class="backcode-size-img" />
                            </div>
                            <div class="text-center">
                                <div>
                                    <br><br>
                                    <span class="big-font-size text-left">Wallet address</span><br>
                                    <input type="text" placeholder="fffff" class="input-withd" readonly />
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary mr-2">Copy address</button>
                                <button href="deposit-code.php" class="btn btn-primary">Deposit</button>
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