<!-- Featured Properties start -->
<div class="featured-properties content-area-8">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Propiedades Recientes</h1>
            <p>Encuentra lo que buscas aqui</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                <?php
                    $propiedades = new propiedades();
                    $propiedades -> listaPropiedades();
                ?>

            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->