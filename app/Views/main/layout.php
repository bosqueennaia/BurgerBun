<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Burger Bun</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="\burgerbun\assets\css\style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="\burgerbun\assets\css\font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome to Burger Bun</h1>
                    <p class="sub-para">Please log in to get access!</p>
                    <h2>Login</h2>
                    <?php if(session()->getFlashData('success')) { ?>
                        <div class="alert alert-success">
                            <?= session()->get('success') ?>
                        </div>
                    <?php } ?>
                    <?php if(session()->getFlashdata('errors')) { ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('errors') ?>
                        </div>
                    <?php } ?>
                    <form action="/login" method="post">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Enter</button>
                    </form>
                
                    <p class="account">Don't have an account? <a href="/register">Register</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>© 2024 Burger Bun. All rights reserved | Design by <a href="http://w3layouts.com"> Naia.</a> </p>
        </div>
        <!-- footer -->
    </div>

</body>

</html>