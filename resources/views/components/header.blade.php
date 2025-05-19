<header class="main-header">
     <img src="{{asset('img/logo.png')}}" class="logo" alt="Company Logo" />

     <nav class="main-nav">
         <a href="{{ url('/') }}" class="nav-link">ГЛАВНАЯ</a>
         <a href="#" class="nav-link">КОНТАКТЫ</a>
     </nav>

     @auth
     <span class="auth-link">Привет, {{ Auth::user()->name }}!</span>
     @else
     <a href="{{ route('login') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
     @endauth
 </header>