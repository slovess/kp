<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>ВХОД</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Montserrat, -apple-system, Roboto, Helvetica, sans-serif;
            font-size: 40px;
            color: #000;
            font-weight: 600;
            text-align: center;
        }

        .page-header {
            background-color: rgba(103, 8, 8, 1);
            display: flex;
            width: 100%;
            padding: 33px 38px;
            align-items: center;
            gap: 20px;
            font-size: 16px;
            color: rgba(229, 229, 229, 1);
            white-space: nowrap;
            letter-spacing: 0.8px;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .logo,
        .footer-logo {
            aspect-ratio: 1.1;
            object-fit: contain;
            object-position: center;
            width: 75px;
            align-self: stretch;
            flex-shrink: 0;
        }

        .nav-menu {
            display: flex;
            margin-top: auto;
            margin-bottom: auto;
            align-items: stretch;
            gap: 100px;
        }

        .nav-link,
        .auth-link {
            color: rgba(229, 229, 229, 1);
            text-decoration: none;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 92px 20px;
        }

        .login-title {
            color: rgba(103, 8, 8, 1);
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 2px;
            margin: 0 0 92px 0;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 469px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 35px;
        }

        .form-label {
            display: block;
            color: #000000;
            font-size: 40px;
            font-weight: 500;
            margin-bottom: 42px;
        }

        .form-input {
            width: 100%;
            height: 72px;
            border-radius: 5px;
            border: 1px solid rgba(134, 132, 132, 1);
            box-sizing: border-box;
            padding: 0 15px;
            font-size: 24px;
        }

        .login-button {
            border-radius: 10px;
            background-color: rgba(103, 8, 8, 1);
            border: none;
            width: 357px;
            max-width: 100%;
            padding: 17px 70px 28px;
            font-size: 24px;
            color: #ffffff;
            font-weight: 600;
            cursor: pointer;
            margin-top: 92px;
            font-family: inherit;
        }

        .page-footer {
            background-color: rgba(103, 8, 8, 1);
            display: flex;
            padding: 34px 50px;
            align-items: stretch;
            gap: 20px;
            font-size: 16px;
            color: rgba(229, 229, 229, 1);
            letter-spacing: 0.8px;
            justify-content: space-between;
        }

        .footer-nav {
            display: flex;
            flex-direction: column;
            align-items: start;
            white-space: nowrap;
        }

        .footer-link {
            color: rgba(229, 229, 229, 1);
            text-decoration: none;
            margin-top: 22px;
        }

        .footer-link:first-child {
            margin-top: 0;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .contact-link {
            color: rgba(229, 229, 229, 1);
            text-decoration: none;
            margin-top: 22px;
        }

        .contact-link:first-child {
            margin-top: 0;
        }

        .error-message {
            color: red;
            font-size: 20px;
            margin-top: 5px;
            text-align: center;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
            font-size: 24px;
        }

        .remember-me input {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        /* Медиа-запросы для адаптивности */
        @media (max-width: 1024px) {

            .page-header,
            .page-footer {
                padding: 25px 20px;
            }

            .nav-menu {
                gap: 50px;
            }

            .login-container {
                padding: 60px 20px;
            }

            .login-title {
                font-size: 32px;
                margin-bottom: 60px;
            }

            .form-label {
                font-size: 32px;
                margin-bottom: 30px;
            }

            .form-input {
                height: 60px;
                font-size: 20px;
            }

            .login-button {
                margin-top: 60px;
                padding: 15px 40px;
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 32px;
            }

            .page-header,
            .page-footer {
                flex-direction: column;
                align-items: center;
                gap: 15px;
                padding: 20px 15px;
            }

            .nav-menu {
                gap: 30px;
                margin: 15px 0;
            }

            .logo,
            .footer-logo {
                width: 60px;
            }

            .login-title {
                font-size: 28px;
                margin-bottom: 40px;
            }

            .form-label {
                font-size: 28px;
                margin-bottom: 20px;
            }

            .form-input {
                height: 50px;
                font-size: 18px;
            }

            .login-button {
                margin-top: 40px;
                width: 280px;
                padding: 12px 30px;
                font-size: 18px;
            }

            .remember-me {
                font-size: 18px;
            }

            .footer-nav,
            .contact-info {
                align-items: center;
                margin-top: 15px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 28px;
            }

            .nav-menu {
                gap: 20px;
            }

            .login-title {
                font-size: 24px;
            }

            .form-label {
                font-size: 24px;
            }

            .form-input {
                height: 45px;
                font-size: 16px;
            }

            .login-button {
                width: 240px;
                padding: 10px 20px;
                font-size: 16px;
            }

            .remember-me {
                font-size: 16px;
            }

            .page-footer {
                padding: 15px 10px;
            }

            .footer-link,
            .contact-link {
                font-size: 14px;
                margin-top: 15px;
            }
        }

        @media (max-width: 360px) {
            .nav-menu {
                gap: 15px;
                flex-direction: column;
                align-items: center;
            }

            .login-title {
                font-size: 22px;
            }

            .form-label {
                font-size: 22px;
            }

            .login-button {
                width: 200px;
            }
        }
    </style>
    <header class="page-header">
        <img src="https://i.ibb.co/VWwqGNN8/logo.png" class="logo" alt="Company Logo" />
        <nav class="nav-menu">
            <a href="{{url('/')}}" class="nav-link">ГЛАВНАЯ</a>
            <a href="#" class="nav-link">КОНТАКТЫ</a>
        </nav>
        <a href="{{ route('register') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
    </header>

    <main class="login-container">
        <h1 class="login-title">ВХОД</h1>

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Почта</label>
                <input type="email" id="email" name="email" class="form-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" name="password" class="form-input @error('password') is-invalid @enderror" required autocomplete="current-password" />
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Запомнить меня</label>
            </div>

            <button type="submit" class="login-button">ВОЙТИ</button>
        </form>
    </main>

    <footer class="page-footer">
        <img src="https://i.ibb.co/VWwqGNN8/logo.png" class="footer-logo" alt="Company Logo" />

        <nav class="footer-nav">
            <a href="{{url('/')}}" class="footer-link">ГЛАВНАЯ</a>
            <a href="#" class="footer-link">КОНТАКТЫ</a>
            <a href="{{ route('register') }}" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
        </nav>

        <div class="contact-info">
            <a href="#" class="contact-link">НАШ TG</a>
            <a href="#" class="contact-link">НАШ VK</a>
            <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link">CARTEMOUS@GMAIL.COM</a>
        </div>
    </footer>
</body>

</html>