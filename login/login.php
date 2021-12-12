<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login">
        <div class="form">
            <form class="login-form">

                <p class="heading">Login</p>

                <input type="text" placeholder="email" pattern="^[a-z0-9]+@[a-z0-9]+\.[a-z]$" required/>
                <input type="password" placeholder="password" required />
                <input class="sign-up" type="password" placeholder="confirm password" required />

                <button>login</button>
                
            </form>
            <p>
                don't have account ?
                <a class="sign-up-btn" href="#">Sign up</a>
            </p>
        </div>
    </div>

    <script src="./assets/js/index.js"></script>
</body>
</html>