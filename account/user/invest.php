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
                    <h4 class="force-color-black">Select Investment Type</h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <div class="row px-5 border-curve-5">
                                <div class="col col-lg-6">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-clone"></i>
                                          </span><br><br>
                                        <h5 class="force-color-black">Copy Trade</h5><br><br>
                                        <p class="small-font-size">Use Our Trade Replicating Server For Weekly Profit Of $1000</p><br><br>
                                          <a href="invest-copy-trader-transact.php" class="btn btn-outline-primary">Continue</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                          </span><br><br>
                                        <h5 class="force-color-black">Investment Pack</h5><br><br>
                                        <p class="small-font-size">Choose Any Of Our High Rewarding Investing Packs.</p><br><br>
                                          <a href="invest-pack-transact.php" class="btn btn-outline-primary">Continue</a>
                                      </div>
                                    </div>
                                </div>
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