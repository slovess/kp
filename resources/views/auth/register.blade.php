<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>РЕГИСТРАЦИЯ</title>
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
        }

        .site-header {
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

        .header-logo,
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
            margin: auto 0;
            align-items: stretch;
            gap: 100px;
        }

        .nav-link,
        .auth-link,
        .footer-link,
        .contact-link {
            color: rgba(229, 229, 229, 1);
            text-decoration: none;
        }

        .auth-link {
            margin: auto 0;
        }

        .registration-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
        }

        .registration-title {
            color: rgba(103, 8, 8, 1);
            letter-spacing: 2px;
            margin-top: 89px;
            margin-left: 12px;
            font-size: 40px;
            text-align: center;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 469px;
        }

        .form-group {
            width: 100%;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-weight: 500;
            font-size: 40px;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-input {
            border-radius: 5px;
            border: 1px solid rgba(134, 132, 132, 1);
            height: 72px;
            width: 100%;
            box-sizing: border-box;
            padding: 0 15px;
            font-size: 24px;
        }

        .submit-button {
            border-radius: 10px;
            background-color: rgba(103, 8, 8, 1);
            margin-top: 113px;
            width: 357px;
            max-width: 100%;
            padding: 17px 70px 29px;
            font-size: 24px;
            color: #fff;
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-weight: 600;
        }

        .login-prompt {
            font-size: 24px;
            margin-top: 112px;
            text-align: center;
        }

        .login-link {
            color: rgba(103, 8, 8, 1);
            text-decoration: none;
            border-radius: 10px;
        }

        .site-footer {
            background-color: rgba(103, 8, 8, 1);
            display: flex;
            margin-top: 86px;
            width: 100%;
            padding: 27px 50px 44px;
            align-items: stretch;
            gap: 20px;
            font-size: 16px;
            color: rgba(229, 229, 229, 1);
            letter-spacing: 0.8px;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .footer-nav,
        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: start;
            white-space: nowrap;
        }

        .footer-link,
        .contact-link {
            margin-top: 22px;
        }

        .footer-link:first-child,
        .contact-link:first-child {
            margin-top: 0;
        }

        .error-message {
            color: red;
            font-size: 20px;
            margin-top: 5px;
            text-align: center;
        }

        /* Медиа-запросы для мобильных устройств */
        @media (max-width: 1024px) {

            .site-header,
            .site-footer {
                padding: 25px 20px;
            }

            .nav-menu {
                gap: 50px;
            }

            .registration-title {
                font-size: 32px;
                margin-top: 50px;
            }

            .form-label {
                font-size: 32px;
            }

            .form-input {
                height: 60px;
                font-size: 20px;
            }

            .submit-button {
                margin-top: 80px;
                padding: 15px 40px;
                font-size: 20px;
            }

            .login-prompt {
                margin-top: 80px;
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 32px;
            }

            .site-header,
            .site-footer {
                flex-direction: column;
                align-items: center;
                gap: 15px;
                padding: 20px 15px;
            }

            .nav-menu {
                gap: 30px;
                margin: 15px 0;
            }

            .header-logo,
            .footer-logo {
                width: 60px;
            }

            .registration-title {
                font-size: 28px;
                margin-top: 40px;
                margin-left: 0;
            }

            .form-label {
                font-size: 28px;
                margin-bottom: 15px;
            }

            .form-input {
                height: 50px;
                font-size: 18px;
            }

            .submit-button {
                margin-top: 60px;
                width: 280px;
                padding: 12px 30px;
                font-size: 18px;
            }

            .login-prompt {
                margin-top: 60px;
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

            .registration-title {
                font-size: 24px;
            }

            .form-label {
                font-size: 24px;
            }

            .form-input {
                height: 45px;
                font-size: 16px;
            }

            .submit-button {
                width: 240px;
                padding: 10px 20px;
                font-size: 16px;
            }

            .login-prompt {
                font-size: 16px;
            }

            .site-footer {
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

            .registration-title {
                font-size: 22px;
            }

            .form-label {
                font-size: 22px;
            }

            .submit-button {
                width: 200px;
            }
        }
    </style>
    <header class="site-header">
        <img src="https://i.ibb.co/VWwqGNN8/logo.png" class="header-logo" alt="Site logo" />
        <nav class="nav-menu">
            <a href="{{ route('home') }}" class="nav-link">ГЛАВНАЯ</a>
            <a href="#" class="nav-link">КОНТАКТЫ</a>
        </nav>
        <a href="{{ route('login') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
    </header>

    <main class="registration-container">
        <h1 class="registration-title">ЗАРЕГИСТРИРОВАТЬСЯ</h1>

        <form class="registration-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="surname" class="form-label">Фамилия</label>
                <input id="first_name" type="text" class="form-input @error('first_name') is-invalid @enderror"
                    name="surname" value="{{ old('surname') }}" required autocomplete="given-name" />
                @error('first_name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Имя</label>
                <input id="last_name" type="text" class="form-input @error('last_name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="family-name" />
                @error('last_name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="patronymic" class="form-label">Отчество</label>
                <input id="last_name" type="text" class="form-input @error('last_name') is-invalid @enderror"
                    name="patronymic" value="{{ old('patronymic') }}" required autocomplete="family-name" />
                @error('last_name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Почта</label>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" name="password"
                    class="form-input @error('password') is-invalid @enderror" required
                    autocomplete="current-password" />
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="submit-button">СОЗДАТЬ</button>
        </form>

        <p class="login-prompt">
            есть аккаунт?
            <a href="{{ route('login') }}" class="login-link">ВОЙТИ</a>
        </p>
    </main>

    <footer class="site-footer">
        <img src="https://i.ibb.co/VWwqGNN8/logo.png" class="footer-logo" alt="Site logo" />
        <nav class="footer-nav">
            <a href="{{ url('/') }}" class="footer-link">ГЛАВНАЯ</a>
            <a href="#" class="footer-link">КОНТАКТЫ</a>
            <a href="{{ route('login') }}" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
        </nav>
        <div class="contact-info">
            <a href="#" class="contact-link">НАШ TG</a>
            <a href="#" class="contact-link">НАШ VK</a>
            <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link">CARTEMOUS@GMAIL.COM</a>
        </div>
    </footer>
</body>

</html>
