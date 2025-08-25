<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro na Galeria Feminina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8bbd0, #bbdefb);
            font-family: 'Poppins', sans-serif;
        }
        h1 { color: #e91e63; font-weight: bold; margin-bottom: 30px; }
        .card {
            background: #fff; border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px;
        }
        .btn-custom { border-radius: 25px; font-weight: 600; padding: 8px 15px; }
        .btn-pink { background-color: #f06292; color: #fff; }
        .btn-pink:hover { background-color: #ec407a; }
        .btn-blue { background-color: #64b5f6; color: #fff; }
        .btn-blue:hover { background-color: #42a5f5; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h1 class="text-center"><i class="bi bi-person-plus-fill"></i> Cadastre-se na Galeria Feminina</h1>
                    <p class="text-center text-muted">Faça parte da nossa linda galeria de fotografias femininas 🌸</p>
                    <form action="{{ route('users.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="bi bi-person-fill"></i> Nome:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="bi bi-envelope-heart"></i> E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><i class="bi bi-shield-lock-fill"></i> Senha:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-pink btn-custom">
                                <i class="bi bi-check-circle-fill"></i> Entrar na Galeria
                            </button>
                            <a href="{{ route('users.index')}}" class="btn btn-blue btn-custom">
                                <i class="bi bi-people-fill"></i> Ver Participantes
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
