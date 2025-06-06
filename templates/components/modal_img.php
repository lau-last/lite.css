<section id="modal-img-section">
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

                <!--Data-attribute-->
                <span data-function="close-modal" data-target="#modal-img" class="cursor-pointer position-top-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                        stroke="var(--text-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                        <path d="M9 9l6 6m0 -6l-6 6" />
                    </svg>
                </span>

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