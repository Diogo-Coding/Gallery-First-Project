<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../css/sign.css">
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <title>Sign up page</title>
</head>
<body>
    <?php include('../includes/header.php')?>
    <main>
        <div class="sign-container" id="container">
            <div class="form-container sign-up-container">
                <form action="sign-up.php" class="sign-form" method="POST">
                    <h1 class="sing-h1">Create Account</h1>
                    <!-- Contenedor social
                    <div class="social-container">
                        <a href="#" class="social link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social link"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="signSpan">or use your email for registration</span> -->
                    <p></p>
                    <input class="input" type="text" placeholder="Name" />
                    <input class="input" type="email" placeholder="Email" />
                    <input class="input" type="password" placeholder="Password" />
                    <p></p>
                    <button class="sign">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="sign-in.php" class="sign-form" method="POST">
                    <h1 class="sing-h1">Sign in</h1>
                    <!-- Contenedor social
                    <div class="social-container">
                        <a href="#" class="social link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social link"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="signSpan">or use your account</span> -->
                    <p></p>
                    <input class="input" type="email" placeholder="Email" />
                    <input class="input" type="password" placeholder="Password" />
                    <!-- <a href="#" class="link">Forgot your password?</a> -->
                    <p></p>
                    <button class="sign">Sign In</button>
                </form>
            </div>
            <!-- Olvidarse de esto
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="sing-h1">Welcome Back!</h1>
                        <p class="sign-p">To keep connected with us please login with your personal info</p>
                        <button class="ghost sign" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="sing-h1">Hello, Friend!</h1>
                        <p class="sign-p">Enter your personal details and start journey with us</p>
                        <button class="ghost sign" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div> -->
        </div>
    </main>
    <?php include('../includes/footer.php') ?>
</body>
</html>