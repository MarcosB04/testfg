<header>
  <section id="cabecera" class="container-fluid">
    <div class="row align-items-center justify-content-between">

      <!-- Botón Hamburguesa -->
      <div class="col-auto">
        <button id="btn-menu" class="btn toggle-menu" aria-label="Toggle menu">
          <span id="menu-icon" class="icon">☰</span>
        </button>
      </div>

      <!-- Título centrado -->
      <div class="col text-center">
        <a href="index.php" class="text-decoration-none">
          <h1 class="mb-0">BellaVista</h1>
        </a>
      </div>

      <!-- Enlaces y botón -->
      <div class="col-auto d-flex align-items-center">
        <nav class="navbar navbar-expand p-0">
          <ul class="navbar-nav flex-row">
            <li class="nav-item mx-2">
              <a class="nav-link p-0" href="index.php">Inicio</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link p-0" href="index.php">Ofertas</a>
            </li>
          </ul>
        </nav>
        <button class="btn btn-default ms-3" type="submit">Reservar</button>
      </div>

    </div>
  </section>

  <!-- Sidebar y overlay -->
  <div id="sidebar" class="sidebar">
    <ul class="list-unstyled">
      <li><a href="index.php" class="d-block py-2">INICIO</a></li>
      <li><a href="nuevaHabitacion.php" class="d-block py-2">HABITACIONES</a></li>
      <li><a href="procesar_login.php" class="d-block py-2">SERVICIOS</a></li>
      <li><a href="procesar_registro.php" class="d-block py-2">ZONAS COMUNES</a></li>
      <li><a href="procesar_registro.php" class="d-block py-2">GALERÍA</a></li>
      <li><a href="procesar_registro.php" class="d-block py-2">EVENTOS</a></li>
      <li><a href="procesar_registro.php" class="d-block py-2">RESERVAS</a></li>
      <li><a href="procesar_registro.php" class="d-block py-2">MI RESERVA</a></li>
    </ul>
  </div>
  <div id="overlay" class="overlay"></div>
</header>
    
<style>

        .carousel-fullscreen {
            height: 100vh; 
            overflow: hidden;
        }

        .carousel-fullscreen .carousel-item img {
            height: 100vh;         /* Imagen tan alta como el contenedor */
            object-fit: cover;     /* Rellena sin deformar */
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1.5rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            opacity: 0;
            transform: translate(-50%, -50%) translateX(-50px); /* añadido a la transformación centrada */
            transition: opacity 1.4s ease, transform 1.4s ease;
        }
 
        .carousel-caption h5 {
            font-size: 2rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1.25rem;
        }
        .carousel-indicators button {
            background-color: rgba(255, 255, 255, 0.5);
        }
        .carousel-indicators .active {
            background-color: #fff;
        }

        /* === Zoom animado a la imagen del slide activo === */
        .carousel-item img {
            transition: transform 8s ease;
            transform: scale(1);
        }

        .carousel-item.active img {
            transform: scale(1.1);
        }

        .carousel-item.active .carousel-caption {
            opacity: 1;
            transform: translate(-50%, -50%) translateX(0); /* completamente centrado al mostrarse */

        }

        /* Animación escalonada para títulos y párrafos dentro del caption */
        .carousel-caption h5 {
            transition: all 1.4s ease 0.4s;
        }

        .carousel-caption p {
            transition: all 1.4s ease 0.6s;
        }


    /* Efecto hover en enlaces */
    .link-hover {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .link-hover:hover {
        color: #ffd700 !important;
        transform: scale(1.05);
        text-shadow: 0 0 3px rgba(255, 255, 255, 0.5);
    }

    /* Estilos del header */
    #cabecera {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1rem 0;
        background-color: rgba(255, 2, 2, 0);
        transition: background-color 0.5s ease, padding 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    #cabecera.scrolled {
        background-color: rgba(255, 255, 255, 0.83);
    }

    /* Enlaces de navegación */
    #cabecera nav .nav-link {
        color: white;
        transition: color 0.3s ease;
    }

    #cabecera nav .nav-link:hover {
        color: #3494E6;
    }

    #cabecera.scrolled nav .nav-link {
        color: black;
    }

    #cabecera.scrolled nav .nav-link:hover {
        color: #EC6EAD;
        text-shadow: 0 1px 15px rgb(0, 0, 0);
    }

    #cabecera.scrolled > #btn-menu span {
        color: black;
    }

    #cabecera.scrolled h1 {
        color: black;
        text-shadow: none;
    }

    #cabecera.scrolled .icon {
        color: black;

    }

    #container {
        position: relative;
        z-index: 1101;
    }

    #container h1 {
        color: white;
        transition: color 0.3s ease;
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        left: -520px;
        width: 520px;
        height: 100%;
        background: rgba(74, 74, 74, 0.5);
        backdrop-filter: blur(8px);
        transition: left 0.4s ease;
        z-index: 1050;
        overflow-y: auto;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
        padding-top: 6rem;
        padding-left: 2rem;
    }

    .sidebar.open {
        left: 0;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin: 1rem 0;
    }

    .sidebar li a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        transition: color 0.3s ease, background-color 0.3s ease;
        display: block;
        padding: 0.5rem 1rem;
        border-radius: 0.3rem;
    }

    .sidebar a:hover {
        color: #EC6EAD;
        background-color: rgba(219, 219, 219, 0.5);
    }

    .sidebar a.active {
        color: #3494E6;
        font-weight: bold;
    }

    /* Overlay */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
        z-index: 1040;
    }

    .overlay.active {
        display: block;
    }

    .menu-icon {
        border: none;
        color: white;
        border-radius: 0.3rem;
        margin-left: 1rem;
        position: fixed;
        top: 0.5rem;
        left: 1rem;
        z-index: 1600;
        background: none;
        cursor: pointer;
    }

    </style>
</header>



