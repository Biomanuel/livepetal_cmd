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
                        Copy Trade
                    </h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <div class="text-center">
                                <span class="big-font-size">Link your MT4 to our trade replicating server for weekly profit of $1000</span>
                            </div>
                            <div class="form-invest-input">
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Account ID </label>
                                    <input type="text" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">Broker</label>
                                    <select class="form-control input-outline force-bg-white">
                                        <option>New</option>
                                        <option>New</option>
                                        <option>New</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Equity/Balance </label>
                                    <input type="text" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Password</label>
                                    <input type="password" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="cover">
                                    <button type="submit" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#myModalConfirmInvest">Proceed</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvest">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
          <h2 class="big-font-size text-center">Make a payment</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <p class="text-center">Pay trade replicating server subscription $949 (billed monthly)</p>
          <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmInvestInpt" data-dismiss="modal">Proceed</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvestInpt">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->

      <!-- Modal body -->
      <div class="modal-body text-center">
            <span>
                <i class="far fa-check-circle force-color-green" style="font-size:50px;"></i>
            </span><br><br>
            <span class="big-font-size">Trade subscription was successfully paid</span><br><br>
            <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>