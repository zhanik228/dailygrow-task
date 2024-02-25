<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body style="display: flex; align-items: center; justify-content: center;">
    <form method="POST" class="auth-form">
        <h1 class="text-neutral-200 fs-500">Login</h1>
        <div class="auth-form--form-group form-group">
            <input placeholder="username" type="text" class="auth-form--input auth-form__name">
            <input placeholder="password" type="password" class="auth-form--input auth-form__password">
        </div>
        <button class="auth-form--btn primary-btn bg-accent-400 text-neutral-100">Log In</button>
        <div class="auth-form--form-group form-group">
            <p>Does not have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>
    </form>
</body>

</html>
