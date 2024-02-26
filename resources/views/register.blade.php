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
            @csrf
            <h1 class="auth-form--title">Sign Up</h1>
            <div class="auth-form--form-group form-group">
                <input name="username" placeholder="username" type="text" class="auth-form--input auth-form__name">
                <input name="email" placeholder="email" type="email" class="auth-form--input auth-form__name">
                <input name="password" placeholder="password" type="password" class="auth-form--input auth-form__password">
            </div>
            <button class="auth-form--btn primary-btn bg-accent-400 text-neutral-100">Sign Up</button>
            <div class="auth-form--link-wrapper form-group">
                <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </form>
</body>

</html>
