<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Montserrat', sans-serif;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #fff;
}

.main-header {
      background-color: rgb(103, 8, 8);
      display: flex;
      width: 100%;
      padding: 32px 38px;
      align-items: center;
      gap: 20px;
      font-family:
        Montserrat,
        -apple-system,
        Roboto,
        Helvetica,
        sans-serif;
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



.profile {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 100px 20px;
}

.profile__title {
  color: #670808;
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 60px;
  text-align: center;
}

.profile__content {
  display: flex;

  width: 100%;
  max-width: 1200px;
}

.profile__photo {
  width: 143px;
  height: 184px;
  border-radius: 5px;
}

.profile__card {
  flex: 1;
  border: 1px solid #670808;
  border-radius: 5px;
  background-color: #fff;
  padding: 34px;
}

.profile__info {
  display: flex;
  gap: 103px;
}

.profile__labels,
.profile__values {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.profile__label,
.profile__value {
  color: #000;
  font-size: 20px;
  font-weight: 400;
}

.profile__actions {
  display: flex;
  flex-direction: row;
  gap: 20px;
  margin-top: 48px;
  justify-content: center;
  flex-wrap: nowrap; /* запрещаем перенос */
}

.profile__button {
  width: 177px;
  height: 31px;
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  background-color: #670808;
  border: 1px solid #670808;
  cursor: pointer;
  white-space: nowrap;
}

@media (max-width: 640px) {
  .profile__actions {
    flex-wrap: nowrap; /* запрещаем перенос даже на мобильных */
  }

  .profile__button {
    width: 177px; /* фиксированная ширина */
    min-width: unset;
  }
}

.site-footer {
      background-color: rgba(103, 8, 8, 1);
      display: flex;
      width: 100%;
      margin-top: 99px;
      padding: 36px 50px;
      align-items: stretch;
      gap: 20px;
      font-family:
        Montserrat,
        -apple-system,
        Roboto,
        Helvetica,
        sans-serif;
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

@media (max-width: 991px) {
  .header__nav {
    gap: 50px;
  }

  .profile__title {
    font-size: 32px;
  }

  .profile__content {
    gap: 40px;
  }

  .profile__info {
    gap: 40px;
  }
}

@media (max-width: 640px) {
  .header {
    padding: 0 16px;
  }

  .header__nav {
    display: none;
  }

  .header__logo,
  .footer__logo {
    width: 50px;
    height: 45px;
  }

  .header__auth {
    font-size: 14px;
  }

  .profile__title {
    font-size: 24px;
    margin-bottom: 40px;
  }

  .profile__content {
    flex-direction: column;
    gap: 20px;
  }

  .profile__photo {
    width: 120px;
    height: 150px;
    margin: 0 auto;
  }

  .profile__card {
    padding: 20px;
  }

  .profile__info {
    flex-direction: column;
    gap: 20px;
  }

  .profile__label,
  .profile__value {
    font-size: 16px;
  }

  

  .footer {
    padding: 0 16px;
  }

  .footer__nav {
    display: none;
  }

  .footer__social {
    gap: 15px;
  }

  .footer__social-link {
    font-size: 12px;
  }
}

        </style>
    </style>
</head>
<body>
  @include('components.header')

<main class="profile">
    <h1 class="profile__title">ЛИЧНЫЙ КАБИНЕТ</h1>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <section class="profile__content">

            <div class="profile__card">
                <div class="profile__info">
                    <div class="profile__labels">
                        <label class="profile__label">Фамилия:</label>
                        <label class="profile__label">Имя:</label>
                        <label class="profile__label">Отчество:</label>
                        <label class="profile__label">Дата рождения:</label>
                        <label class="profile__label">Email:</label>
                    </div>
                    <div class="profile__values">
                        <input type="text" name="surname" class="profile__value @error('surname') is-invalid @enderror" value="{{ old('surname', $user->surname) }}" required>
                        @error('surname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <input type="text" name="name" class="profile__value @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <input type="text" name="patronymic" class="profile__value @error('patronymic') is-invalid @enderror" value="{{ old('patronymic', $user->patronymic) }}" required>
                        @error('patronymic')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <input type="date" name="birthday" class="profile__value @error('birthday') is-invalid @enderror" value="{{ old('birthday', $user->birthday) }}">
                        @error('birthday')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <input type="email" name="email" class="profile__value @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </section>
        
   
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.goods.index') }}" class="btn btn-danger">Админ-панель</a>
        @endif
        
        <div class="profile__actions">
            <button type="submit" class="profile__button">СОХРАНИТЬ</button>
        </div>
    </form>

    <form action="{{ route('logout') }}" method="POST" class="profile__actions">
        @csrf
        <button type="submit" class="profile__button">ВЫЙТИ</button>
    </form>
</main>

  @include('components.footer')
</body>
</html>
