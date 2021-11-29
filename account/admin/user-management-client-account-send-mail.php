<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php require_once "includes/meta.php"; ?>
        <?php //require_once ("components/core/session-authentication.php"); ?>
        <?php //require_once ("components/core/actions-aaa-select.php"); ?>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                    <h4 class="big-font-size tabel-heading-h">Send email</h4>
                    <div class="mt-2 px-5">
                        <div class="row mt-5">
                            <span class="col col-lg-2">To:</span>
                            <span class="col col-lg-10"><input type="email" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Name:</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Subject:</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Message:</span>
                            <span class="col col-lg-10"><textarea type="text" class="pro-select-input"></textarea> </span>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary float-right">Send <i class="fas fa-paper-plane"></i></button>
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