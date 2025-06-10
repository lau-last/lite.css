<section id="navbar-section">
    <div class="d-flex align-items-center">
        <h2>Navbar</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-navbar"></div>
    </div>


    <div data-code-target="#code-navbar">
        <!--Navbar-start-->
        <nav class="navbar navbar-lg border-radius bg-primary-fill">

            <!--Navbar-header-->
            <div class="navbar-header">

                <!--Navbar-brand-->
                <div>Lorem.</div>

                <!--Navbar-burger-->
                <div class="navbar-burger" data-action="toggle-navbar" data-target="#navbar" data-animated="true">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>

            <!--Navbar-content-->
            <div class="navbar-content " id="navbar" data-expanded="false">

                <!--Nav-start-->
                <ul class="nav nav-start">
                    <li><a href="#">Lorem.</a></li>
                    <li><a href="#">Nostrum!</a></li>
                    <li><a href="#">Distinctio.</a></li>
                </ul>

                <!--Nav-center-->
                <ul class="nav nav-center">
                    <li><a href="#">Lorem.</a></li>
                    <li><a href="#">Nostrum!</a></li>
                    <li><a href="#">Distinctio.</a></li>
                </ul>

                <!--Nav-center-->
                <ul class="nav nav-center">
                    <li><a href="#">Lorem.</a></li>
                    <li><a href="#">Nostrum!</a></li>
                    <li><a href="#">Distinctio.</a></li>
                </ul>

                <!--Nav-center-->
                <ul class="nav nav-end">
                    <li><a href="#">Lorem.</a></li>
                    <li><a href="#">Nostrum!</a></li>
                    <li><a href="#">Distinctio.</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-navbar">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
            data-target="#code-navbar" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-navbar" data-type="code">
        </code></pre>
    </div>
</section>