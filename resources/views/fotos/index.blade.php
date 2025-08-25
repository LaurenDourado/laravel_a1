<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Galeria de Fotografias Feminina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f8bbd0, #bbdefb); font-family: 'Poppins', sans-serif; }
        h1 { color: #e91e63; font-weight: bold; text-align: center; margin: 30px 0; }
        .card { border-radius: 20px; overflow: hidden; box-shadow: 0 6px 12px rgba(0,0,0,0.1); }
        .btn-custom { border-radius: 25px; font-weight: 600; padding: 8px 15px; }
        .btn-pink { background-color: #f06292; color: #fff; }
        .btn-blue { background-color: #64b5f6; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="bi bi-flower1"></i> Galeria de Fotografias Feminina</h1>
        <p class="text-center text-muted">Um espaço delicado e especial para exibir nossas fotografias 💖📸</p>

        @if(session('success'))
            <div class="alert alert-success text-center">
                <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            </div>
        @endif

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card"><img src="https://picsum.photos/400/250?random=1" class="card-img-top"><div class="card-body text-center"><p>Fotografia 1</p></div></div>
            </div>
            <div class="col-md-4">
                <div class="card"><img src="https://picsum.photos/400/250?random=2" class="card-img-top"><div class="card-body text-center"><p>Fotografia 2</p></div></div>
            </div>
            <div class="col-md-4">
                <div class="card"><img src="https://picsum.photos/400/250?random=3" class="card-img-top"><div class="card-body text-center"><p>Fotografia 3</p></div></div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-blue btn-custom"><i class="bi bi-people-fill"></i> Ver Participantes</a>
            <a href="{{ route('users.create') }}" class="btn btn-pink btn-custom"><i class="bi bi-person-plus-fill"></i> Novo Cadastro</a>
        </div>
    </div>
</body>
</html>
