<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8bbd0, #bbdefb); /* Rosa -> Azul */
      font-family: 'Poppins', sans-serif;
    }

    h1 {
      color: #e91e63;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    .card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .btn-custom {
      border-radius: 25px;
      font-weight: 600;
      padding: 8px 15px;
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
  <div class="container mt-5">
    <h1><i class="bi bi-pencil-square"></i> Editar Usuário</h1>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">

          @if ($errors->any())
            <div class="alert alert-danger">
              <i class="bi bi-exclamation-triangle-fill"></i> 
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="name" class="form-label"><i class="bi bi-person-fill"></i> Nome:</label>
              <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required />
            </div>

            <div class="mb-3">
              <label for="email" class="form-label"><i class="bi bi-envelope-heart"></i> E-mail:</label>
              <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required />
            </div>

            <div class="mb-3">
              <label for="password" class="form-label"><i class="bi bi-shield-lock-fill"></i> Senha (deixe em branco para não alterar):</label>
              <input type="password" id="password" name="password" class="form-control" />
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-pink btn-custom">
                <i class="bi bi-check-circle-fill"></i> Salvar Alterações
              </button>
              <a href="{{ route('users.index') }}" class="btn btn-blue btn-custom">
                <i class="bi bi-arrow-left-circle"></i> Voltar
              </a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
