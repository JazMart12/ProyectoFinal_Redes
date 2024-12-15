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
    <link rel="stylesheet" href="peliInfoStyles.css">
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
        .poster-container {
            width: 100%;
            max-width: 350px;
            height: 525px;
            margin: 0 auto;
        }
        .poster-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .video-container {
            width: 100%;
            max-width: 650px;
            aspect-ratio: 16 / 9;
            margin: 0 auto;
        }
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .sidebar {
            background-color: #2b2b2b;
            border-radius: 10px;
            padding: 20px 15px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Encabezado -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="fw-bold">Wicked</h1>
                <p class="text-muted">Título original: Wicked: Part I &bull; 2024 &bull; A &bull; 2h 40min</p>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="row g-4 align-items-start">
            <!-- Poster -->
            <div class="col-md-4 text-center">
                <div class="poster-container">
                    <img src="img/poster-wicked.jpg" alt="Wicked Poster">
                </div>
                <button class="btn btn-custom mt-3 px-4 py-2">Añadir a Mi lista</button>
            </div>

            <!-- Video -->
            <div class="col-md-6">
                <div class="video-container">
                    <video controls>
                        <source src="media/trailer-wicked.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-2">
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
                <div class="mb-3">
                    <span class="badge bg-secondary">Fairy Tale</span>
                    <span class="badge bg-secondary">Pop Musical</span>
                    <span class="badge bg-secondary">Fantasy</span>
                    <span class="badge bg-secondary">Musical</span>
                    <span class="badge bg-secondary">Romance</span>
                </div>
                <p>
                    La historia de cómo una joven de piel verde es incriminada por el Mago de Oz y se convierte en la Malvada Bruja del Oeste. La primera de una adaptación cinematográfica en dos partes del musical de Broadway.
                </p>
                <p><strong>Dirección:</strong> <a href="#" class="text-info">Jon M. Chu</a></p>
                <p><strong>Guion:</strong> <a href="#" class="text-info">Winnie Holzman</a>, <a href="#" class="text-info">Dana Fox</a>, <a href="#" class="text-info">Gregory Maguire</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
