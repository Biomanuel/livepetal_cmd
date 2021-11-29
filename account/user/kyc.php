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
                            <h6 class="force-color-black">Please complete your KYC to upgrade your account for better transactions.</h6>
                            <div class="row px-5 py-5">
                                <div class="col col-lg-4">
                                    <a href="kyc-snapshort-intro.php" class="card no-border-line card-a-c">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 1</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-user-plus"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Snapshot</h5>
                                      </div>
                                    </a>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 2</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="far fa-file"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Upload Document</h5>
                                      </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 3</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-home"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Proof Of Address</h5>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-5">Start</button>
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