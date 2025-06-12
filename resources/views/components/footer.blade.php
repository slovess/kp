 <footer class="site-footer">
     <img src="{{asset('img/logo.png')}}" class="footer-logo" alt="Company Logo" />
     <nav class="footer-nav">
         <a href="{{ route('home') }}" class="footer-link">ГЛАВНАЯ</a>
         <a href="#" class="footer-link">КОНТАКТЫ</a>
          @auth
    <a href="{{ url('profile') }}" class="auth-link">
        Привет, {{ Auth::user()->name }}!
    </a>
    @else
    <a href="{{ route('login') }}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
    @endauth
     </nav>
     <div class="social-links">
         <a href="#" class="social-link">НАШ TG</a>
         <a href="#" class="social-link">НАШ VK</a>
         <a href="mailto:CARTEMOUS@GMAIL.COM" class="social-link">CARTEMOUS@GMAIL.COM</a>
     </div>
 </footer>