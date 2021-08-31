<html>

<head>
    
    <title>Matilha Felix</title>
    
    <link rel="icon" 
      type="image/png" 
      href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicoin.png'; ?>"
    >
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

</head>

<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light roxo-menu">
        <div class="container-fluid">
            
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav"
                 aria-expanded="false" 
                 aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="menu-link active" aria-current="page" href="/" >
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="menu-link" href="<?= get_permalink( get_page_by_path( PagesEnum::SERVICES  )->ID )  ?>">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="menu-link" href="<?= get_permalink( get_page_by_path( PagesEnum::PICTURES )->ID )  ?>">
                            Fotos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="menu-link" href="#">
                            Vídeos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="menu-link" href="<?= get_permalink( get_page_by_path( PagesEnum::WAY_TO_PET )->ID ) ?>">
                            Como Chegar
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

</header>