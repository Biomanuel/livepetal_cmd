<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php require_once "includes/meta.php"; ?>
    </head>
    <body>
        <main class="main-dash row d-flex justify-content-between">
            <section class="col col-lg-1">
                <?php require_once "includes/sidebar.php"; ?>
            </section>
            <section class="col col-lg-11">
                <div class="fixed-top top-area-div">
                    <div class="head-border-bottom-ads"></div>
                    <div class="heading-adm-fixed">
                        <?php require_once "includes/header.php"; ?>
                    </div>
                </div>
                <div class="main-content-body">
                    <div class="row">
                        <div class="col col-lg-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Users</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">
                                            <?= count($dataUserAll) ?>
                                          </span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Active Users: <?= count($dataUserActive) ?></span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Blocked Users: <?= count($dataUserBlock) ?></span>
                                  </div><br>
                              </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Deposit</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">345</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: 11</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: 12</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: 0</span>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Withdrawal</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">345</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: 11</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: 12</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: 0</span>
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