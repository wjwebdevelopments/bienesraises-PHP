<?php include './includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" loading="lazy" alt="Imagen Nosotros">
                </picture>
            </div> <!-- .imagen -->
            <div class="texto-nosotros">
                <blockquote cite="http://example.com/facts">
                    25 Anios de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestiae illo quae, repellendus numquam, ad veritatis asperiores dolorum inventore adipisci accusantium voluptatibus saepe atque facere distinctio minima blanditiis necessitatibus architecto nemo rerum magnam aspernatur. Doloribus minus alias perferendis, eos ut deleniti repudiandae facilis explicabo vel officia soluta, corporis nostrum repellendus?</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsa vero possimus quisquam reiciendis aut magni quasi sapiente minima. Consectetur consequuntur dignissimos dolorem ipsa exercitationem minus recusandae deserunt voluptatibus magni suscipit?</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">

            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Segurida" loading="lazy">
                <h3>Seguridad</h3>
                <p>Neque atque unde a animi temporibus quisquam autem praesentium nam accusamus repellat dignissimos, aspernatur molestiae sit, perferendis, molestias iusto! Itaque, laboriosam qui?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Neque atque unde a animi temporibus quisquam autem praesentium nam accusamus repellat dignissimos, aspernatur molestiae sit, perferendis, molestias iusto! Itaque, laboriosam qui?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Neque atque unde a animi temporibus quisquam autem praesentium nam accusamus repellat dignissimos, aspernatur molestiae sit, perferendis, molestias iusto! Itaque, laboriosam qui?</p>
            </div>

        </div> <!-- .iconos-nosotros -->
    </section>

    <!-- Footer aqui -->
    <?php include 'includes/templates/footer.php' ?>
