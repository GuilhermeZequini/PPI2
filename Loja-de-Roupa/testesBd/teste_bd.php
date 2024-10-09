<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Nome da Loja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Loja</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>


    <main>
        <?php

        $h1 = "<h1>Relô o olho!</h1>";
        #$h1 = 2;
        echo $h1;
        ?>

        <h2>Cadastro de teste</h2>

        <form action="cadastrarTeste.php" method="post">
            <p>
                <input type="text" name="descricao" placeholder="Descrição do teste...">
            </p>
            <p>
                <input type="submit" value="Cadastrar">
            </p>
        </form>
    </main>



</body>

</html>