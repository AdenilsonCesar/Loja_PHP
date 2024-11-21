<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja PHP - Bem-Vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff; 
        }

        .navbar-brand img {
            width: 120px; 
        }

        .hero-section {
    background-image: url('imgni.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh; 
    color: white;
    text-align: center;
    position: relative;
    display: flex; 
    justify-content: center; 
    align-items: center; }

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
}


        .hero-section h1 {
            font-size: 3em;
        }

        .features {
            padding: 50px 0;
        }

        .features .feature {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="#">
                <img src="imag\logo.png" alt="Logo Loja PHP">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="view/Login.php" class="nav-link">Entrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
    <div class="overlay"></div>
    <div class="container position-relative">
        <h1>Bem-Vindo à Loja PHP</h1>
        <p class="lead">A melhor loja para todos os seus produtos PHP!</p>
        <a href="view/Login.php" class="btn btn-primary btn-lg">Comece agora</a>
    </div>
</section>





    <section class="features container text-center">
        <div class="row">
            <div class="col-md-4 feature">
                <img src="imag\facildeus.png" class="rounded-circle" alt="Feature 1">
                <h3></h3>
                <p>Navegação intuitiva e fácil de usar.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="imag\Mix-de-produto.png" class="rounded-circle" alt="Feature 2">
                <h3>Produtos variados</h3>
                <p>Uma ampla gama de produtos para todas as suas necessidades.</p>
            </div>
            <div class="col-md-4 feature">
                <img src="imag\seg.png" class="rounded-circle" alt="Feature 3">
                <h3>Segurança</h3>
                <p>Seus dados e transações são seguros conosco.</p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+SO3+7p1Hg00v3p8fDNRcSvA8Htv/" crossorigin="anonymous"></script>
</body>

</html>
