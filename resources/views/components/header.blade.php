<header class="main-header">
   <img src="{{asset('img/logo.png')}}" class="logo" alt="Company Logo" />

   <button class="burger-menu" onclick="toggleMobileMenu()" aria-label="Открыть меню">
    <span class="burger-line"></span>
    <span class="burger-line"></span>
    <span class="burger-line"></span>
</button>

   <nav class="main-nav">
       <a href="{{ url('/') }}" class="nav-link">ГЛАВНАЯ</a>
       <a href="{{ route('contacts.index') }}" class="nav-link">КОНТАКТЫ</a>
   </nav>

   @auth
   <a href="{{ url('cart') }}" class="nav-link">КОРЗИНА</a>

   <a href="{{ url('profile') }}" class="auth-link">
       Привет, {{ Auth::user()->name }}!
   </a>

   <form method="POST" action="{{ route('logout') }}" style="display: inline;">
       @csrf
       <button type="submit" class="auth-link" style=" font-family:
       Montserrat; margin-bottom:20px; background: none; border: none; color: #e5e5e5; font-size: 16px; font-weight: 600; cursor: pointer;">
           ВЫЙТИ
       </button>
   </form>
   @else
   <a href="{{ route('login') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
   @endauth

</header>

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-content">
        <div class="mobile-menu-header">
            <h3>Навигация</h3>
            <button class="close-menu" onclick="toggleMobileMenu()">✕</button>
        </div>
        
        <div class="mobile-sections">
            <div class="mobile-section">
                <h4>Страницы</h4>
                <a href="{{ url('/') }}" class="mobile-nav-link">ГЛАВНАЯ</a>
                <a href="{{ route('categories.index') }}" class="mobile-nav-link">КАТЕГОРИИ</a>
                <a href="{{ route('catalog.index') }}" class="mobile-nav-link">КАТАЛОГ</a>
                <a href="{{ route('contacts.index') }}" class="mobile-nav-link">КОНТАКТЫ</a>
            </div>
            
            <div class="mobile-section">
                <h4>Аккаунт</h4>
                @auth
                    <a href="{{ url('cart') }}" class="mobile-nav-link">КОРЗИНА</a>
                    <a href="{{ url('profile') }}" class="mobile-nav-link">ПРОФИЛЬ</a>
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
.main-header {
    background-color: rgb(103, 8, 8);
    display: flex;
    width: 100%;
    padding: 32px 38px;
    align-items: center;
    gap: 20px;
    font-family: Montserrat, -apple-system, Roboto, Helvetica, sans-serif;
    font-size: 16px;
    color: rgb(229, 229, 229);
    font-weight: 600;
    white-space: nowrap;
    letter-spacing: 0.8px;
    justify-content: space-between;
}

.logo {
    aspect-ratio: 1.1;
    object-fit: contain;
    object-position: center;
    width: 75px;
    align-self: stretch;
    flex-shrink: 0;
}

.main-nav {
    align-self: stretch;
    display: flex;
    margin: auto 0;
    align-items: stretch;
    gap: 100px;
}

.nav-link {
    color: inherit;
    text-decoration: none;
}

.auth-link {
    align-self: stretch;
    margin-right: 80px;
    margin-top: 25px;
    color: inherit;
    text-decoration: none;
}

/* Мобильная адаптивность */
@media (max-width: 768px) {
    .main-header {
        flex-direction: column;
        padding: 15px 20px;
        gap: 15px;
        text-align: center;
        justify-content: space-between;
        flex-direction: row;
        padding: 20px;
    }
    
    .logo {
        width: 60px;
        align-self: center;
    }
    
    .main-nav {
        gap: 30px;
        margin: 0;
        flex-wrap: wrap;
        justify-content: center;
        display: none;
    }
    
    .nav-link {
        font-size: 14px;
        padding: 8px 12px;
        display: none;
    }
    
    .auth-link {
        margin: 0;
        font-size: 14px;
        padding: 8px 12px;
        display: none;
    }

    .burger-menu {
        display: flex;
        margin-left: 300px;
    }
}

@media (max-width: 480px) {
    .main-header {
        padding: 12px 15px;
    }
    
    .logo {
        width: 50px;
    }
    
    .main-nav {
        gap: 20px;
        flex-direction: column;
    }
    
    .nav-link, .auth-link {
        font-size: 13px;
        padding: 6px 10px;
    }

    .mobile-menu {
        width: 100%;
        right: -100%;
    }
}

/* Бургер-меню */
.burger-menu {
    flex-direction: column;
    gap: 4px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.burger-menu:hover {
    background: rgba(255, 255, 255, 0.1);
}

.burger-line {
    width: 25px;
    height: 3px;
    background: #e5e5e5;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.burger-menu.active .burger-line:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.burger-menu.active .burger-line:nth-child(2) {
    opacity: 0;
}

.burger-menu.active .burger-line:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* Мобильное меню */
.mobile-menu {
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

.mobile-menu.active {
    left: 0;
}

.mobile-menu-content {
    padding: 20px;
    height: 100%;
    overflow-y: auto;
}

.mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

.mobile-menu-header h3 {
    color: #e5e5e5;
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    font-family: Montserrat;
}

.close-menu {
    background: none;
    border: none;
    font-size: 22px;
    color: #e5e5e5;
    cursor: pointer;
    padding: 4px;
    border-radius: 4px;
    transition: background-color 0.2s ease;
}

.close-menu:hover {
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

.mobile-divider {
    height: 1px;
    background: rgba(255, 255, 255, 0.2);
    margin: 15px 0;
}

.logout-btn {
    color: #ffcccc;
}

.logout-btn:hover {
    background: rgba(255, 0, 0, 0.1);
    color: #ffffff;
}

@media (max-width: 480px) {
    .mobile-menu {
        width: 100%;
        left: -100%;
    }
}
</style>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const burgerMenu = document.querySelector('.burger-menu');
    
    mobileMenu.classList.toggle('active');
    burgerMenu.classList.toggle('active');
}

// Закрытие меню при клике вне его
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobileMenu');
    const burgerMenu = document.querySelector('.burger-menu');
    
    if (mobileMenu && !mobileMenu.contains(event.target) && !burgerMenu.contains(event.target)) {
        mobileMenu.classList.remove('active');
        burgerMenu.classList.remove('active');
    }
});

// Закрытие мобильного меню при изменении размера экрана
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        const mobileMenu = document.getElementById('mobileMenu');
        const burgerMenu = document.querySelector('.burger-menu');
        mobileMenu.classList.remove('active');
        burgerMenu.classList.remove('active');
    }
});
</script>

