<section id="dropdown-section">
    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Dropdown button</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-dropdown-button">
            </div>
        </div>

        <div data-code-target="#code-dropdown-button">
            <div class="position-relative d-flex">

                <!--Wrapper-->
                <div class="dropdown-button-wrapper-fit">

                    <!--Button-->
                    <button type="button" class="dropdown-btn btn-primary" data-toggle="dropdown-button"
                            data-target="#dropdown">
                        Dropdown menu
                        <span data-arrow="up"></span>
                    </button>

                    <!--Content-->
                    <div id="dropdown" class="dropdown-content">
                        <ul>
                            <li><a class="nav-link" href="">Home</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                        </ul>
                        <hr>
                        <a class="nav-link" href="">Lorem ipsum.</a>
                    </div>
                </div>

                <!--Wrapper-->
                <div class="dropdown-button-wrapper-fit">

                    <!--Button-->
                    <button type="button" class="dropdown-btn btn-primary" data-toggle="dropdown-button"
                            data-target="#dropdown-push">
                        Dropdown menu push
                        <span data-arrow="up"></span>
                    </button>

                    <!--Content-->
                    <div id="dropdown-push" class="dropdown-content-push">
                        <ul>
                            <li><a class="nav-link" href="">Home</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                        </ul>
                        <hr>
                        <a class="nav-link" href="">Lorem ipsum.</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-dropdown-button">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-dropdown-button" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-dropdown-button" data-type="code">
        </code></pre>
        </div>

    </div>
</section>