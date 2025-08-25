<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Laravel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">

    <style>
        body {
            background: linear-gradient(135deg, #f8bbd0, #bbdefb); /* Rosa -> Azul */
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .principal {
            background: #fff;
            border-radius: 25px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            padding: 50px;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            color: #e91e63;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 12px 20px;
            margin: 8px;
            width: 200px;
        }

        .btn-pink {
            background-color: #f06292;
            color: #fff;
        }
        .btn-pink:hover {
            background-color: #ec407a;
        }

        .btn-blue {
            background-color: #64b5f6;
            color: #fff;
        }
        .btn-blue:hover {
            background-color: #42a5f5;
        }
    </style>
</head>

<body>
    <div class="principal">
        <h1><i class="bi bi-layers-fill"></i> Cadastro Laravel</h1>
        
        <div class="d-flex flex-column align-items-center">
            <a href="{{ route('users.create')}}" class="btn btn-pink btn-custom">
                <i class="bi bi-person-plus-fill"></i> Novo Cadastro
            </a>
            <a href="{{ route('users.index') }}" class="btn btn-blue btn-custom">
                <i class="bi bi-people-fill"></i> Ver Usuários
            </a>
        </div>
    </div>
</body>
</html>
