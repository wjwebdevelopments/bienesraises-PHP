<?php
    $inicio = true;
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y depas en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio 1" loading="lazy">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabo de lujo en excelente precio.</p>
                    <p class="precio">$ 3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul> <!-- .iconos-caracteristicas -->
                    <a class="boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div>
            </div> <!-- .anuncio1 -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="Anuncio 2" loading="lazy">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Casa terminacion de lujo</h3>
                    <p>Casa con una excelente terminacion para uso de alquiler para la familia.</p>
                    <p class="precio">$ 6,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul> <!-- .iconos-caracteristicas -->
                    <a class="boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div>
            </div> <!-- .anuncio2 -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="Anuncio 3" loading="lazy">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Casa de lujo con piscina</h3>
                    <p>Casa de lujo con piscina de alta gama donde puedes nadar a lo ancho.</p>
                    <p class="precio">$ 10,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul> <!-- .iconos-caracteristicas -->
                    <a class="boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div>
            </div> <!-- .anuncio3 -->
        </div> <!-- .contenedor-anuncios -->
        <div class="alinear-derecha">
            <a href="anunicos.html" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tu suenos</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>2021-10-05</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article> <!-- .article -->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>2021-10-05</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article> <!-- .article -->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog3.jpg" alt="Imagen entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>2021-10-05</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article> <!-- .article -->
        </section> <!-- .blog -->

        <section class="testimoniales">
            <h3>Testimonailes</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa id eos delectus cum earum repudiandae molestiae alias sapiente necessitatibus fugiat? Non at repellat ad voluptatem?
                </blockquote>
                <p>-Wilson Juma Alcantara</p>
            </div>
        </section> <!-- .testimoniales -->
    </div>

    <!-- Footer aqui -->
    <?php include 'includes/templates/footer.php' ?>

