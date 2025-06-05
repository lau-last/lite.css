<section id="modal-img">
    <div class="d-flex align-items-center">
        <h2>Image modal</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-modal-img"></div>
    </div>

    <div data-code-target="#code-modal-img">
        <!--Image-->
        <img data-toggle="modal" data-target="#modal-img" data-img="#img-target"
            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
            class="img-fluid img-hover-opacity" style="width: 350px;" alt="">

        <!--Modal-->
        <div class="modal" id="modal-img">

            <!--Content-->
            <div class="modal-content-img">

                <!--Close-button-->
                <span class="icon-close-light" data-function="close-modal" data-target="#modal-img"></span>

                <!--Image-in-modal-->
                <img id="img-target" src="" alt="">
            </div>
        </div>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-modal-img">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
            data-target="#code-modal-img" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-modal-img" data-type="code">
        </code></pre>
    </div>
</section>