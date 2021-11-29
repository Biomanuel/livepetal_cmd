<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php require_once "includes/meta.php"; ?>
        <?php require ("components/actions-paymentgate-add.php"); ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    </head>
    <body class="force-bg-gray">
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
                <div class="main-content-body force-bg-white px-1 py-3">
                    <div class="row d-flex justify-content-between px-4 py-2">
                        <h4 class="big-font-size">Payment gateways</h4>
                        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-plus-square"></i> Add gateway</a>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Icon</th>
                                <th>Name of Gateway</th>
                                <th>Wallet Address</th>
                                <th>QR Code</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php for ($i=0; $i <count($dataPaymentGateway) ; $i++){  ?>
                        <tr>
                                <td><?= $i ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td><?= $dataPaymentGateway[$i]['name'] ?></td>
                                <td>
                                    <a href="#" class="force-color-black" data-toggle="modal" data-target="#myModal" id="click-modal-update" data-slider-title="name" data-id="1"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                </td>
                            </tr>    
<?php } ?>
                        </tbody>
                    </table>             
                </div>
            </section>
        </main>
        
<!-- The Modal New -->
<div class="modal" id="myModalAdd">
  <div class="modal-dialog modal-lg">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="modal-content">

      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Add payment gateway</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <span class="col col-lg-3">Name of gateway </span>
            <span class="col col-lg-9">
                <input type="text" class="pro-select-input" name="name" value="<?= $name ?>" />
                <br>
                <span class="force-color-red"><?= $name_err ?></span>
            </span>
        </div>
        <div class="row mt-4">
            <span class="col col-lg-2">Max deposit </span>
            <span class="col col-lg-4">
                <input type="number" class="pro-select-input" name="max_deposit" value="<?= $max_deposit ?>" />
            <br>
                <sp class="force-color-red"><?= $max_deposit_err ?></sp>
            </span>
            
            <span class="col col-lg-2">Min deposit </span>
            <span class="col col-lg-4">
                <input type="number" class="pro-select-input" name="min_deposit" value="<?= $min_deposit ?>" />
                <br>
                <span class="force-color-red"><?= $min_deposit_err ?></span>
            </span>
            
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Wallet address </span>
            <span class="col col-lg-9">
                <input type="text" class="pro-select-input" name="wallet_address" value="<?= $wallet_address ?>" />
                <br>
                <span class="force-color-red"><?= $wallet_address_err ?></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload icon </span>
            <span class="col col-lg-9">
                <input type="file" class="pro-select-input" name="upload_icon" accept="jpg, jpeg, png, svg, gif" />
                <br>
                <span class="force-color-red"><?= $upload_icon_err ?></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload QR image </span>
            <span class="col col-lg-9">
                <input type="file" class="pro-select-input" name="upload_qr_img" accept="jpg, jpeg, png, svg, gif" />
                <br>
                <span class="force-color-red"><?= $upload_qr_img_err ?></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Status </span>
            <span class="col col-lg-9">
                <select class="pro-select-input" name="status">
                    <option value="1" <?php if($status == 1){ echo "selected";} ?> >Active</option>
                    <option value="0" <?php if($status == 0){ echo "selected";} ?>>Pending</option>
                </select>
                <span class="force-color-red"><?= $status_err ?></span>
              </span>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_payment_gate_btn">Save Changes</button>
      </div>

    </form>
  </div>
</div>
        
<!-- The Modal Edit -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Edit payment gateway</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <span class="col col-lg-3">Name of gateway </span>
            <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
        </div>
        <div class="row mt-4">
            <span class="col col-lg-2">Max deposit </span>
            <span class="col col-lg-4"><input type="text" class="pro-select-input" /></span><span class="col col-lg-2">Min deposit </span>
            <span class="col col-lg-4"><input type="text" class="pro-select-input" /></span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Wallet address </span>
            <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload icon </span>
            <span class="col col-lg-9"><input type="file" class="pro-select-input" /></span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload QR image </span>
            <span class="col col-lg-9"><input type="file" class="pro-select-input" /></span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Status </span>
            <span class="col col-lg-9">
                <select class="pro-select-input">
                    <option>Active</option>
                    <option>Pending</option>
                </select>
              </span>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>

    </div>
  </div>
</div>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            
        </script>
        
        <script type="text/javascript">
            <?php if($message_err != ""){ ?>
                $(window).on('load', function() {
                    $('#myModalAdd').modal('show');
                });

                window.onload = (event) => {
                   bs4pop.notice('<?= $message_err ?>', {position: 'topright', type: 'danger'})
                };
            <?php } ?>
        </script>
        <script type="text/javascript">
            <?php if($message_err != ""){ ?>
                $(window).on('load', function() {
                    $('#myModalAdd').modal('show');
                });
            
                window.onload = (event) => {
                   bs4pop.notice('<?= $message_err ?>', {position: 'topright', type: 'danger'})
                };
            <?php } ?>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
            }
        </script>
    </body>
</html>