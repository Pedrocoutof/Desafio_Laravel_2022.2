<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ $title }}</title>
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/produtos">Bombons da Lu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/users/">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produtos/">Produtos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/estoque/">Estoque</a>
            </li>
        </ul>
    </div>
</nav>
        <nav class="navbar navbar-light bg-white border-top navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div> <!-- container end.// -->
        </nav> <!-- navbar end.// -->
    </header>



{{ $slot }}

<footer>
    <hr>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">
                    <h5>Seções</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Meu perfil</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Quem somos</a></li>
                    </ul>
                </div>


                <div class="col-2">
                    <h5>Contatos</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Whatsapp</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-3">
                    <form>
                        <h5>Inscreva-se para receber novidades primeiro!</h5>
                        <p>Seja notificado quando chegar novas gostosuras.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">email@email.com</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="email">
                            <button class="btn btn-primary" type="button">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>
</footer>

</div>

</body>
</html>
