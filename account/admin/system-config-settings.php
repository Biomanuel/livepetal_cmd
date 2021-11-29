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
                <div class="main-content-body force-bg-white px-1 pt-2 pb-5">
                    <h4 class="big-font-size tabel-heading-h">General Settings</h4>
                    <div class="mt-4 px-5 py-4">
                        <div class="row mt-5">
                            <span class="col col-lg-3">Company / website name </span>
                            <span class="col col-lg-9"><input type="text" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Company email </span>
                            <span class="col col-lg-9"><input type="email" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Balance on sign up </span>
                            <span class="col col-lg-9">
                                USD<input type="text" class="pro-select-input-sm" />%
                                <sp class="ml-4">Withdraw charge<input type="text" class="pro-select-input-sm" /></sp>
                                <sp class="ml-4">Upgrade fee<input type="text" class="pro-select-input-sm" />USD</sp>
                            </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Status </span>
                            <span class="col col-lg-9">
                                KYC
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-1" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-1" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                <sp class="ml-1">
                                    Email verification
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-9" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-9" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    SMS verification
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-2" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-2" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Upgrade status
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-3" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-3" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Email notify
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-4" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-4" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    SMS notify
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-5" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-5" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Registration
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-6" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-6" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Referral
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="toggle-switch-input-7" class="toggle-switch-input" />
                                        <label for="toggle-switch-input-7" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                            </span>
                        </div>                    
                        
                        <div class="row mt-5">
                            <span class="col col-lg-3">Subject </span>
                            <span class="col col-lg-9"><input type="email" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Address </span>
                            <span class="col col-lg-9"><input type="email" class="pro-select-input" /></span>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary float-right">Submit <i class="fas fa-paper-plane"></i></button>
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