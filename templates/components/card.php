<section id="card-section">
    <div class="d-flex align-items-center">
        <h2>Card</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-card"></div>
    </div>

    <div data-code-target="#code-card">
        <!--Card-->
        <div class="card" style="width: 25rem;">

            <!--Card-header-->
            <div class="card-header bg-primary">
                <h5>Card title</h5>
            </div>

            <!--Card-body-->
            <div class="card-body">
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>

            <!--Card-footer-->
            <div class="card-footer">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-card">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
            data-target="#code-card" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-card" data-type="code">
        </code></pre>
    </div>

</section>