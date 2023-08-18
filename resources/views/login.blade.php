<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="login_card">
            <h1>Login</h1>
            <form action="login" method="POST">
                @csrf
                <div class="input--group">
                    <span class="input--label">Email</span>
                    <input name="email" type="text" class="input--text" placeholder="Email">
                </div>
                <div class="input--group">
                    <span class="input--label">password</span>
                    <input name = "password" type="password" class="input--text" placeholder="password">
                </div>
                <div class="input--submit--group">
                    <button type="submit" class="btn--submit">Login</button>
                </div>
            </form>
            <div class="login_class_footer">
                <a href="#">Forgot Password?</a>
                <a href="/signup">Create Account</a>
            </div>
        </div>

    </div>
</body>

</html>
