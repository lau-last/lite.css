<style>
    [data-code-target="#code-flexbox"] {
        [class^="col"] {
            border: 1px solid var(--gray-1000);
            padding: .5rem;
            margin-block: .5rem;
            background-color: var(--primary-color);
            color: var(--text-dark);
            text-align: center;
        }
    }
</style>

<section id="flexbox-section">

    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Flexbox</h2>
            <div class="ms-2 cursor-pointer"
                 data-action="toggle-display"
                 data-target="#container-code-flexbox"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How The flexbox Works</h3>

                <p>
                    Our framework uses a flexible grid system with rows and columns. Columns automatically share
                    available space
                    unless you specify sizes.
                </p>

                <ul class="list-style-none">
                    <li><code class="text-primary">.row</code>: Defines a flex container for columns.</li>
                    <li><code class="text-primary">.col</code>: A flexible column that shares equal width with siblings.
                    </li>
                    <li><code class="text-primary">.col-[number]</code>: Column with a fixed portion of the row (out of
                        12 parts). The number can range up to 12.
                    </li>
                    <li><code class="text-primary">.col-[size]-[number]</code>: Responsive columns that apply from the
                        specified breakpoint upwards. Sizes include <code>sm</code>, <code>md</code>, <code>lg</code>,
                        and <code>xl</code>.
                    </li>
                    <li><code class="text-primary">.row-cols-[number]</code>: Defines how many equal-width columns fit
                        in a row at all viewport sizes. The number can range up to 6.
                    </li>
                    <li><code class="text-primary">.row-cols-[size]-[number]</code>: Responsive variants that apply
                        column counts from the specified breakpoint upwards. Sizes include <code>sm</code>,
                        <code>md</code>, <code>lg</code>, and <code>xl</code>.
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-flexbox">
            <button class="btn-primary position-top-right"
                    type="button"
                    data-position-tooltip="left"
                    data-action="copy"
                    data-target="#code-flexbox"
                    data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-flexbox" data-type="code"></code></pre>
        </div>

        <div data-code-target="#code-flexbox">

            <!-- 3 equal columns -->
            <div class="row">
                <div class="col">1 of 3 col</div>
                <div class="col">2 of 3 col</div>
                <div class="col">3 of 3 col</div>
            </div>

            <!-- col-6 takes half width -->
            <div class="row">
                <div class="col">1 of 3 col</div>
                <div class="col-6">2 of 3 col-6</div>
                <div class="col">3 of 3 col</div>
            </div>

            <!-- 3 responsive columns: stack on small, 4/4/4 on large, 6/3/3 on xl -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-6">col-sm-12 col-md-12 col-lg-4 col-xl-6</div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">col-sm-12 col-md-6 col-lg-4 col-xl-3</div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">col-sm-12 col-md-6 col-lg-4 col-xl-3</div>
            </div>

            <!-- Nested grid -->
            <div class="row">
                <div class="col-sm-3 align-content-center">Level 1: col-sm-3</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-8 col-sm-6">Level 2: col-8 col-sm-6</div>
                        <div class="col-4 col-sm-6">Level 2: col-4 col-sm-6</div>
                    </div>
                </div>
            </div>

            <!-- Responsive columns count -->
            <div class="row not row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
            </div>
        </div>
    </div>
</section>