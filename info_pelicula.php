<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wicked</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }
        h1 {
            color: #ffffff;
            font-size: 3rem;
            margin-bottom: 0;
        }
        p.text-muted {
            color: #aaaaaa !important;
            font-size: 1.1rem;
        }
        /* Contenedor principal de video y poster */
        .media-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            justify-content: center;
        }
        /* Ajustar altura y anchura proporcional de poster y video */
        .poster-container, .video-container {
            height: 400px;
            width: 300px; /* Ancho fijo para el póster */
        }
        .video-container {
            width: 500px; /* Más ancho para el video */
        }
        .poster-container img, .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .sidebar {
            background-color: #2b2b2b;
            border-radius: 10px;
            padding: 20px 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            height: 190px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .sidebar i {
            font-size: 2.5rem;
            color: #ffc107;
        }
        .sidebar p {
            font-size: 1.1rem;
            color: #ffffff;
            margin: 10px 0 0;
        }
        .btn-custom {
            background-color: #ffc107;
            color: #000;
            font-weight: bold;
            border-radius: 20px;
        }
        .btn-custom:hover {
            background-color: #e0a800;
        }
        /* Ajuste para que los badges no se solapen */
        .badges-container {
            margin-top: 2.5rem; /* Margen superior */
            clear: both; /* Evita el solapamiento */
        }
        .badges-container .badge {
            margin: 0 5px 5px 0;
            padding: 8px 12px;
            font-size: 0.9rem;
            white-space: nowrap;
        }
        /* Estilos para la sección de reseñas */
#reviewForm {
    max-width: 600px; /* Ancho máximo para el formulario */
    margin: 0 auto; /* Centrar el formulario */
}

#reviewForm input, 
#reviewForm textarea, 
#reviewForm select {
    width: 100%; /* Ajustar el ancho al 100% del contenedor */
    margin-bottom: 1rem; /* Espacio entre los campos */
    border-radius: 8px; /* Bordes redondeados */
    padding: 10px; /* Espaciado interno */
    border: 1px solid #ced4da; /* Borde suave */
}

#reviewForm textarea {
    resize: none; /* Evita que se redimensione manualmente */
    height: 150px; /* Altura específica para el textarea */
}

#reviewForm button {
    width: 100%; /* Botón del mismo ancho */
    padding: 10px; /* Espaciado interno */
    border-radius: 8px; /* Bordes redondeados */
    font-weight: bold;
}

#reviewsContainer {
    max-width: 600px; /* Ancho máximo para las reseñas */
    margin: 0 auto; /* Centrar reseñas */
    padding: 10px;
    background-color: #2b2b2b; /* Fondo oscuro */
    color: #e0e0e0; /* Texto claro */
    border-radius: 10px;
}

    </style>
</head>
<body id="infoPeli">
    <div class="container mt-5">
        <!-- Encabezado -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="fw-bold" id="titulo">Wicked</h1>
                <p class="text-muted" id="detalles">Título original: Wicked: Part I &bull; 2024 &bull; 120 minutos</span></p>
            </div>
        </div>

        <!-- Contenedor Principal -->
        <div class="media-container">
            <!-- Poster -->
            <div class="poster-container">
                <img id="imgPelicula" src="img/poster-wicked.jpg" alt="Wicked Poster">
                <button class="btn btn-custom mt-3 px-4 py-2">Añadir a Mi lista</button>
            </div>

            <!-- Video -->
            <div class="video-container">
                <video controls>
                    <source src="media/trailer-wicked.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>

            <!-- Sidebar (Videos e Imágenes) -->
            <div class="d-flex flex-column justify-content-between">
                <div class="sidebar mb-3">
                    <i class="bi bi-camera-video"></i>
                    <p>27 VIDEOS</p>
                </div>
                <div class="sidebar">
                    <i class="bi bi-image"></i>
                    <p>99+ IMÁGENES</p>
                </div>
            </div>
        </div>

        <!-- Géneros y Descripción -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="badges-container">
                    <span class="badge bg-secondary">Fairy Tale</span>
                    <span class="badge bg-secondary">Pop Musical</span>
                    <span class="badge bg-secondary">Fantasy</span>
                    <span class="badge bg-secondary">Musical</span>
                    <span class="badge bg-secondary">Romance</span>
                </div>
                <p id="overview">
                    La historia de cómo una joven de piel verde es incriminada por el Mago de Oz y se convierte en la Malvada Bruja del Oeste. La primera de una adaptación cinematográfica en dos partes del musical de Broadway.
                </p>
                <p><strong>Dirección:</strong> <a href="#" class="text-info">Jon M. Chu</a></p>
                <p><strong>Guion:</strong> <a href="#" class="text-info">Winnie Holzman</a>, <a href="#" class="text-info">Dana Fox</a>, <a href="#" class="text-info">Gregory Maguire</a></p>
            </div>
        </div>
    </div>


     <!-- Sección de Reseñas -->
     <div class="row mt-5">
            <div class="col-12">
                <h3 style="text-align: center" class="fw-bold mb-3">Escribe una Reseña</h3>
                <form id="reviewForm" class="mb-4">
                    <div class="mb-3">
                        <label for="reviewName" class="form-label">Tu Nombre</label>
                        <input type="text" class="form-control" id="reviewName" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="reviewText" class="form-label">Tu Reseña</label>
                        <textarea class="form-control" id="reviewText" rows="4" placeholder="Escribe tu reseña aquí..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="reviewRating" class="form-label">Calificación</label>
                        <select class="form-select" id="reviewRating" required>
                            <option value="" disabled selected>Selecciona una calificación</option>
                            <option value="1">1 - Muy mala</option>
                            <option value="2">2 - Mala</option>
                            <option value="3">3 - Regular</option>
                            <option value="4">4 - Buena</option>
                            <option value="5">5 - Excelente</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Reseña</button>
                </form>
                
                <!-- Reseñas Publicadas -->
                <h4 style="text-align: center" class="fw-bold mb-3">Reseñas</h4>
                <div id="reviewsContainer">
                    <p id="noReviews" class="text-muted">Aún no hay reseñas. ¡Sé el primero en escribir una!</p>
                </div>
            </div>

        </div>
<br><br><br>
        <!-- Script para manejar reseñas -->
        <script>
            const reviewForm = document.getElementById('reviewForm');
            const reviewsContainer = document.getElementById('reviewsContainer');
            const noReviews = document.getElementById('noReviews');

            reviewForm.addEventListener('submit', function(event) {
                event.preventDefault();

                // Captura los valores del formulario
                const name = document.getElementById('reviewName').value;
                const text = document.getElementById('reviewText').value;
                const rating = document.getElementById('reviewRating').value;

                // Crea una reseña
                const reviewElement = document.createElement('div');
                reviewElement.classList.add('border', 'rounded', 'p-3', 'mb-3', 'bg-light', 'text-dark');
                reviewElement.innerHTML = `
                    <h5 class="mb-1">${name}</h5>
                    <p class="mb-1">${text}</p>
                    <p class="mb-0"><strong>Calificación:</strong> ${rating} / 5</p>
                `;

                // Elimina el mensaje de "no hay reseñas" si existe
                if (noReviews) {
                    noReviews.remove();
                }

                // Agrega la reseña al contenedor
                reviewsContainer.appendChild(reviewElement);

                // Limpia el formulario
                reviewForm.reset();
            });
        </script>

        <script src="js/script.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>