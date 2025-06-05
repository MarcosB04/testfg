<?php
// includes/layout.php

function renderLayout(string $titulo, callable $contenidoCallback): void {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= htmlspecialchars($titulo) ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <?php include __DIR__ . '/../TFG/vistas/test.php'; ?>

        <main class="container-fluid p-0 m-0">
            <?php
            $contenidoCallback();
            ?>
        </main>

        <?php include __DIR__ . '/../TFG/vistas/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            
            const header = document.getElementById('cabecera');
            const originalStyle = header.getAttribute('style'); // Guarda el estilo original

            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                    header.removeAttribute('style'); // Quita el fondo original
                } else {
                    header.classList.remove('scrolled');
                    if (originalStyle) {
                        header.setAttribute('style', originalStyle); // Restaura el fondo original
                    }
                }
            });


            document.addEventListener("DOMContentLoaded", function () {
                const btnMenu = document.getElementById("btn-menu");
                const sidebar = document.getElementById("sidebar");
                const overlay = document.getElementById("overlay");
                const menuIcon = document.getElementById("menu-icon");


                function openMenu() {
                    sidebar.classList.add("open");
                    overlay.classList.add("active");
                    menuIcon.textContent = "✖";
                }

                function closeMenu() {
                    sidebar.classList.remove("open");
                    overlay.classList.remove("active");
                    menuIcon.textContent = "☰";
                }

                btnMenu.addEventListener("click", function () {
                    if (sidebar.classList.contains("open")) {
                    closeMenu();
                    } else {
                    openMenu();
                    }
                });

                overlay.addEventListener("click", closeMenu);

                
                
                
                
                const firstSlide = document.querySelector('.carousel-item.active');
                const caption = firstSlide?.querySelector('.carousel-caption');

                if (caption) {
                // Forzamos reflujo para reiniciar la animación (hack de transición CSS)
                caption.style.transition = 'none';
                caption.style.opacity = '0';
                caption.style.transform = 'translate(-50%, -50%) translateX(-50px)';
                
                // Retrasamos un frame para aplicar animación
                requestAnimationFrame(() => {
                    caption.style.transition = 'opacity 1.4s ease, transform 1.4s ease';
                    caption.style.opacity = '1';
                    caption.style.transform = 'translate(-50%, -50%) translateX(0)';
                });
                }
            });


            


        </script>
    </body>
    </html>
    <?php
}
