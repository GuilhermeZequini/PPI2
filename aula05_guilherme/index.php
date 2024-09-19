<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>fruta e fruto</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand freeman-regular" href="#">Fruto & fruto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                receitas
              </a>
              <ul class="dropdown-menu">

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "frutoefruta";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM tipo_receita";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {

                    echo"
                    <li><a class='dropdown-item' href='#'>".$row["descricao"]."</a></li>";

                    

                  }
                } else {
                  echo "0 results";
                }
                ?>

               
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>

          </ul>
          <form class="d-flex" role="">
            <input class="form-control me-2" type="search[]" placeholder="buscar receita" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <section id="main-carrosel">
      <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="img/carrossel-img1.jpg" class="d-block w-100 carrosel-item-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="freeman-regular">Reaproveite melhor os alimentos!</h2>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carrossel-img2.jpg" class="d-block w-100 carrosel-item-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="freeman-regular">Economize e ganhe em saúde!</h2>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>



    <section class="freeman-regular">
      <h2>Receitas para economizar e ganhar saúde</h2>
      <h4>Nossas receitas ajudam você a aproveitar melhor os alimentos, economizar, ganhar tempo e praticidade</h2>

    </section>

    <section id="main-receitas">

      <!--<div class="card">
        <img src="img/receita-abacate.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tigela de abacate</h5>
          <p class="card-text">Receita refrescante e cheia de vitaminas para o seu café da manhã!</p>
          <a href="#" class="btn btn-primary">Ver receita</a>
        </div>
      </div> -->

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "frutoefruta";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM receita";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

          echo " <div class='card'>
        <img src='img/" . $row["idreceita"] . ".jpg' class='card-img-top' alt='" . $row["idreceita"] . "'>
        <div class='card-body'>
          <h5 class='card-title'>" . $row["nomereceita"] . "</h5>
          <p class='card-text'>" . $row["descricao"] . "</p>
          <a href='#' class='btn btn-primary'>Ver receita</a>
        </div>
      </div>";

        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>




    </section>
  </main>


  <footer>
    <p class="freeman-regular">contato:<a href="mailto:email@frutafruto.com.br">email@frutafruto.com.br</a></p>
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>