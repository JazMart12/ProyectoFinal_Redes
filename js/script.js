const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const NODE_URL = 'http://localhost:3000';

const main = document.getElementById('main');
const carrusel = document.getElementById('movieCarousel');
const carru1 = document.getElementById('carru1');
const carru2 = document.getElementById('carru2');
const carru3 = document.getElementById('carru3');

if (carrusel != null) {
    carrusel.onload = llenarCarrusel();
}
main.onload = mostrarPeliculas();


function buscarPelicula(nombre) {
    url = NODE_URL + "/fetch_movie/" + nombre;
    fetch(url)
    .then(res => res.json())
    .then(data => {
        const {title, poster_path, vote_average, overview} = data;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        movieEl.innerHTML = `
             <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">

            <div class="movie-info">
                <h3>${title}</h3>
                <span>${vote_average}</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                ${overview}
                <br/> 
            </div>
        
        `

        main.appendChild(movieEl);
    })
}

function mostrarPeliculas() {
    url = NODE_URL + "/get_movies";
    fetch(url)
    .then(res => res.json())
    .then(data => {
        data.movies.forEach(movie => {
            const {title, poster_path, vote_average, overview} = movie;
            const movieEl = document.createElement('div');
            movieEl.classList.add('movie');
            movieEl.innerHTML = `
                 <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">

            <div class="movie-info">
                <h3>${title}</h3>
                <span>${vote_average}</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                ${overview}
                <br/> 
            </div>
            
            `
    
            main.appendChild(movieEl);
        })
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