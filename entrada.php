<?php
    require 'includes/funciones.php';
    addTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" loading="lazy" alt="Imagen de la propiedad">
        </picture> <!-- .picture -->
        <p class="informacion-meta">Escrito el <span>21/05/2021</span> por <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, eligendi provident praesentium doloribus quas similique blanditiis sed placeat accusantium atque perspiciatis debitis officiis ratione ab beatae et corporis, quidem porro facere pariatur odit qui minus. Numquam, quae iusto libero soluta aliquid illo consectetur nisi aliquam nesciunt! Aliquid odit eos explicabo, atque esse recusandae iure labore temporibus cumque quae quo. Quaerat ipsam dolorum voluptas magnam a aliquid ratione maiores eius! Ab nostrum, quaerat hic, quam voluptatibus, unde officia, numquam voluptatem veritatis est error quia. Enim beatae tenetur porro vero officia ratione optio facilis assumenda minus, deleniti eius ipsum dolorem necessitatibus vitae.</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Sit debitis tempora, quidem at officiis sapiente fuga explicabo placeat pariatur, sint quasi et iure maxime, sed ipsum. Iusto est ex et quisquam provident at laborum laboriosam nostrum dolores mollitia. Fuga odio tempore alias tenetur explicabo, ipsa, voluptatibus tempora nam id nulla illum libero sapiente voluptatem labore. Nam molestiae adipisci provident, nulla repudiandae a consectetur nihil ex, eaque non, fuga ab. Repellendus.</p>
        </div>
    </main>

    <!-- Footer aqui -->
    <?php include 'includes/templates/footer.php' ?>