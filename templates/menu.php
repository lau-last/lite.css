<nav class="navbar bg-primary-fill navbar-sticky box-shadow">
    <div class="navbar-header">
        <h5>Lite CSS</h5>
        <div class="navbar-burger" data-toggle="navbar-side" data-target="#menu-principal" data-animated="true">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</nav>

<aside id="menu-principal" data-position="start" data-mode="push">
    <div class="aside-header">
        <span data-function="close-navbar-side" data-target="#menu-principal" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"></path>
            <path d="M9 9l6 6m0 -6l-6 6"></path>
            </svg>
        </span>
        <h5>Lite CSS</h5>
    </div>

    <div class="aside-body">

        <div class="dropdown-button-wrapper">
            <button type="button" class="dropdown-btn nav-link btn-primary" data-toggle="dropdown-button"
                    data-target="#dropdown-layout">
                Layout
                <span data-arrow="up"></span>
            </button>
            <div id="dropdown-layout" class="dropdown-content-push">
                <ul>
                    <li><a href="#container-section" class="nav-link">Container</a></li>
                    <li><a href="#flexbox-section" class="nav-link">Flexbox</a></li>
            </div>
        </div>

        <!--        <ul class="list-group-item">-->
        <!--            <li><a href="#theme-section" class="nav-link">Theme</a></li>-->
        <!--            <li><a href="#navbar-section" class="nav-link">Navbar</a></li>-->
        <!--            <li><a href="#navbar-side-section" class="nav-link">Navbar side</a></li>-->
        <!--            <li><a href="#big-dropdown-section" class="nav-link">Big dropdown in menu</a></li>-->
        <!--            <li><a href="#carousel-section" class="nav-link">Carousel</a></li>-->
        <!--            <li><a href="#dropdown-section" class="nav-link">Dropdown button</a></li>-->
        <!--            <li><a href="#title-section" class="nav-link">Title</a></li>-->
        <!--            <li><a href="#link-section" class="nav-link">Link</a></li>-->
        <!--            <li><a href="#list-section" class="nav-link">List</a></li>-->
        <!--            <li><a href="#paragraph-section" class="nav-link">Paragraph</a></li>-->
        <!--            <li><a href="#modal-img-section" class="nav-link">Modal image</a></li>-->
        <!--            <li><a href="#card-section" class="nav-link">Card</a></li>-->
        <!--            <li><a href="#modal-section" class="nav-link">Modal</a></li>-->
        <!--            <li><a href="#tab-section" class="nav-link">Tabs</a></li>-->
        <!--            <li><a href="#table-section" class="nav-link">Table</a></li>-->
        <!--            <li><a href="#badge-section" class="nav-link">Badges</a></li>-->
        <!--            <li><a href="#badge-linked-section" class="nav-link">Badges linked</a></li>-->
        <!--            <li><a href="#button-section" class="nav-link">Badges</a></li>-->
        <!--            <li><a href="#form-section" class="nav-link">Form</a></li>-->
        <!--        </ul>-->
    </div>
</aside>

