<section id="display-section">

    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Headings</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-headings"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Display Headings</h3>
                <p>
                    Display headings are larger, bolder title styles intended to grab attention. They're ideal for hero
                    sections,
                    page headers, or any place where a strong visual impact is needed. Unlike regular headings, display
                    headings use
                    bigger font sizes and may have custom spacing or weight for emphasis.
                </p>
                <ul class="list-style-none">
                    <li><code class="text-primary">.display-*</code>: Uses <code class="text-primary">var(--display-font-weight)</code></li>
                    <li><code class="text-primary">.display-1</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                    <li><code class="text-primary">.display-2</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                    <li><code class="text-primary">.display-3</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                    <li><code class="text-primary">.display-4</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                    <li><code class="text-primary">.display-5</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                    <li><code class="text-primary">.display-6</code>: Uses <code class="text-primary">var(--display-font-sizes-1)</code></li>
                </ul>
            </div>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-headings">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-headings" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-headings" data-type="code">
            </code></pre>
        </div>

        <div data-code-target="#code-headings">
            <h1 class="display-1">.display-1</h1>
            <h2 class="display-2">.display-2</h2>
            <h3 class="display-3">.display-3</h3>
            <h4 class="display-4">.display-4</h4>
            <h5 class="display-5">.display-5</h5>
            <h6 class="display-6">.display-6</h6>
        </div>

    </div>
</section>