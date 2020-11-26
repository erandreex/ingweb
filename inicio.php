<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSU</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos_comunes.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> <!--Carrusel-->


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"> </script>

  <script>
        $(function(){
            $("#header").load("https://raw.githubusercontent.com/erandree/ingweb/master/componentes/header.html"); 
        });
        $(function(){
            $("#footer").load("https://raw.githubusercontent.com/erandree/ingweb/master/componentes/footer.html"); 
        });
</script>

</head>


<body class="fondo-uki">

    <header id="header"></header>
    <div id="menu_oculto"></div>

    <section class="seccion_central">

        <div class="menu_contenedores">
            <h1>Shonen</h1>
            <section class="carousel" data-flickity='{ "wrapAround": true, "pageDots": false}'>
                <div class="carousel-cell">
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://i.pinimg.com/originals/e5/b4/96/e5b496b1780283ba9ee1fb98c6933b5c.jpg" alt="menu_imagen1">
                        <br>
                        <b>Neon Genesis Evangelion</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BZjNmZDhkN2QtNDYyZC00YzJmLTg0ODUtN2FjNjhhMzE3ZmUxXkEyXkFqcGdeQXVyNjc2NjA5MTU@._V1_UY1200_CR85,0,630,1200_AL_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Hunter x Hunter</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://pics.filmaffinity.com/fullmetal_alchemist_brotherhood_tv_series-856216430-large.jpg" alt="menu_imagen1">
                        <br>
                        <b>FMA: Brotherhood</b>
                    </div>
                    
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BNGNlNjBkODEtZThlOC00YzUxLWI0MjMtMjk3YzJmMDFlNWZlXkEyXkFqcGdeQXVyNjI0MDg2NzE@._V1_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Cowboy Bebop</b>
                    </div>


                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://vignette.wikia.nocookie.net/samuraix/images/d/d2/Samurai_x.jpg/revision/latest/scale-to-width-down/340?cb=20121126183437&path-prefix=es" alt="menu_imagen1">
                        <br>
                        <b>Rurouni Kenshin</b>
                    </div>
                </div>

                <div class="carousel-cell">
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://i.pinimg.com/originals/e5/b4/96/e5b496b1780283ba9ee1fb98c6933b5c.jpg" alt="menu_imagen1">
                        <br>
                        <b>Neon Genesis Evangelion</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BZjNmZDhkN2QtNDYyZC00YzJmLTg0ODUtN2FjNjhhMzE3ZmUxXkEyXkFqcGdeQXVyNjc2NjA5MTU@._V1_UY1200_CR85,0,630,1200_AL_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Hunter x Hunter</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://pics.filmaffinity.com/fullmetal_alchemist_brotherhood_tv_series-856216430-large.jpg" alt="menu_imagen1">
                        <br>
                        <b>FMA: Brotherhood</b>
                    </div>
                    
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BNGNlNjBkODEtZThlOC00YzUxLWI0MjMtMjk3YzJmMDFlNWZlXkEyXkFqcGdeQXVyNjI0MDg2NzE@._V1_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Cowboy Bebop</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://vignette.wikia.nocookie.net/samuraix/images/d/d2/Samurai_x.jpg/revision/latest/scale-to-width-down/340?cb=20121126183437&path-prefix=es" alt="menu_imagen1">
                        <br>
                        <b>Rurouni Kenshin</b>
                    </div>
                </div>

                <div class="carousel-cell">
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://i.pinimg.com/originals/e5/b4/96/e5b496b1780283ba9ee1fb98c6933b5c.jpg" alt="menu_imagen1">
                        <br>
                        <b>Neon Genesis Evangelion</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BZjNmZDhkN2QtNDYyZC00YzJmLTg0ODUtN2FjNjhhMzE3ZmUxXkEyXkFqcGdeQXVyNjc2NjA5MTU@._V1_UY1200_CR85,0,630,1200_AL_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Hunter x Hunter</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://pics.filmaffinity.com/fullmetal_alchemist_brotherhood_tv_series-856216430-large.jpg" alt="menu_imagen1">
                        <br>
                        <b>FMA: Brotherhood</b>
                    </div>
                    
                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://m.media-amazon.com/images/M/MV5BNGNlNjBkODEtZThlOC00YzUxLWI0MjMtMjk3YzJmMDFlNWZlXkEyXkFqcGdeQXVyNjI0MDg2NzE@._V1_.jpg" alt="menu_imagen1">
                        <br>
                        <b>Cowboy Bebop</b>
                    </div>

                    <div class="cada_anime">
                        <img class="menu_imagen" src="https://vignette.wikia.nocookie.net/samuraix/images/d/d2/Samurai_x.jpg/revision/latest/scale-to-width-down/340?cb=20121126183437&path-prefix=es" alt="menu_imagen1">
                        <br>
                        <b>Rurouni Kenshin</b>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <footer id="footer"></footer>
</body>


</html>