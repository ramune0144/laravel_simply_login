<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
    href="style.css"
    />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login_card">
            <h1>Sign Up</h1>
            <form action="login" method="POST">
                @csrf
            <div class="input--group">
                <span  class="input--label">Email</span>
                <input name="email" type="text" class="input--text" placeholder="Email">
            </div>
            <div class="input--group">
                <span class="input--label">password</span>
                <input type="password" class="input--text" placeholder="password">
            </div>
            <div class="input--submit--group">
                <button class="btn--submit">Sign Up</button>
            </div>
        </form>
            </div>
        </div>

    </div>
</body>
</html>
