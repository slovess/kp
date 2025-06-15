<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КОНТАКТЫ - CARTEMOUS</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: white;
            line-height: 1.6;
        }

        .contacts-container {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .page-title {
            font-size: 48px;
            font-weight: 800;
            color: #670808;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .page-subtitle {
            font-size: 18px;
            color: #666;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        .contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: #670808;
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #670808, #8b0a0a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 36px;
            color: white;
        }

        .contact-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 15px;
        }

        .contact-description {
            font-size: 16px;
            color: #666;
            text-align: center;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .contact-link {
            display: inline-block;
            background:  #670808;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            text-align: center;
            width: 100%;
            letter-spacing: 0.5px;
        }

        .contact-link:hover {
            background: linear-gradient(135deg, #8b0a0a, #a50c0c);
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(103, 8, 8, 0.3);
        }

        .info-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .info-title {
            font-size: 32px;
            font-weight: 700;
            color: #670808;
            margin-bottom: 30px;
        }

        .info-grid {
            display: grid;
            gap: 30px;
            margin-top: 40px;
        }

        .info-item {
            padding: 20px;
            border-radius: 15px;
            background: white;
        
        }

        .info-item h4 {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .info-item p {
            font-size: 16px;
            color: #666;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            color: #670808;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            padding: 12px 25px;
            border: 2px solid #670808;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            background: #670808;
            color: white;
            transform: translateX(-5px);
        }

        /* Адаптивность */
        @media (max-width: 1024px) {
            .contacts-container {
                margin: 60px auto;
                padding: 0 15px;
            }

            .page-title {
                font-size: 40px;
            }

            .contacts-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
            }

            .contact-card {
                padding: 30px;
            }

            .info-section {
                padding: 40px;
            }
        }

        @media (max-width: 768px) {
            .contacts-container {
                margin: 40px auto;
                padding: 0 15px;
            }

            .page-title {
                font-size: 32px;
                margin-bottom: 15px;
            }

            .page-subtitle {
                font-size: 16px;
            }

            .contacts-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                margin-bottom: 40px;
            }

            .contact-card {
                padding: 25px;
            }

            .contact-icon {
                width: 60px;
                height: 60px;
                font-size: 28px;
                margin-bottom: 20px;
            }

            .contact-title {
                font-size: 20px;
            }

            .contact-description {
                font-size: 14px;
            }

            .contact-link {
                padding: 12px 25px;
                font-size: 14px;
            }

            .info-section {
                padding: 30px 20px;
            }

            .info-title {
                font-size: 26px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .contacts-container {
                margin: 30px auto;
                padding: 0 10px;
            }

            .page-title {
                font-size: 28px;
            }

            .contact-card {
                padding: 20px;
            }

            .contact-icon {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }

            .contact-title {
                font-size: 18px;
            }

            .info-section {
                padding: 25px 15px;
            }

            .info-title {
                font-size: 22px;
            }
        }

        @media (max-width: 360px) {
            .page-title {
                font-size: 24px;
            }

            .contact-card {
                padding: 15px;
            }

            .contact-link {
                padding: 10px 20px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

@include('components.header')

<div class="contacts-container">
    <div class="page-header">
        <h1 class="page-title">КОНТАКТЫ</h1>
        <p class="page-subtitle">Свяжитесь с нами удобным для вас способом. Мы всегда готовы помочь и ответить на ваши вопросы!</p>
    </div>

    <div class="contacts-grid">
        <div class="contact-card">
            <div class="contact-icon">📱</div>
            <h3 class="contact-title">TELEGRAM КАНАЛ</h3>
            <p class="contact-description">
                Подписывайтесь на наш Telegram канал, чтобы первыми узнавать о новинках, акциях и специальных предложениях!
            </p>
            <a href="https://t.me/gvrlvch" target="_blank" class="contact-link">
                ПЕРЕЙТИ В TELEGRAM
            </a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">🔵</div>
            <h3 class="contact-title">СТРАНИЦА ВКОНТАКТЕ</h3>
            <p class="contact-description">
                Следите за нашими новостями и участвуйте в конкурсах в нашей официальной группе ВКонтакте! Будьте в курсе последних событий!
            </p>
            <a href="https://t.me/gvrlvch" target="_blank" class="contact-link">
                ПЕРЕЙТИ В VK
            </a>
        </div>
    </div>

    <div class="info-section">
        <h2 class="info-title">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</h2>
        
        <div class="info-grid">
            <div class="info-item">
                <h4>📧 Email</h4>
                <p>CARTEMOUS@GMAIL.COM</p>
            </div>
            
        </div>

        <a href="{{ route('home') }}" class="back-link">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
    </div>
</div>

@include('components.footer')

</body>
</html>
