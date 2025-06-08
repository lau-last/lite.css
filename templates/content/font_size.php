<section id="font-size-section">

    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Font size</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-font-size"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How To Use Font Size</h3>
                <p>
                    Our framework provides utility classes to control text size with precision and consistency. These
                    classes
                    are split into two groups: heading-based sizes and standard font sizes. Each class maps directly to
                    a CSS
                    variable, making the system easy to customize globally.
                </p>
                <ul class="list-unstyled">
                    <li><strong>Standard size classes:</strong> Ideal for UI elements, paragraphs, and labels.</li>
                    <li><code class="text-primary">.fs-sm</code>: Uses <code>var(--font-size-sm)</code></li>
                    <li><code class="text-primary">.fs-md</code>: Uses <code>var(--font-size-md)</code></li>
                    <li><code class="text-primary">.fs-lg</code>: Uses <code>var(--font-size-lg)</code></li>
                    <li><code class="text-primary">.fs-xl</code>: Uses <code>var(--font-size-xl)</code></li>
                    <li><code class="text-primary">.fs-xxl</code>: Uses <code>var(--font-size-xxl)</code></li>
                    <li><strong>Heading-based classes:</strong> These match the size of HTML headings.</li>
                    <li><code class="text-primary">.fs-1</code>: Uses <code>var(--font-size-h1)</code></li>
                    <li><code class="text-primary">.fs-2</code>: Uses <code>var(--font-size-h2)</code></li>
                    <li><code class="text-primary">.fs-3</code>: Uses <code>var(--font-size-h3)</code></li>
                    <li><code class="text-primary">.fs-4</code>: Uses <code>var(--font-size-h4)</code></li>
                    <li><code class="text-primary">.fs-5</code>: Uses <code>var(--font-size-h5)</code></li>
                    <li><code class="text-primary">.fs-6</code>: Uses <code>var(--font-size-h6)</code></li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-font-size">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-font-size" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-font-size" data-type="code">
            </code></pre>
        </div>

        <div data-code-target="#code-font-size">
            <!-- Font sizes -->
            <p class="fs-sm">.fs-sm Font sizes</p>
            <p class="fs-md">.fs-md Font sizes</p>
            <p class="fs-lg">.fs-lg Font sizes</p>
            <p class="fs-xl">.fs-xl Font sizes</p>
            <p class="fs-xxl">.fs-xxl Font sizes</p>

            <!-- Heading sizes -->
            <p class="fs-1">.fs-1 Heading sizes</p>
            <p class="fs-2">.fs-2 Heading sizes</p>
            <p class="fs-3">.fs-3 Heading sizes</p>
            <p class="fs-4">.fs-4 Heading sizes</p>
            <p class="fs-5">.fs-5 Heading sizes</p>
            <p class="fs-6">.fs-6 Heading sizes</p>
        </div>
    </div>
</section>