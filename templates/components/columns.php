<style>
    [data-code-target="#code-columns"] {
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
<section id="columns-section">
    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Columns</h2>
            <div class="ms-2 cursor-pointer"
                 data-action="toggle-display"
                 data-target="#container-code-columns"></div>
        </div>

        <h3>How Alignment and Justification Classes Works</h3>

        <p>
            Our framework provides utility classes to manage alignment and justification within flexbox containers.
        </p>

        <ul class="list-style-none">
            <li><code class="text-primary">.align-self-start</code>: Aligns the item to the start of the container's
                cross axis.
            </li>
            <li><code class="text-primary">.align-self-center</code>: Centers the item along the container's cross axis.
            </li>
            <li><code class="text-primary">.align-self-end</code>: Aligns the item to the end of the container's cross
                axis.
            </li>
            <li><code class="text-primary">.justify-content-start</code>: Aligns items to the start of the container's
                main axis.
            </li>
            <li><code class="text-primary">.justify-content-center</code>: Centers items along the container's main
                axis.
            </li>
            <li><code class="text-primary">.justify-content-end</code>: Aligns items to the end of the container's main
                axis.
            </li>
            <li><code class="text-primary">.justify-content-around</code>: Distributes items with equal space around
                them along the main axis.
            </li>
            <li><code class="text-primary">.justify-content-between</code>: Distributes items with equal space between
                them along the main axis.
            </li>
            <li><code class="text-primary">.justify-content-evenly</code>: Distributes items with equal space evenly
                along the main axis.
            </li>
        </ul>


        <div class="container-code mt-2 d-none" id="container-code-columns">
            <button class="btn-primary position-top-right"
                    type="button"
                    data-position-tooltip="left"
                    data-action="copy"
                    data-target="#code-columns"
                    data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-columns" data-type="code"></code></pre>
        </div>


        <div data-code-target="#code-columns">
            <!-- align-self -->
            <div class="row" style="height: 100px">
                <div class="col align-self-start">
                    1 of 3 align-self-start
                </div>
                <div class="col align-self-center">
                    2 of 3 align-self-center
                </div>
                <div class="col align-self-end">
                    3 of 3 align-self-end
                </div>
            </div>

            <!-- justify-content-start -->
            <div class="row justify-content-start">
                <div class="col-4">
                    1 of 2 justify-content-start
                </div>
                <div class="col-4">
                    2 of 2 justify-content-start
                </div>
            </div>

            <!-- justify-content-center -->
            <div class="row justify-content-center">
                <div class="col-4">
                    1 of 2 justify-content-center
                </div>
                <div class="col-4">
                    2 of 2 justify-content-center
                </div>
            </div>

            <!-- justify-content-end -->
            <div class="row justify-content-end">
                <div class="col-4">
                    1 of 2 justify-content-end
                </div>
                <div class="col-4">
                    2 of 2 justify-content-end
                </div>
            </div>

            <!-- justify-content-around -->
            <div class="row justify-content-around">
                <div class="col-4">
                    1 of 2 justify-content-around
                </div>
                <div class="col-4">
                    2 of 2 justify-content-around
                </div>
            </div>

            <!-- justify-content-between -->
            <div class="row justify-content-between">
                <div class="col-4">
                    1 of 2 justify-content-between
                </div>
                <div class="col-4">
                    2 of 2 justify-content-between
                </div>
            </div>

            <!-- justify-content-evenly -->
            <div class="row justify-content-evenly">
                <div class="col-4">
                    1 of 2 justify-content-evenly
                </div>
                <div class="col-4">
                    2 of 2 justify-content-evenly
                </div>
            </div>
        </div>
    </div>
</section>