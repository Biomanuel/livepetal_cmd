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
                        Investment Packs
                    </h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <section class="pricing-div">
                                <div class="row px-4">
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white px-5 border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Starter Pack</h5>
                                              <h2 class="force-color-blue">10%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$1000 - $4,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white px-5 border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Standard Pack</h5>
                                              <h2 class="force-color-blue">12%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$5000 - $19,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white px-5 border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Premium Pack</h5>
                                              <h2 class="force-color-blue">15%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$20,000 - $49,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white px-5 border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Enterprize Pack</h5>
                                              <h2 class="force-color-blue">20%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$50,000 - unlimited</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalc">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-4">
          <h2 class="big-font-size text-center">Input amount to calculate</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
          <br><br>
            <p class="text-center">
                <input type="number" class="calculator-input" placeholder="0.0">
            </p>
          <br><br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalConfirmInvestInpt" data-dismiss="modal">Calculate</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvestInpt">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
        <div class="pr-2 pt-4">
          <h2 class="big-font-size text-center">Successful</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="big-font-size">Your investment profit will amount to</span><br>
            <span class="big-font-size text-center">$0</span><br><br>
            <button type="button" data-toggle="modal" data-target="#myModalCalcBuy" class="btn btn-outline-primary" data-dismiss="modal">Buy pack</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalcBuy">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
        <div class="px-5 pt-4 row d-flex justify-content-between">
          <span class="big-font-size">Successful<br>$1000 - $4,999</span>
          <span class="force-color-blue big-font-size">10%</span>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="big-font-size">Input amount to invest</span><br>
            <span class="big-font-size text-center"><input type="number" placeholder="0.0" class="input-spcing-buyp" /></span><br><br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalcBuyMss" data-dismiss="modal">Buy pack</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalcBuyMss">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">You are unable to withdraw because you do not have any previous transactions with us.
Please opt in for an investment pack</span><br><br>
      </div>
        
        <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Your investment is successful</span><br><br><br>
      </div>
        
        <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Unsuccessful!</span><br>
            <span class="small-font-size text-center">Input at least minimum deposit</span><br><br>
      </div>
        
    </div>
  </div>
</div>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>