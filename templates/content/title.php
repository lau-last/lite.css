<section id="title-section">

    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Title</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-title"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How the Title Works</h3>
                <p>
                    Our framework provides a consistent and customizable heading system. All titles use a special font
                    family
                    and weight,
                    with consistent vertical spacing for clarity and hierarchy.
                    Default style: <br>
                    <code class="text-primary">margin: 1rem 0;</code>,<br>
                    <code class="text-primary">font-family: var(--font-family-titre), sans-serif;</code>,<br>
                    <code class="text-primary">font-weight: var(--font-weight-medium);</code>
                </p>
                <ul class="list-unstyled">
                    <li><code class="text-primary">h1</code>: Uses <code class="text-primary">var(--font-size-h1)</code></li>
                    <li><code class="text-primary">h2</code>: Uses <code class="text-primary">var(--font-size-h2)</code></li>
                    <li><code class="text-primary">h3</code>: Uses <code class="text-primary">var(--font-size-h3)</code></li>
                    <li><code class="text-primary">h4</code>: Uses <code class="text-primary">var(--font-size-h4)</code></li>
                    <li><code class="text-primary">h5</code>: Uses <code class="text-primary">var(--font-size-h5)</code></li>
                    <li><code class="text-primary">h6</code>: Uses <code class="text-primary">var(--font-size-h6)</code></li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-title">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-title" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-title" data-type="code">
            </code></pre>
        </div>

        <div data-code-target="#code-title">
            <h1>h1 Title</h1>
            <h2>h2 Title</h2>
            <h3>h3 Title</h3>
            <h4>h4 Title</h4>
            <h5>h5 Title</h5>
            <h6>h6 Title</h6>
        </div>

    </div>
</section>