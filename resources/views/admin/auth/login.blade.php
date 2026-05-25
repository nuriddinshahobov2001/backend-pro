<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Центрирование формы на экране */
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>

<main class="login-form">
    <div class="card shadow-sm border-1 p-4 bg-white rounded">
        <div class="card-body">

            <h3 class="card-title text-center mb-4 fw-normal">Вход в панель</h3>

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email адрес</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль" required>
                    <label for="floatingPassword">Пароль</label>
                </div>

                <div class="form-check mb-3 text-start">
                    <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                    <label class="form-check-label text-muted" for="flexCheckDefault">
                        Запомнить меня
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>

                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none small text-muted">Забыли пароль?</a>
                </div>

            </form>

        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
