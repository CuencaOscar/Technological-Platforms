<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plataformas Tecnológicas</title>
  <!-- Agregar los enlaces a los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" sizes="128x128" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIEAAACBCAYAAAGQp+nGAAAACXBIWXMAAAsSAAALEgHS3X78AAALK0lEQVR4nO2dT4wVRR7HawZQwug8xPBuusN1XZW9eFkShquQyGZfSBaSdfCmS7KQmA1eHPCCEhMxUfDmYKLJmndwEzg7RPbiHhZ2F68OeNo3UaYJEFnA2Xzbrt561VXdVf2vql/9Psno471+9ap//euqX//qV7/f1Pr6OuOMBr0TzJD+MEqPjRsZDXrrpl+W6Q+jqemyXxaZtjkFFaNBb7menhQd0B9G1RsZDXp2jfBfnTnwRvpa/r+qdxvlVk26n9sTsesmp6HtiQqcXl4vp/7zu1noyaJJY488s4v999pl+e1LVnqiaCCmFmXz5waUx5Nlix7M6xoxuqNrG5AgC+hHaWGyOi5rsw3gvii6gyvLgKEB/HH469t/ObUuIx+Hv/QU5PHhzuenjDqQkYHtqDXWwPrdW8rePFj5t7bxSVckowZwR5X9cnw38vFgNOgdZYztN/zuMh8T5AFljTFmPuOUJ+oPo63825UH6arwgW0nY+wfrjrBGNszbXENm+JELdNdVYyMGR3ieGNjQckoO6FrvOhHy35PeTmi04fS15v3HDJqqArKTtz7+kL6evaPZ8c++/61Z2vtAMsbb3XifDi6YdTw1Iy5tHLvDlns8r8frn6XvoYlLn6+/fwNI+uDmdwdedf/+1d/ZXW8Di/GCXTC2JRuiDN+TGDSVN5aZ0QjZqwTQmfwBDOf+aAaMGIyl96JFDISGA16LmyJX/eH0RV+W7owZOLfrP54VBHnAxN1gDpQ2oCty4xzLgHn40Cua3b15afZ+p0o8z5ErroEpu+JZC6BbO81jZ+3oWgFg23v/i193cqDi2gBzx45xzbOZS3iRjsgsnn+YPqve3+/2F4Hbi+9kXkveueg8thGOnD3wlndRzHcrcg0LkTTpyXju0B8qgarf3gqcwz3adrQyEiIxReWs34iUsmbosPkhzlkD1AH3Hegiru9KuJC4kkHv38e/xHXC9p8QI0fTFmOf6ARF464cspRdkDoyBxj7EpLiyBNgRlxZ38YrejazwjBkb+iTVIV5Djzl7lG5a2C2n8bigAE9sCHyIflEAUAvmR1BIh1HZy/F0sajpkPXgjMl8Ut1zTy2FiE7om+bs+QKcFrAnOlCXc+f9vFz2oxEgJ3y8jovCW64x+u3ojjF+5f+6rW37Ttn4yZEF7Yx7bsfTXz/o/Ln7FbH2Tf33pS7ffk93zR56bHlDlWhdGYcPvj48r3RYcvx7dBzwTjgVF3Ets/+f86wMY5dbyQ7JL1DavZQRUUNbVlNo0/2vZu9h7EYokYaNV5IWBQwzggg/WwLfteU35HFbLkG9Z2gmogBI8tZGO4fR4HREoZSyYnV8YWwKDK97sUHYMgyifeulhq945MaYuxaLDLi+5fW9xb2H5eUObMgeNxEOemX6rtA1tKCwGDnW6RrUhTYMTgmDxtwfiDY+5ePJfbFlYff3h9V3ysvGJtitVuqgnFbjfYpBL8UyQjIfxM8EJA6K7ziGnXiMvBhwOVQbwMLi5Jh7YKpV8WHw16Zxhjf3LVsxY43x9GC+LPFC3NT4oh9X5/GB3VfZgrBJFkyR5/cw10sk4Qh7Ci2qyhokgLJuG2sNeAZH/ve033rGVOirkJtAIYDXpQoV9M2MlzxvZCA1ebsl0yJgQxvcFyACcPeqNBL41PCjksZ2wTW4ghOekmOtwPNz3okAt2QAOWwjvvlCXn26dcE7yjhATgQR+cQgLwoA9OIQF40AenBC+A1mMPESKnihDDqrJpgr06CV4DSAAe9MEprY8BCL9VRZGYhOM2QfBPg4UagAjSaUUiNx5IrSIvGBpBmZsUUalie7pjfroTsQcr/8q8XyX4ulAAOHmbwGaEvMlp+1gS+ITMBzixomlQd8z9by6zm29mI9KqBF4XDoI2CQnA44fVUWI333zRqp22MJoFdKFzqgBrxB6r28iqrg8YCeDmovrqzR75aPzkNUkfyyT4aAsjAfCsRjJylhut+msE2BkBsGSnSRGqjRgsR4A+YCwAXXS5LsTeRnAuqWwK8/B6njZXRie4Tgrg1of6q627/33HSgA/fvmp8n1Mh6rpL09gvmB9C4iJtDjydMjRCazTAlBZdKqkbypB+Yi1AEwtOlvT1yRztmpHiU3GbRWlZgGT7Hq2pi92ufI9Qz/l2A3IcYinP15eqGr2x1IOEUxteT+cZ/qaPFzlCQ+3m+7prwylNKDIsvPZ9JUpbQjlbXwqEhCyphZhckwdlBaAbmN20Y4wlggIzoq8mQLHmAgBpjbaKru5szM+Qdk1Z+uo0bZbSyst0JRDJfh1ARKAB31wCgnAgz44hQTgQR+cQgLwoA9OgQCuBnz+1yGABYMDJ5WjQe8oD303+TH8R9xJHsKWuRSe0DnIjNZiNmu5oLuzZP9tIZ+jqqzz1IROjddVF1hpCPWHEbbJP5Gkxu86OIcd/WGk3PZvlD8gKci4P8kf0AWwAXzJJIeAcQKFAgHtTypW4u/5jgipy1xNCrmiqucXVc/DWglGgx522yK5xMsTKNyug+I1J/IqmqgwHQpx4aFxu0OXcoe4hOmrP4zWirpclE5mZzLsBPOwMIHAIJqXy/uI6FLqbE0MC7r4k4O2+JWqGOuJJMMGKcBkgev5bZIsbAzZRbJEBl8QXBJrAYrppUgBwmG3WGgyVoLRoLdAChAcu5N0iulIkJkniCCI82kijHKel0EkguTYdOLqJcJlLvgwGoLtJCUgKKCOICUIHkZKQDBSAoJ1abdhFXS5L3W4yonpChoJCFICgpQgeBgpAcFCMQx5aW1CDY0ERD0jweyRc9rUpCqQteuH139jfDxyr9mmH4tOH4oL87MaHxFt29HllFbBU7KZUufIVstIgFRtD1e/Mz4e6dV0GU1V2Cb/RK4qrgBEMbVNB2uWKelMLyxyctmMMlBG31Pj+kZtSoB6AzaZaZHZFpkmi9AlgdVhq4xEzYYhsvOapDHlzBw4nptrFVOGKhGuDiihrpgGoaf2p4PonYNW2YrzpgUbWwDK14UU0T7SyCOiTcZmzPeqOiCYKnS1QGSgdFA+ohyNKAHyi95eKp7vOY+/Mn7HY4rAVGGKrxVyukJjzqK7F87Gz8kmIC/7oy/sS4+0mQbwTO9rlaCu0KjHcM1iiH4sufA2j4RwOoW07t8UjSoBEpHDc2fChu1PxbWB5Kkhjy6ly/eZxtcO4LkzyW7PkvpIqpIdKqBcPlfL6hKtLCCh9EGdBe664hae2rLVg14U09oqYnT697W004ZbGNOSaKiWBY4uLK7pwFMQfuvJc24rQLYWT8DdyqoqsDaUcQujjK4N8E/0/vyz40lcUSxTSwRGrs3ahwtajSeAR69K4ceybmF8x8adnYeN/6MrtB5UYrvszIHyVHELw6No6rfIA/4PU0O3KziJLLId0uEWrsMOQIAHamdVNVJh6NbRjgyUdG1xb+t1Qp3EGGJ4xrDKS+YWUadbGI+VYlQTDMBNz+xim3Y8yzbOPZeuV0DxHqz8U2tPiO1s6D8dt7N53mzVE8qDtu99fVH9lHPtMrt/7Su2Ybu62NvUTL1PHchUgpR1i7W2SnSJSxRoSlC0MUFKEDyMlIBgpAQEIyUgGCkBwUgJCDhwp5PiFkS4XAm6KioRs4NPB++TPILkPMrhiNVxr1BNw6C4zquFpoZhUhL1euiSCYRIrPSaqYaWlEWh+oeTy9Xkhk9RVYpG/YPfhi6pCeWwrADMoDgmFceaDGAALujOxLRM7kJSJ4lSgHWLY/1hVFjfqkzBbEQiHSWF8JIouVnPmNRI5lQunZ+MEiid/1JHBddl/poUMv/C5qKPwRj7H6JGCTj8gL6rAAAAAElFTkSuQmCC">
  <style>
    /* Agregar estilos personalizados si es necesario */
    body {
      background-color: #f5f5f5;
    }

    header {
      background-image: url('./image/header-image.jpg');
      background-size: cover;
      background-position: center;
      padding: 30px;
      text-align: center;
      color: #ffffff;
    }

    header h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .card {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-title {
      text-align: center;
    }

    a, a:hover {
      color: black;
      text-decoration: none;
    }
    
    .card-img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .card-body {
      padding: 20px;
    }

    .card-text {
      margin-bottom: 20px;
    }

    /* Establecer el mismo tamaño para todas las tarjetas */
    .card-height {
      height: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Technological Platforms</h1>
  </header>

  <section class="container mt-5">
    <div class="row">
      <div class="col-md-4 mb-4">
          <a href="/Platforms" class="card-link">
        <article class="card card-height">
            <img src="./image/platforms-image.webp" alt="Platforms" class="card-img">
            <div class="card-body">
              <h5 class="card-title">Platforms</h5>
              <p class="card-text">Explore, manage, and customize technological platforms according to your needs. Add new tools, update configurations, and maintain complete control over your digital services.</p>
            </div>
        </article>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="/Directors" class="card-link">
        <article class="card card-height">
            <img src="./image/directors-image.jpg" alt="Directors" class="card-img">
            <div class="card-body">
              <h5 class="card-title">Directors</h5>
              <p class="card-text">Manage and collaborate with talented film and television directors. Create profiles, review their history, assign projects, and keep track of their works and artistic contributions.</p>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="/Actors" class="card-link">
        <article class="card card-height">
            <img src="./image/actors-image.webp" alt="Actors" class="card-img">
            <div class="card-body">
              <h5 class="card-title">Actors</h5>
              <p class="card-text">Discover and manage a wide variety of actors for your productions. Create actor profiles, update their information, assign roles, and maintain an updated record of their availability and skills.</p>
            </div>
          </article>
        </a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <a href="/Languages" class="card-link">
            <article class="card card-height">
            <img src="./image/languages-image.jpg" alt="Languages" class="card-img">
            <div class="card-body">
              <h5 class="card-title">Languages</h5>
              <p class="card-text">Manage the available languages for your content. Add, edit, and delete languages, set regional settings, and ensure that your content is accessible and localized for audiences from different cultures.</p>
            </div>
          </article>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="/Series" class="card-link">
        <article class="card card-height">
            <img src="./image/series-image.jpg" alt="Series" class="card-img">
            <div class="card-body">
              <h5 class="card-title">Series</h5>
              <p class="card-text">Organize and manage your series efficiently. Create and update series profiles, add episodes, establish seasons, and maintain a detailed tracking of the structure and content of each series.</p>
            </div>
          </article>
        </a>
      </div>
    </div>
  </section>

  <!-- Agregar los enlaces a los scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
