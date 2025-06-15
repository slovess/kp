<footer class="site-footer">
    <img src="{{asset('img/logo.png')}}" class="footer-logo" alt="Company Logo" />
    <button class="footer-burger-menu" onclick="toggleFooterMenu()" aria-label="Открыть меню футера">
        <span class="footer-burger-line"></span>
        <span class="footer-burger-line"></span>
        <span class="footer-burger-line"></span>
    </button>
    <nav class="footer-nav">
        <a href="{{ route('home') }}" class="footer-link">ГЛАВНАЯ</a>
        <a href="{{ route('contacts.index') }}" class="footer-link">КОНТАКТЫ</a>
         @auth
   <a href="{{ url('profile') }}" class="auth-link">
       Привет, {{ Auth::user()->name }}!
   </a>
   @else
   <a href="{{ route('login') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
   @endauth
    </nav>
    <div class="social-links">
        <a href="{{ route('contacts.index') }}" class="social-link">НАШ TG</a>
        <a href="{{ route('contacts.index') }}" class="social-link">НАШ VK</a>
        <a href="mailto:CARTEMOUS@GMAIL.COM" class="social-link">CARTEMOUS@GMAIL.COM</a>
    </div>
</footer>

<div class="footer-mobile-menu" id="footerMobileMenu">
    <div class="footer-mobile-content">
        <div class="footer-mobile-header">
            <h3>Навигация</h3>
            <button class="close-footer-menu" onclick="toggleFooterMenu()">✕</button>
        </div>
        
        <div class="mobile-sections">
            <div class="mobile-section">
                <h4>Страницы</h4>
                <a href="{{ route('home') }}" class="mobile-nav-link">ГЛАВНАЯ</a>
                <a href="{{ route('categories.index') }}" class="mobile-nav-link">КАТЕГОРИИ</a>
                <a href="{{ route('catalog.index') }}" class="mobile-nav-link">КАТАЛОГ</a>
                <a href="#" class="mobile-nav-link">КОНТАКТЫ</a>
            </div>
            
            <div class="mobile-section">
                <h4>Аккаунт</h4>
                @auth
                    <a href="{{ url('profile') }}" class="mobile-nav-link">ПРОФИЛЬ</a>
                    <a href="{{ url('cart') }}" class="mobile-nav-link">КОРЗИНА</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mobile-nav-link logout-btn">ВЫЙТИ</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mobile-nav-link">ВХОД</a>
                    <a href="{{ route('register') }}" class="mobile-nav-link">РЕГИСТРАЦИЯ</a>
                @endauth
            </div>
            
            <div class="mobile-section">
                <h4>Контакты</h4>
                <a href="{{ route('contacts.index') }}" class="mobile-nav-link">НАШ TG</a>
                <a href="{{ route('contacts.index') }}" class="mobile-nav-link">НАШ VK</a>
                <a href="mailto:CARTEMOUS@GMAIL.COM" class="mobile-nav-link">EMAIL</a>
            </div>
        </div>
    </div>
</div>

<style>
.site-footer {
    background-color: rgba(103, 8, 8, 1);
    display: flex;
    width: 100%;
    margin-top: 99px;
    padding: 36px 50px;
    align-items: stretch;
    gap: 20px;
    font-family: Montserrat, -apple-system, Roboto, Helvetica, sans-serif;
    font-size: 16px;
    color: rgba(229, 229, 229, 1);
    font-weight: 600;
    letter-spacing: 0.8px;
    justify-content: space-between;
}

.footer-logo {
    aspect-ratio: 1.1;
    object-fit: contain;
    object-position: center;
    width: 75px;
    margin: auto 0;
    flex-shrink: 0;
}

.footer-nav {
    display: flex;
    flex-direction: column;
    align-items: start;
    white-space: nowrap;
}

.footer-link {
    color: inherit;
    text-decoration: none;
    margin-top: 22px;
}

.footer-link:first-child {
    margin-top: 0;
}

.social-links {
    display: flex;
    flex-direction: column;
    align-items: start;
}

.social-link {
    color: inherit;
    text-decoration: none;
    margin-top: 22px;
}

.social-link:first-child {
    margin-top: 0;
}

/* Бургер-меню футера */
.footer-burger-menu {
    display: none;
    flex-direction: column;
    gap: 4px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.footer-burger-menu:hover {
    background: rgba(255, 255, 255, 0.1);
}

.footer-burger-line {
    width: 25px;
    height: 3px;
    background: #e5e5e5;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.footer-burger-menu.active .footer-burger-line:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.footer-burger-menu.active .footer-burger-line:nth-child(2) {
    opacity: 0;
}

.footer-burger-menu.active .footer-burger-line:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* Мобильное меню футера */
.footer-mobile-menu {
    position: fixed;
    bottom: 0;
    left: -100%;
    width: 300px;
    height: 70vh;
    background: rgb(103, 8, 8);
    z-index: 2000;
    transition: left 0.3s ease;
    box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
    border-radius: 15px 15px 0 0;
}

.footer-mobile-menu.active {
    left: 0;
}

.footer-mobile-content {
    padding: 20px;
    height: 100%;
    overflow-y: auto;
}

.footer-mobile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

.footer-mobile-header h3 {
    color: #e5e5e5;
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    font-family: Montserrat;
}

.close-footer-menu {
    background: none;
    border: none;
    font-size: 22px;
    color: #e5e5e5;
    cursor: pointer;
    padding: 4px;
    border-radius: 4px;
    transition: background-color 0.2s ease;
}

.close-footer-menu:hover {
    background: rgba(255, 255, 255, 0.1);
}

.mobile-sections {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.mobile-section h4 {
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    margin: 0 0 10px 0;
    font-family: Montserrat;
    letter-spacing: 0.5px;
}

.mobile-nav-link {
    display: block;
    padding: 10px 8px;
    color: #e5e5e5;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    font-family: Montserrat;
    letter-spacing: 0.6px;
    border-radius: 6px;
    transition: all 0.2s ease;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    margin-bottom: 5px;
}

.mobile-nav-link:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

.logout-btn {
    color: #ffcccc;
}

.logout-btn:hover {
    background: rgba(255, 0, 0, 0.1);
    color: #ffffff;
}

/* Мобильная адаптивность */
@media (max-width: 768px) {
    .site-footer {
        flex-direction: row;
        align-items: center;
        text-align: center;
        padding: 20px;
        gap: 25px;
        margin-top: 60px;
        justify-content: space-between;
    }
    
    .footer-logo {
        width: 60px;
        margin: 0;
    }
    
    .footer-nav, .social-links {
        display: none;
    }
    
    .footer-link, .social-link {
        margin-top: 15px;
        font-size: 14px;
    }

    .footer-burger-menu {
        display: flex;
    }
    
    .site-footer {
        justify-content: space-between;
        flex-direction: row;
        align-items: center;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .site-footer {
        padding: 20px 15px;
        gap: 20px;
        margin-top: 40px;
    }
    
    .footer-logo {
        width: 50px;
    }
    
    .footer-link, .social-link {
        margin-top: 12px;
        font-size: 13px;
    }

    .footer-mobile-menu {
        width: 100%;
        left: -100%;
    }
}
</style>

<script>
function toggleFooterMenu() {
    const footerMenu = document.getElementById('footerMobileMenu');
    const footerBurger = document.querySelector('.footer-burger-menu');
    
    footerMenu.classList.toggle('active');
    footerBurger.classList.toggle('active');
}

// Закрытие меню футера при клике вне его
document.addEventListener('click', function(event) {
    const footerMenu = document.getElementById('footerMobileMenu');
    const footerBurger = document.querySelector('.footer-burger-menu');
    
    if (footerMenu && !footerMenu.contains(event.target) && !footerBurger.contains(event.target)) {
        footerMenu.classList.remove('active');
        footerBurger.classList.remove('active');
    }
});

// Закрытие мобильного меню футера при изменении размера экрана
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        const footerMenu = document.getElementById('footerMobileMenu');
        const footerBurger = document.querySelector('.footer-burger-menu');
        footerMenu.classList.remove('active');
        footerBurger.classList.remove('active');
    }
});
</script>
