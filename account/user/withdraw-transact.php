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
                        <img src="../../assets/img/banner1.png" class="coin-icon" /> Bitcoin
                    </h4>
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 px-5 border-curve-5">
                            <span class="big-font-size mr-2">Input amount to withdraw</span>
                            <input type="number" placeholder="10.0" class="amt-transact-input mr-2" />
                            <span class="big-font-size text-center">USD</span>
                            <br><br>
                            <span class="big-font-size mr-2">Wallet address for withdrawal</span><br>
                            <input type="text" class="input-withdarl"/> <br><br>
                            
                            <span class="big-font-size mr-2">Withdraw from</span><br>
                            <div class="row">
                                <div class="col col-lg-3">
                                    <button type="button" class="btn btn-outline-primary force-color-black" data-toggle="modal" data-target="#myModalConfirmWithdraw">
                                        <span class="mr-4"><b>Account Balance</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your main balance</span>
                                    </button>
                                </div>
                                <div class="col col-lg-3">
                                    <button type="button" class="btn btn-outline-primary force-color-black" data-toggle="modal" data-target="#myModalConfirmWithdraw">
                                        <span class="mr-4"><b>Trading Profit</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your trading balance</span>
                                    </button>
                                </div>
                                <div class="col col-lg-3">
                                    <button type="button" class="btn btn-outline-primary force-color-black" data-toggle="modal" data-target="#myModalConfirmWithdraw">
                                        <span class="mr-4"><b>Referral Earnings</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your referral earnings</span>
                                    </button>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <a href="deposit-code.php" class="btn btn-primary px-5">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmWithdraw">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
          <span class="big-font-size ml-4">Review</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <div class="in-box-depot-modal">
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
          <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmWithdrawInput" data-dismiss="modal">Confirm withdraw</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmWithdrawInput">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-4">
          <h4 class="big-font-size text-center">Input withdrarwal PIN</h4>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <div class="row">
                <br><br>
                <div class="row px-5">
                    <div class="col-lg-3 px-2">
                        <input type="number" class="pin-input-cl" />
                    </div>
                    <div class="col-lg-3 px-2">
                        <input type="number" class="pin-input-cl" />
                    </div>
                    <div class="col-lg-3 px-2">
                        <input type="number" class="pin-input-cl" />
                    </div>
                    <div class="col-lg-3 px-2">
                        <input type="number" class="pin-input-cl" />
                    </div>
                </div>
            </div>
          <br><br>
            <button type="button" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </div>
</div>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>