<header class="main-header">
    <img src="{{asset('img/logo.png')}}" class="logo" alt="Company Logo" />

    <nav class="main-nav">
        <a href="{{ url('/') }}" class="nav-link">ГЛАВНАЯ</a>
        <a href="#" class="nav-link">КОНТАКТЫ</a>
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