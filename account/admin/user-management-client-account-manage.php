<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php require_once "includes/meta.php"; ?>
        <?php //require_once ("components/core/session-authentication.php"); ?>
        <?php //require_once ("components/core/actions-aaa-select.php"); ?>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="../../assets/css/toggle-switch.css" rel="stylesheet" type="text/css" />
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
                <div class="main-content-body px-1 pt-2 pb-5 row">
                    <div class="col col-lg-8 px-4">
                        <div class="force-bg-white">
                            <h4 class="big-font-size tabel-heading-h">Update account information</h4>
                            <div class="mt-4 px-5 py-4">
                                <div class="row">
                                    <span class="col col-lg-3">Username </span>
                                    <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Full Name </span>
                                    <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Email </span>
                                    <span class="col col-lg-9"><input type="email" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Number </span>
                                    <span class="col col-lg-9"><input type="tel" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Address</span>
                                    <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Country</span>
                                    <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Zip Code</span>
                                    <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Password</span>
                                    <span class="col col-lg-9"><input type="password" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Balance</span>
                                    <span class="col col-lg-9"><input type="number" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Profit</span>
                                    <span class="col col-lg-9"><input type="number" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Referal earning</span>
                                    <span class="col col-lg-9"><input type="number" class="pro-select-input" /></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Status </span>
                                    <span class="col col-lg-9">
                                        Email verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="checkbox" id="toggle-switch-input-1" class="toggle-switch-input" />
                                                <label for="toggle-switch-input-1" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        <sp class="ml-1">
                                            Phone verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="checkbox" id="toggle-switch-input-9" class="toggle-switch-input" />
                                                <label for="toggle-switch-input-9" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                        <sp class="ml-1">
                                            Upgrade account
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="checkbox" id="toggle-switch-input-2" class="toggle-switch-input" />
                                                <label for="toggle-switch-input-2" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                    </span>
                                </div>

                                <div class="mt-2 mb-5">
                                    <button type="button" class="btn btn-primary float-right">Update <i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 px-4">
                        <div class="force-bg-white px-4 py-4">
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Joined: </span>
                                <span class="col col-lg-8 small-font-size">2021/11/13 12:28:PM Last</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Login: </span>
                                <span class="col col-lg-8 small-font-size">1970/01/01 12:00:AM Last</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Updated: </span>
                                <span class="col col-lg-8 small-font-size">2021/11/13 12:28:PM IP</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Address: </span>
                                <span class="col col-lg-8 small-font-size">2409:4055:4e12:e37:adba:4352:4c4:52</span>
                            </div>
                        </div>
                        <div class="force-bg-white py-4 mt-5">
                            <h4 class="big-font-size tabel-heading-h">KYC</h4>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Snapshot</b><br><br>
                                    <img src="../../assets/img/banner1.png" class="force-img-avatar-circle" />
                                </div>
                            </div>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Document</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Front snap</span><br>
                                            <img src="../../assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div>
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Back snap</span><br>
                                            <img src="../../assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Proof of Adress</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Snap</span><br>
                                            <img src="../../assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div>
<!--
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Back snap</span>
                                            <img src="../../assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div>
-->
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
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    </body>
</html>