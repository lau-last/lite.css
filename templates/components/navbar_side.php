<section id="navbar-side-section">
    <div class="d-flex align-items-center">
        <h2>Navbar side</h2>
        <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-navbar-side"></div>
    </div>

    <div data-code-target="#code-navbar-side">
        <!--Navbar-start-->
        <nav class="navbar bg-secondary border-radius">

            <!--Navbar-header-->
            <div class="navbar-header">

                <!--Navbar-brand-->
                <div>Lorem.</div>

                <!--Navbar-burger-->
                <div class="navbar-burger" data-toggle="navbar-side" data-target="#navbar-side"
                    data-animated="true">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </nav>

        <!--Aside-->
        <aside id="navbar-side" data-position="start" data-mode="push">

            <!--Aside-header-->
            <div class="aside-header">

                <!--Data-attribute-->
                <span data-function="close-navbar-side" data-target="#navbar-side" class="cursor-pointer">

                    <!--SVG-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                        stroke="var(--text-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                        <path d="M9 9l6 6m0 -6l-6 6" />
                    </svg>
                </span>
                <h5>Lorem.</h5>
            </div>

            <div class="aside-body">

                <!--List-->
                <ul class="list-group-item">
                    <li><a href="#" class="nav-link">Lorem.</a></li>
                    <li><a href="#" class="nav-link">Nostrum!</a></li>
                    <li><a href="#" class="nav-link">Distinctio.</a></li>
                    <li><a href="#" class="nav-link">DistinctioDistinctio.</a></li>
                </ul>

                <!--Dropdown-->
                <div class="dropdown-button-wrapper">

                    <!--Dropdown-button-->
                    <a href="javascript:void(0)" class="dropdown-btn nav-link" data-toggle="dropdown-button"
                        data-target="#dropdown-aside">
                        Dropdown menu 1
                        <span data-arrow="up"></span>
                    </a>

                    <!--Dropdown-content-->
                    <div id="dropdown-aside" class="dropdown-content-push list-group-item bg-transparent-theme">
                        <ul class="list-group-item">
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Home</a></li>
                            <li><a class="nav-link" href="">Lorem ipsum.</a></li>
                            <li><a class="nav-link" href="">Lorem.</a></li>
                        </ul>
                        <hr>
                        <a class="nav-link" href="">Lorem ipsum.</a>
                    </div>
                </div>

                <!--Form-->
                <form class="d-flex align-items-center" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-primary" type="submit">Search</button>
                </form>
            </div>

            <!--Aside-footer-->
            <div class="aside-footer">
                <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                    Logout
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="var(--text-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>
                </a>
            </div>
        </aside>
    </div>

    <div class="container-code mt-2 d-none" id="container-code-navbar-side">
        <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
            data-target="#code-navbar-side" data-tooltip="Copié !">Copier
        </button>
        <pre><code id="code-navbar-side" data-type="code">
        </code></pre>
    </div>
</section>