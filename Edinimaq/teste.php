<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel de Imagens Responsivo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .carousel-wrapper {
            overflow: hidden;
            width: 100vw; /* Largura total da viewport */
            position: relative;
        }
        .carousel-inner {
            display: flex;
            width: calc(100% * 2); /* Largura total do contêiner para animação */
            animation: scroll 15s linear infinite;
        }
        .carousel-item {
            flex: 0 0 auto;
            margin-right: 5px;
            width: 100px; /* Largura total da viewport para cada item */
        }
        .carousel-item img {
            width: 100%;
            height: auto; /* Ajusta a altura proporcionalmente */
            display: block;
            border-radius: 0.5rem;
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">

    <div class="carousel-wrapper">
        <div class="carousel-inner">
            <!-- Adicione suas imagens aqui -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 3">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 4">
            </div>
            <!-- Repetir imagens para o efeito de looping -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 3">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x1080" alt="Imagem 4">
            </div>
        </div>
    </div>

</body>
</html>
