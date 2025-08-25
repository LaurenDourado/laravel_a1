<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Participantes da Galeria Feminina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="p-4" style="background: linear-gradient(135deg, #f8bbd0, #bbdefb); font-family: 'Poppins', sans-serif;">
    <div class="container">
        <h1 class="text-center text-primary mb-4"><i class="bi bi-people-fill"></i> Participantes da Galeria Feminina</h1>
        <p class="text-center text-muted">Confira todas as pessoas que já fazem parte da nossa galeria 💕</p>
        <table class="table table-bordered table-striped bg-white rounded-4 shadow">
            <thead class="table-primary">
                <tr>
                    <th>ID</th><th>Nome</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('users.create') }}" class="btn btn-pink btn-lg"><i class="bi bi-person-plus-fill"></i> Novo Cadastro</a>
            <a href="{{ route('fotos.index') }}" class="btn btn-blue btn-lg"><i class="bi bi-image-fill"></i> Galeria de Fotos</a>
        </div>
    </div>
</body>
</html>
