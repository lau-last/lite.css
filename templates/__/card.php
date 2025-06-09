<section id="card-section">
    <div class="d-flex align-items-center">
        <h2>Card</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-card"></div>
    </div>

    <div data-code-target="#code-card">
        <div class="d-flex flex-wrap gap-2">
            <!--Card-->
            <div class="card" style="width: 25rem;">
                <div class="card-header bg-primary-fill">
                    <h5>Card 1</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-surface-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <!--Card-->
            <div class="card border-primary text-primary" style="width: 25rem;">
                <div class="card-header bg-transparent">
                    <h5>Card 2</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <!--Card-->
            <div class="card bg-warning-fill" style="width: 25rem;">
                <div class="card-header">
                    <h5>Card 3</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <!--Card-->
            <div class="card card-bordered border-color-danger" style="width: 25rem;">
                <div class="card-header">
                    <h5>Card 4</h5>
                </div>
                <div class="card-body border-color-danger">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <!--Card-->
            <div class="card box-shadow" style="width: 25rem;">
                <div class="card-header">
                    <h5>Card 5</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
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