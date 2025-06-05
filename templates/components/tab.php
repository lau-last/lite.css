<section id="tab">
    <div class="d-flex align-items-center">
        <h2>Tabs</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-tab"></div>
    </div>


    <div data-code-target="#code-tab">
        <!--Tab-button-->
        <div class="tab">
            <button class="btn btn-primary active" type="button" data-toggle="tab" data-target="#tab-1">London</button>
            <button class="btn btn-primary" type="button" data-toggle="tab" data-target="#tab-2">Paris</button>
            <button class="btn btn-primary" type="button" data-toggle="tab" data-target="#tab-3">Tokyo</button>
        </div>

        <!--Tab-content-->
        <div class="tab-content" id="tab-1" data-active="true">
            <h3>Tab 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>

        <!--Tab-content-->
        <div class="tab-content" id="tab-2">
            <h3>Tab 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>

        <!--Tab-content-->
        <div class="tab-content" id="tab-3">
            <h3>Tab 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>
    </div>


    <div class="container-code mt-2 d-none" id="container-code-tab">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                data-target="#code-tab" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-tab" data-type="code">
        </code></pre>
    </div>
</section>