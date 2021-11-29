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
                    <div class="mt-5 mb-5 px-5">
                        <div class="force-bg-gray py-4 border-curve-5">
                            <div class="row">
                                <a href="#" class="col col-lg-5 row force-bg-white mb-4 ml-5 py-2 px-4 border-curve-5 modal-a" data-toggle="modal" data-target="#myModal">
                                    <div class="col col-lg-1">
                                        <i class="far fa-arrow-alt-circle-down force-color-green"></i>
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size">8 Oct 2021</span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <h4 class="force-color-black big-font-size">+$235.43</h4>
                                        <span class="small-font-size">0.0000101532BTC</span>
                                    </div>
                                </a>
                                <div class="col col-lg-5 row force-bg-white mb-4 ml-5 py-2 px-4 border-curve-5">
                                    <div class="col col-lg-1">
                                        <i class="far fa-arrow-alt-circle-down"></i>
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size">8 Oct 2021</span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <h4 class="force-color-black big-font-size">+$235.43</h4>
                                        <span class="small-font-size">0.0000101532BTC</span>
                                    </div>
                                </div>
                                <div class="col col-lg-5 row force-bg-white mb-4 ml-5 py-2 px-4 border-curve-5">
                                    <div class="col col-lg-1">
                                        <i class="far fa-arrow-alt-circle-down"></i>
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size">8 Oct 2021</span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <h4 class="force-color-black big-font-size">+$235.43</h4>
                                        <span class="small-font-size">0.0000101532BTC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<!-- The Modal Edit -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Withdraw</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-4">
            <span class="col col-lg-10 big-font-size">0.0010351 BTC</span>
            <span class="col col-lg-2 badge badge-success pt-1">Approved</span>
        </div>
        <div class="mt-4">
            <span class="small-font-size">Reference ID</span><br>
            <span class="big-font-size">#HjT46zYvXVHEWa6q</span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Date</span><br>
            <span class="big-font-size">October 10, 2021 @ 07:58:AM</span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Amount</span><br>
            <span class="big-font-size">0.0010351BTC at US$58.00</span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Charge</span><br>
            <span class="big-font-size">$2</span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Method</span><br>
            <span class="big-font-size">Bitcoin</span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Updated</span><br>
            <span class="big-font-size">October 10, 2021 @ 07:58:AM</span>
        </div>
      </div>
    </div>
  </div>
</div>
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>