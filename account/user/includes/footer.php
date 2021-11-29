<?php if($dataUserID['mail_confirm'] == "0"){ ?>
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalVerifyAcc">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span><i class="fas fa-exclamation-circle force-color-blue" style="font-size:50px;"></i></span><br><br>
            <span class="big-font-size">Your account is not yet verified.</span><br><br>
            <span>Please complete the KYC to upgrade your account for better transactions.</span><br><br>
          
            <a href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-primary">Verify Account</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<script>
    var msg = new URL(window.location.href).searchParams.get("msg");
    if(msg === "sucessLogin"){
        window.onload = (event) => {
           bs4pop.notice('Login successfully', {position: 'topright', type: 'success'})
        };
    }
</script>