<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homepage</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="./css/vapor.css">
<link rel="stylesheet" href="./css/app.css">
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container justify-content-end">
    <a class="navbar-brand" href="/">Game Link</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prova1">Prova1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prova2">Prova2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prova3">Prova3</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel immagini -->

<div class="container mt-5 pt-5 mb-5">
    <div class="row">
        <div class="col-12 ">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./media/Armored_core.avif" class="d-block w-100 " alt="./media/Armored_core.avif">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Armored Core 6</h5>
                        <p>Sta arrivando!!!.</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="./media/Baldurs_gate_3.jpg" class="d-block w-100 " alt="./media/Baldurs_gate_3.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Baldur's Gate 3</h5>
                        <p>L' avventura Gdr targata Larian uscirà su pc il 3 Agosto! </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./media/Final_Fantasy_XVI.jpg" class="d-block w-100 " alt="./media/Final_Fantasy_XVI.jpg">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Final Fantasy XVI</h5>
                    <p>Rinascita o morte del brand?la Community si infiamma</p>
                    </div>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Testo 1 -->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 mb-5">
            <h2 class="display-2 text-center">Game Link</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae soluta molestias perspiciatis quas tenetur corporis quaerat harum id cumque deserunt ipsum, quia necessitatibus adipisci natus quae maxime consequatur. Odio labore numquam voluptates laudantium nostrum nisi. Quibusdam velit facere ex eaque unde modi, molestiae ducimus doloremque sed repudiandae odio eligendi fugiat qui possimus quia laboriosam aperiam officiis reiciendis rem commodi reprehenderit voluptas corrupti! Explicabo nobis nostrum recusandae sequi maxime.</p>
        </div>
        <div class="col-12 mb-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio voluptatem quae, ipsum natus quos reprehenderit cupiditate harum! Perspiciatis ipsum eos magni ducimus provident voluptates eius, id neque assumenda excepturi.</p>
        </div>
        
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Final_Fantasy_XVI.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Final Fantasy 16</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova1" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Baldurs_gate_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Baldur's Gate 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova2" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Armored_core.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armored Core 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova3" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Final_Fantasy_XVI.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Final Fantasy 16</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova1" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Baldurs_gate_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Baldur's Gate 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova2" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./media/Armored_core.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armored Core 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/prova3" class="btn btn-primary">Vai All'articolo</a>
                    </div>
                </div>
            </div>

    </div>
</div>



<!-- Footer -->


<div class="container my-5">
    <div class="row div col-12 text-center">
        <p class=" display-2">Game Link</p>
        <p class="h2 mt-2">Siamo i Migliori</p>
        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident reiciendis iste in! Provident perferendis deserunt quo ducimus minus ratione nobis eaque? Rerum exercitationem voluptatum aliquam soluta fuga? Quisquam, voluptates eos?</p>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>