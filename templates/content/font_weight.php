<style>
    [data-code-target="#code-font-weight"] {
        font-size: 1.5rem;
    }
</style>
<section id="font-weight-section">

    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Font weight</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-font-weight"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How To Use Font Weight</h3>
                <p>
                    Our font weight utilities provide a convenient way to apply consistent typographic emphasis across
                    your interface. Each utility class maps directly to a customizable CSS variable, allowing easy
                    global adjustments to font thickness.
                </p>

                <ul class="list-unstyled">
                    <li><code class="text-primary">.fw-light</code>: Uses <code class="text-primary">var(--font-weight-light)</code></li>
                    <li><code class="text-primary">.fw-regular</code>: Uses <code class="text-primary">var(--font-weight-regular)</code></li>
                    <li><code class="text-primary">.fw-medium</code>: Uses <code class="text-primary">var(--font-weight-medium)</code></li>
                    <li><code class="text-primary">.fw-bold</code>: Uses <code class="text-primary">var(--font-weight-bold)</code></li>
                    <li><code class="text-primary">.fw-black</code>: Uses <code class="text-primary">var(--font-weight-black)</code></li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-font-weight">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-font-weight" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-font-weight" data-type="code">
            </code></pre>
        </div>

        <div data-code-target="#code-font-weight">
            <!-- Font weight -->
            <p class="fw-light">.fw-light Font weight</p>
            <p class="fw-regular">.fw-regular Font weight</p>
            <p class="fw-medium">.fw-medium Font weight</p>
            <p class="fw-bold">.fw-bold Font weight</p>
            <p class="fw-black">.fw-black Font weight</p>
        </div>
    </div>
</section>