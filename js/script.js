const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const NODE_URL = 'http://localhost:3000';

const main = document.getElementById('main');
const carrusel = document.getElementById('movieCarousel');
const carru1 = document.getElementById('carru1');
const carru2 = document.getElementById('carru2');
const carru3 = document.getElementById('carru3');
const infoPeli = document.getElementById('infoPeli');
const btnLista = document.getElementById('btnLista');
const mainLista = document.getElementById('mainLista');

if (infoPeli != null) {
    infoPeli.onload = getDetalles();
}
if (carrusel != null) {
    carrusel.onload = llenarCarrusel();
}
if (main != null) {
    main.onload = mostrarPeliculas();
}
if (mainLista != null) {
    mainLista.onload = getLista();
}


function buscarPelicula(nombre) {
    url = NODE_URL + "/fetch_movie/" + encodeURIComponent(nombre);
    fetch(url)
    .then(res => res.json())
    .then(data => {
        const {title, poster_path, vote_average, overview, id} = data;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        movieEl.innerHTML = `
                 <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">

            <div class="movie-info">
                <h3>${title}</h3>
                <span style="font-weight: bold; color: orange; font-size: larger;">${vote_average}</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                ${overview}
                <br/> 
                <button class="know-more" id="${id}">Know More</button>
            </div>
            
            `
    
            mainLista.appendChild(movieEl);

            document.getElementById(id).addEventListener('click', () => {
                console.log(id)
                localStorage.setItem('id',id)
                window.location.href = './info_pelicula.php';
              })
    })
}

function mostrarPeliculas() {
    url = NODE_URL + "/get_movies";
    fetch(url)
    .then(res => res.json())
    .then(data => {
        data.movies.forEach(movie => {
            const {title, poster_path, vote_average, overview, id} = movie;
            const movieEl = document.createElement('div');
            movieEl.classList.add('movie');
            movieEl.innerHTML = `
                 <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">

            <div class="movie-info">
                <h3>${title}</h3>
                <span style="font-weight: bold; color: orange; font-size: larger;">${vote_average}</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                ${overview}
                <br/> 
                <button class="know-more" id="${id}">Know More</button>
            </div>
            
            `
    
            main.appendChild(movieEl);

            document.getElementById(id).addEventListener('click', () => {
                console.log(id)
                localStorage.setItem('id',id)
                window.location.href = './info_pelicula.php';
              })
        })
    })
}

function getDetalles() {
    let id = localStorage.getItem('id');
    url = NODE_URL + "/get_details/" + id;
    fetch(url)
    .then(res => res.json())
    .then(data => {
        const {title, original_title, release_date, runtime, overview, poster_path, vote_average } = data;

        localStorage.setItem('nombre',encodeURIComponent(title));

        const titulo = document.getElementById('titulo');
        const detalles = document.getElementById('detalles');
        const imgPelicula = document.getElementById('imgPelicula');
        const descripcion = document.getElementById('overview');
        const fecha = document.getElementById('id');
        const duracion = document.getElementById('duracion');

        titulo.innerHTML = title;
        detalles.innerHTML = `<span style="font-weight: bold; color: orange; font-size: xx-large;">${vote_average}</span> <br>Titulo Original: ${original_title} &bull; ${release_date} &bull; ${runtime} minutos`;
        imgPelicula.src = poster_path ? IMG_URL + poster_path : "http://via.placeholder.com/1080x1580";
        descripcion.innerHTML = overview;
        fecha.innerHTML = release_date;
        duracion.innerHTML = runtime;


    })
}

function aniadirLista() {
    let pelicula = localStorage.getItem('nombre');
    let usuario = getCookie('usuario');
    url = NODE_URL + "/aniadeLista/" + pelicula + "/" + usuario;
    fetch(url)
    .then(res =>{
        console.log(res);
    })

}

function getLista(){
    let usuario = getCookie('usuario');
    url = NODE_URL + "/leerLista/" + usuario;
    fetch(url)
    .then(res => res.json())
    .then(data =>{
        data.forEach(movie => {
            buscarPelicula(movie);
        });
    })
}

function llenarCarrusel(){
    console.log('Funcion llamada');
    let i=1;
    url = NODE_URL + "/get_movies";
    fetch(url)
    .then(res => res.json())
    .then(data => {
        data.movies.forEach(movie => {
            const {title, poster_path, vote_average, overview} = movie;

            const imgCarru = document.createElement('img');

            imgCarru.src = poster_path ? IMG_URL + poster_path : "http://via.placeholder.com/1080x1580";
            imgCarru.alt = title;
            imgCarru.style = "height: 450px"
    
            if (i<=4) {
                carru1.appendChild(imgCarru);
                console.log('Imagen anadida');
            }else if (i<=8) {
                carru2.appendChild(imgCarru);
                console.log('Imagen anadida');
            }else if (i<=12) {
                carru3.appendChild(imgCarru);
                console.log('Imagen anadida');
            }else{
                console.log('Termino de llenarse el carrusel');
                return;
            }

            i++;
        })
    })
}

function login(user, pass) {
    url = NODE_URL + "/login/" + user + "/" + pass;
    fetch(url)
    .then(res => {
        return res;
    })
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }