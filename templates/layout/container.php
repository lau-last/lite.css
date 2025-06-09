<style>
    [data-code-target="#code-containers"] {
        [class^="container"] {
            padding: .5rem;
            margin-block: .5rem;
            /*background-color: var(--primary-color);*/
            color: var(--text-dark);
            text-align: center;
        }
    }
</style>
<section id="container-section">

    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Containers</h2>
            <div class="ms-2 cursor-pointer"
                 data-action="toggle-display"
                 data-target="#container-code-containers"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How They Work</h3>

                <p>
                    Our framework provides two main container types:
                    <code class="text-primary">.container</code> and <code class="text-primary">.container-fluid</code>.
                    Both help structure and center your layout, but differ in how they handle width.
                </p>

                <ul class="list-style-none">
                    <li><code class="text-primary">.container</code>: 100% width, max 1200px.</li>
                    <li><code class="text-primary">.container-sm</code>: 100% width, max 1000px.</li>
                    <li><code class="text-primary">.container-md</code>: 100% width, max 1200px.</li>
                    <li><code class="text-primary">.container-lg</code>: 100% width, max 1400px.</li>
                </ul>
                <ul class="list-style-none">
                    <li><code class="text-primary">.container-fluid</code>: 80% of screen width, fluid.</li>
                    <li><code class="text-primary">.container-fluid-sm</code>: 70% of screen width, fluid.</li>
                    <li><code class="text-primary">.container-fluid-md</code>: 80% of screen width, fluid.</li>
                    <li><code class="text-primary">.container-fluid-lg</code>: 90% of screen width, fluid.</li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-containers">
            <button class="btn-primary position-top-right"
                    type="button"
                    data-position-tooltip="left"
                    data-action="copy"
                    data-target="#code-containers"
                    data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-containers" data-type="code"></code></pre>
        </div>
    </div>

    <div data-code-target="#code-containers">

        <!--Container default-->
        <div class="container bg-primary-fill">
            <p>Container</p>
        </div>

        <!--Container sm-->
        <div class="container-sm bg-primary-fill">
            <p>Container sm</p>
        </div>

        <!--Container md-->
        <div class="container-md bg-primary-fill">
            <p>Container md</p>
        </div>

        <!--Container lg-->
        <div class="container-lg bg-primary-fill">
            <p>Container lg</p>
        </div>

        <!--Container fluid default-->
        <div class="container-fluid bg-primary-fill">
            <p>Container fluid</p>
        </div>

        <!--Container fluid sm-->
        <div class="container-fluid-sm bg-primary-fill">
            <p>Container fluid sm</p>
        </div>

        <!--Container fluid md-->
        <div class="container-fluid-md bg-primary-fill">
            <p>Container fluid md</p>
        </div>

        <!--Container fluid lg-->
        <div class="container-fluid-lg bg-primary-fill">
            <p>Container fluid lg</p>
        </div>
    </div>
</section>