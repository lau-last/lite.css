<section id="carousel">
   <div class="d-flex align-items-center">
        <h2>Carousel</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-carousel"></div>
    </div>

    <div data-code-target="#code-carousel">
        <!--Container-carousel-->
        <div class="container-carousel" id="carousel" data-carousel="slide" data-auto-play="true"
            data-interval="10000">

            <!--Slide-->
            <div class="slide slide-fade">
                <div class="slide-number">1 / 3</div>
                <img src="https://images.unsplash.com/photo-1743942439157-2194bd47bd1f?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>

            <!--Slide-->
            <div class="slide slide-fade">
                <div class="slide-number">2 / 3</div>
                <img src="https://images.unsplash.com/photo-1746483965479-60900adf61b1?q=80&w=3269&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>

            <!--Slide-->
            <div class="slide slide-fade">
                <div class="slide-number">3 / 3</div>
                <img src="https://plus.unsplash.com/premium_photo-1747939639569-dfd667403f8c?q=80&w=3134&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>

            <!--Control-->
            <a class="carousel-control-prev" data-control="prev" data-target="#carousel">&#10094;</a>
            <a class="carousel-control-next" data-control="next" data-target="#carousel">&#10095;</a>
        </div>

        <!--Container-dot-->
        <div class="container-dot" data-dot-target="#carousel">

            <!--Dot-->
            <span class="dot" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-carousel">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
            data-target="#code-carousel" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-carousel" data-type="code">
        </code></pre>
    </div>
</section>