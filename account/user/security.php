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
                    <div class="ml-5 mr-5">
                        <p class="force-color-black">Create PIN for transactions</p>
                        <div class="force-bg-gray py-4 pl-4 pr-5 border-curve-5">
                            <form class="pr-5">
                              <div class="form-group">
                                <label for="exampleInputEmail1">PIN</label>
                                <input type="password" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Confirm PIN</label>
                                <input type="password" class="form-control border border-dark" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-primary">Create PIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="ml-5 mr-5 mt-5">
                        <p class="force-color-black">Edit Password</p>
                        <div class="force-bg-gray py-4 pl-4 pr-5 border-curve-5">
                            <form class="pr-5">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input type="password" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" class="form-control border border-dark" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control border border-dark" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        
        
    </body>
</html>