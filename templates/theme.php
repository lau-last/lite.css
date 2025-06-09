<section id="theme-section">
    <div class="container">


        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <h2>Theme</h2>
                <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-theme"></div>
            </div>
        </div>

        <div class="card p-2 my-1">
            <div class="card-body">
                <h3 class="p-1">How Theme Switching Works</h3>

                <p class="p-1">
                    Our framework provides a dynamic theme switching system that allows users to toggle between light
                    and dark
                    themes.
                    The selected theme is saved and applied automatically on subsequent visits.
                </p>

                <ul class="list-style-none ms-2 p-1">
                    <li><code class="text-primary">data-btn-theme</code>: Attribute used to specify which theme a button
                        or icon
                        represents.
                    </li>
                    <li><code class="text-primary">ThemeManager</code>: A JavaScript class that handles the
                        initialization,
                        toggling, and application of themes.
                    </li>
                    <li><code class="text-primary">localStorage</code>: Used to save the user's theme preference so that
                        it
                        persists across sessions.
                    </li>
                </ul>

                <h3 class="p-1">ThemeManager Class Methods</h3>
                <ul class="list-style-none ms-2 p-1">
                    <li><code class="text-primary">init()</code>: Initializes the theme settings and event listeners.
                    </li>
                    <li><code class="text-primary">initCheckbox()</code>: Sets the initial state of the theme switch
                        based on
                        saved preferences or system settings.
                    </li>
                    <li><code class="text-primary">getSystemTheme()</code>: Detects the user's system theme preference.
                    </li>
                    <li><code class="text-primary">applyTheme(theme)</code>: Applies the specified theme to the
                        document.
                    </li>
                    <li><code class="text-primary">toggleTheme()</code>: Toggles the theme when the switch is used and
                        saves the
                        preference.
                    </li>
                    <li><code class="text-primary">handleClickButtonTheme()</code>: Handles theme switching when theme
                        icons are
                        clicked.
                    </li>
                </ul>
            </div>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-theme">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-theme" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-theme" data-type="code">
        </code></pre>
        </div>


        <div data-code-target="#code-theme">
            <div class="form-inline">

                <!-- Theme light -->
                <span class="fs-5" data-btn-theme="light" data-target="#switch-theme">☀️</span>

                <!-- Switch-size -->
                <div class="switch-md">
                    <label class="switch">
                        <input id="switch-theme" name="switch-theme" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                <!-- Theme dark -->
                <span class="fs-5" data-btn-theme="dark" data-target="#switch-theme">🌙</span>
            </div>
        </div>

    </div>
</section>