<section id="modal-section">
    <div class="d-flex align-items-center">
        <h2>Modal</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-modal"></div>
    </div>

    <div data-code-target="#code-modal">
        <!--Button-->
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal">Open Modal</button>

        <!--Modal-->
        <div class="modal" id="modal">

            <!--Modal-content-->
            <div class="modal-content">

                <!--Modal-header-->
                <div class="modal-header bg-primary">
                    <h6>Modal Header</h6>

                    <!--Data-attribute + SVG-->
                    <span data-function="close-modal" data-target="#modal" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                             stroke="var(--text-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"/>
                            <path d="M9 9l6 6m0 -6l-6 6"/>
                        </svg>
                    </span>
                </div>

                <!--Modal-body-->
                <div class="modal-body">
                    <p>Some text in the Modal Body</p>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger me-1" data-function="close-modal"
                                data-target="#modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Do something</button>
                    </div>
                </div>

                <!--Modal-footer-->
                <div class="modal-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-modal">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                data-target="#code-modal" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-modal" data-type="code">
        </code></pre>
    </div>
</section>