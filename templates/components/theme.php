<section id="theme-section">
    <div class="d-flex align-items-center">
        <h2>Theme</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-theme"></div>
    </div>


    <div data-code-target="#code-theme">
        <!--Container form switch-->
        <div class="form-inline">

            <!--Theme light-->
            <span class="fs-5" data-btn-theme="light" data-target="#switch-theme">☀️</span>

            <!--Switch-size-->
            <div class="switch-md">

                <!--Switch-->
                <label class="switch">
                    <input id="switch-theme" name="switch-theme" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>

            <!--Theme dark-->
            <span class="fs-5" data-btn-theme="dark" data-target="#switch-theme">🌙</span>
        </div>
    </div>


    <div class="container-code mt-2 d-none" id="container-code-theme">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                data-target="#code-theme" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-theme" data-type="code">
        </code></pre>
    </div>
</section>