<style>
    [data-code-target="#code-grid"] {
        .grid {
            margin-bottom: var(--gap-grid);

            & > div {
                border: 1px solid var(--gray-1000);
                padding: .5rem;
                background-color: var(--primary-color);
                color: var(--text-dark);
                text-align: center;
            }
        }
    }
</style>

<section id="grid-section">
    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Grid</h2>
            <div class="ms-2 cursor-pointer"
                 data-action="toggle-display"
                 data-target="#container-code-grid"></div>
        </div>

        <div class="card p-2 my-1">
            <div class="card-body">
                <h3 class="p-1">How the Grid Works</h3>

                <p class="p-1">
                    Our framework uses a flexible grid system with rows and columns. Columns automatically share
                    available space
                    unless you specify sizes.
                </p>

                <ul class="list-style-none p-1 ms-2">
                    <li><code class="text-primary">.grid</code>: Defines a flex container for columns with consistent
                        spacing.
                    </li>
                    <li><code class="text-primary">.g-col</code>: A flexible column that shares equal width with its
                        siblings. If it’s alone on a row, it will automatically stretch to fill the available space
                        (flex: 1 1 auto).
                    </li>
                    <li><code class="text-primary">.g-col-[number]</code>: Column with a fixed portion of the row (out
                        of 12
                        parts). The number can range up to 12.
                    </li>
                    <li><code class="text-primary">.g-col-[size]-[number]</code>: Responsive columns that apply from the
                        specified breakpoint upwards. Sizes include <code>sm</code>, <code>md</code>, <code>lg</code>,
                        and
                        <code>xl</code>.
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-grid">
            <button class="btn-primary position-top-right"
                    type="button"
                    data-position-tooltip="left"
                    data-action="copy"
                    data-target="#code-grid"
                    data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-grid" data-type="code"></code></pre>
        </div>

        <div data-code-target="#code-grid">
            <!-- 3 columns responsive -->
            <div class="grid">
                <div class="g-col-6 g-col-md-4">g-col-6 g-col-md-4</div>
                <div class="g-col-6 g-col-md-4">g-col-6 g-col-md-4</div>
                <div class="g-col-6 g-col-md-4">g-col-6 g-col-md-4</div>
            </div>

            <!-- 2 columns -->
            <div class="grid">
                <div class="g-col-12 g-col-md-8">g-col-12 g-col-md-8</div>
                <div class="g-col-6 g-col-md-4">g-col-6 g-col-md-4</div>
            </div>

            <!-- 4 columns -->
            <div class="grid">
                <div class="g-col-3">g-col-3</div>
                <div class="g-col-3">g-col-3</div>
                <div class="g-col-3">g-col-3</div>
                <div class="g-col-3">g-col-3</div>
            </div>

            <!-- 12 g-col-1 elements -->
            <div class="grid">
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
                <div class="g-col-1">g-col-1</div>
            </div>

            <!-- 12 g-col elements -->
            <div class="grid">
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
            </div>

            <!-- Mixed column types -->
            <div class="grid">
                <div class="g-col-6">g-col-6</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
                <div class="g-col">g-col</div>
            </div>

            <!-- Nested grids -->
            <div class="grid">
                <div class="g-col-4">
                    g-col-4
                    <div class="grid">
                        <div class="g-col">g-col</div>
                        <div class="g-col">g-col</div>
                    </div>
                </div>
                <div class="g-col-4">
                    g-col-4
                    <div class="grid">
                        <div class="g-col-4">g-col-4</div>
                        <div class="g-col-4">g-col-4</div>
                        <div class="g-col-4">g-col-4</div>
                    </div>
                </div>
                <div class="g-col-4">g-col-4</div>
            </div>
        </div>
    </div>
</section>