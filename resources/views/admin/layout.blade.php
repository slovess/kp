<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Админка</title>
    <style>
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff;
            color: #000;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
      .admin-header {
            background-color: #670808;
            padding: 24px 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #e5e5e5;
            font-weight: 600;
            letter-spacing: 0.8px;
        }

        .admin-nav {
            display: flex;
            gap: 40px;
        }

        .admin-nav a {
            color: inherit;
            text-decoration: none;
        }

        .admin-container {
            flex: 1;
            padding: 40px;
        }

        .admin-footer {
            background-color: #670808;
            padding: 24px 38px;
            color: #e5e5e5;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-align: center;
        }
      a {
        color: #670808;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
      button {
        cursor: pointer;
        background: #670808;
        color: white;
        border: none;
        padding: 6px 14px;
        border-radius: 4px;
        font-weight: 600;
      }
      button:hover {
        background: #a30d0d;
      }
      input, select, textarea {
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
        width: 100%;
        max-width: 300px;
        box-sizing: border-box;
      }
      label {
        font-weight: 600;
        display: block;
        margin-bottom: 4px;
      }
      form > div {
        margin-bottom: 18px;
      }
      .error {
        color: #d9534f;
        font-size: 0.9rem;
        margin-top: 4px;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }
      thead tr {
        background-color: #f5f5f5;
      }
      th, td {
        padding: 10px 12px;
        text-align: left;
        border: none;
      }
      tbody tr:hover {
        background-color: #f9f9f9;
      }
      img {
        border-radius: 4px;
        object-fit: cover;
      }
      .success-message {
        margin-top: 10px;
        padding: 10px;
        background: #d4edda;
        color: #155724;
        border-radius: 4px;
        font-weight: 600;
      }
      .form-columns {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    max-width: 1000px;
}

.form-column {
    flex: 1;
    min-width: 300px;
}
.checkbox-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
}
.checkbox-wrapper input[type="checkbox"] {
    margin: 0;
    width: 16px;
    height: 16px;
}
.checkbox-wrapper label {
    margin: 0;
    font-weight: 500;
}
.checkbox-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
}

    </style>
</head>
<body>
<header class="admin-header">
    <div class="admin-logo">
        <strong>Админка</strong>
    </div>
    <nav class="admin-nav">
        <a href="{{ route('admin.goods.index') }}">Товары</a>
        <a href="{{ route('home') }}">Выйти из админ-панели</a>
     
    </nav>
</header>

<main class="admin-container">
    @yield('content')
</main>

<footer class="admin-footer">
    &copy; {{ date('Y') }} Админ-панель
</footer>
   

</body>
</html>

