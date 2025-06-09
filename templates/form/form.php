<section id="form-section">
    <div class="container">


        <h2>Form Inputs</h2>

        <div class="card p-2 my-1">
            <div class="card-body">
                <h3 class="p-1">How to Use Form Inputs</h3>
                <p class="p-1">
                    Our input system provides multiple types of form controls: text fields, password, select, radio
                    buttons,
                    checkboxes, switches, and more. You can customize their appearance, size, and layout using utility
                    classes.
                </p>

                <h4 class="p-1">Input Types</h4>
                <ul class="list-unstyled p-1 ms-2">
                    <li><code class="text-primary">type="text"</code>: Single-line text input</li>
                    <li><code class="text-primary">type="password"</code>: Obscured input for passwords</li>
                    <li><code class="text-primary">type="email"</code>: Email input with validation</li>
                    <li><code class="text-primary">type="tel"</code>: Telephone input</li>
                    <li><code class="text-primary">type="file"</code>: File upload field</li>
                    <li><code class="text-primary">type="url"</code>: URL input</li>
                    <li><code class="text-primary">type="number"</code>: Number input with min/max</li>
                    <li><code class="text-primary">type="date"</code>, <code>time</code>, <code>month</code>,
                        <code>week</code>, <code>datetime-local</code>: Date/time pickers
                    </li>
                    <li><code class="text-primary">type="range"</code>: Slider input</li>
                    <li><code class="text-primary">type="color"</code>: Color picker</li>
                    <li><code class="text-primary">textarea</code>: Multiline text input</li>
                    <li><code class="text-primary">select</code>: Dropdown selection menu</li>
                    <li><code class="text-primary">input type="radio"</code>: Radio button</li>
                    <li><code class="text-primary">input type="checkbox"</code>: Checkbox input</li>
                    <li><code class="text-primary">.switch</code>: Custom toggle switch (with optional
                        <code>.round</code>)
                    </li>
                </ul>

                <h4 class="p-1">Sizes</h4>
                <ul class="list-unstyled p-1 ms-2">
                    <li><code class="text-primary">.input-sm</code>: Small input size</li>
                    <li><code class="text-primary">.input-md</code>: Default / medium size</li>
                    <li><code class="text-primary">.input-lg</code>: Large input size</li>
                    <li><code class="text-primary">.switch-sm</code>: Small toggle switch</li>
                    <li><code class="text-primary">.switch-md</code>: Medium toggle switch</li>
                    <li><code class="text-primary">.switch-lg</code>: Large toggle switch</li>
                </ul>

                <h4 class="p-1">Layout</h4>
                <ul class="list-unstyled p-1 ms-2">
                    <li><code class="text-primary">.form-inline</code>: Aligns label and input side by side</li>
                    <li><code class="text-primary">.form-column</code>: Stacks label and input vertically</li>
                    <li><code class="text-primary">.vertical-center</code>: Vertically centers elements within a row
                    </li>
                </ul>
            </div>
        </div>


        <div class="d-flex align-items-center">
            <h3 class="py-1">Input types</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-form-input">
            </div>
        </div>

        <!--
        Form input
        -->

        <div data-code-target="#code-form-input">
            <form action="/submit" method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Input text -->
                        <label for="text">Text</label>
                        <input class="w-100" type="text" id="text" name="text" placeholder="Entrez du texte">

                        <!-- Input password -->
                        <label for="password">Password</label>
                        <input class="w-100" type="password" id="password" name="password">

                        <!-- Input email -->
                        <label for="email">Email</label>
                        <input class="w-100" type="email" id="email" name="email">

                        <!-- Input tel -->
                        <label for="tel">Tel</label>
                        <input class="w-100" type="tel" id="tel" name="tel">

                        <!-- Textarea -->
                        <label for="textarea">Message</label>
                        <textarea class="w-100" id="textarea" name="textarea" rows="4" cols="1"></textarea>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Input file -->
                        <label for="file">File</label>
                        <input class="w-100" type="file" id="file" name="file">

                        <!-- Input url -->
                        <label for="url">Url</label>
                        <input class="w-100" type="url" id="url" name="url">

                        <!-- Input number -->
                        <label for="number">Number</label>
                        <input class="w-100" type="number" id="number" name="number" min="0" max="100">

                        <!-- Input date -->
                        <label for="date">Date</label>
                        <input class="w-100" type="date" id="date" name="date">

                        <!-- Select -->
                        <label for="select">Choose an option</label>
                        <select class="w-100" id="select" name="select">
                            <option value="">--Choisir--</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Input time -->
                        <label for="time">Time</label>
                        <input class="w-100" type="time" id="time" name="time">

                        <!-- Input datetime -->
                        <label for="datetime">Datetime</label>
                        <input class="w-100" type="datetime-local" id="datetime" name="datetime">

                        <!-- Input month -->
                        <label for="month">Month</label>
                        <input class="w-100" type="month" id="month" name="month">

                        <!-- Input week -->
                        <label for="week">Week</label>
                        <input class="w-100" type="week" id="week" name="week">

                        <!-- Range -->
                        <label for="range">Range</label>
                        <input class="w-100 input-sm" type="range" id="range" name="range" min="0" max="100">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Color -->
                        <div class="form-column">
                            <label for="color">Color</label>
                            <input type="color" id="color" name="color">
                        </div>

                        <!-- Form radio -->
                        <div class="form-column">
                            <label for="radio">Radio</label>
                            <input type="radio" id="radio" name="choice" value="yes">
                        </div>

                        <!-- Form checkbox -->
                        <div class="form-column">
                            <label for="checkbox">Checkbox</label>
                            <input type="checkbox" id="checkbox" name="checkbox" value="1">
                        </div>

                        <!-- Form switch -->
                        <div class="form-column">
                            <span class="switch-label" data-label="switch">Switch</span>
                            <div class="switch-md">
                                <label class="switch">
                                    <input id="switch" name="switch" type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Form switch round -->
                        <div class="form-column">
                            <span class="switch-label" data-label="switch-round">Switch round</span>
                            <div class="switch-md">
                                <label class="switch">
                                    <input id="switch-round" name="switch" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-form-input">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-form-input" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-form-input" data-type="code">
        </code></pre>
        </div>


        <!--
        Form input size
        -->


        <div class="d-flex align-items-center mt-2">
            <h3 class="py-1">Input size</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-form-input-size">
            </div>
        </div>


        <div data-code-target="#code-form-input-size">
            <form action="/submit" method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">

                        <!-- Input text small -->
                        <label for="text-small">Text small</label>
                        <input class="w-100 input-sm" type="text" id="text-small" name="text"
                               placeholder="Entrez du texte">

                        <!-- Default input text medium -->
                        <label for="text-medium">Text medium</label>
                        <input class="w-100 input-md" type="text" id="text-medium" name="text"
                               placeholder="Entrez du texte">

                        <!-- Input text small -->
                        <label for="text-large">Text large</label>
                        <input class="w-100 input-lg" type="text" id="text-large" name="text"
                               placeholder="Entrez du texte">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">

                        <!-- Input color small -->
                        <div class="form-column">
                            <label for="color-sm">Color small</label>
                            <input class="input-sm" type="color" id="color-sm" name="color">
                        </div>

                        <!-- Default input color small -->
                        <div class="form-column">
                            <label for="color-md">Color medium</label>
                            <input class="input-md" type="color" id="color-md" name="color">
                        </div>

                        <!-- Input color small -->
                        <div class="form-column">
                            <label for="color-lg">Color large</label>
                            <input class="input-lg" type="color" id="color-lg" name="color">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">

                        <!-- Form radio small -->
                        <div class="form-column">
                            <label for="radio-sm">Radio</label>
                            <input class="input-sm" type="radio" id="radio-sm" name="choice" value="yes">
                        </div>

                        <!-- Form radio small -->
                        <div class="form-column">
                            <label for="radio-md">Radio</label>
                            <input class="input-md" type="radio" id="radio-md" name="choice" value="yes">
                        </div>

                        <!-- Form radio small -->
                        <div class="form-column">
                            <label for="radio-lg">Radio</label>
                            <input class="input-lg" type="radio" id="radio-lg" name="choice" value="yes">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">

                        <!-- Form checkbox small -->
                        <div class="form-column">
                            <label for="checkbox-sm">Checkbox</label>
                            <input class="input-sm" type="checkbox" id="checkbox-sm" name="checkbox" value="1">
                        </div>

                        <!-- Form checkbox small -->
                        <div class="form-column">
                            <label for="checkbox-md">Checkbox</label>
                            <input class="input-md" type="checkbox" id="checkbox-md" name="checkbox" value="1">
                        </div>

                        <!-- Form checkbox small -->
                        <div class="form-column">
                            <label for="checkbox-lg">Checkbox</label>
                            <input class="input-lg" type="checkbox" id="checkbox-lg" name="checkbox" value="1">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">

                        <!-- Form switch small -->
                        <div class="form-column">
                            <span class="switch-label" data-label="switch-round-small">Switch round small</span>
                            <div class="switch-sm">
                                <label class="switch">
                                    <input id="switch-round-small" name="switch" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Form default switch medium -->
                        <div class="form-column">
                            <span class="switch-label" data-label="switch-round-medium">Switch round medium</span>
                            <div class="switch-md">
                                <label class="switch">
                                    <input id="switch-round-medium" name="switch" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Form switch large -->
                        <div class="form-column">
                            <span class="switch-label" data-label="switch-round-large">Switch round large</span>
                            <div class="switch-lg">
                                <label class="switch">
                                    <input id="switch-round-large" name="switch" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-form-input-size">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-form-input-size" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-form-input-size" data-type="code">
        </code></pre>
        </div>


        <!--
        Form input size
        -->


        <div class="d-flex align-items-center mt-2">
            <h3 class="py-1">Input display</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-form-input-display">
            </div>
        </div>


        <div data-code-target="#code-form-input-display">
            <form action="/submit" method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Input text inline -->
                        <div class="form-inline">
                            <label for="text-inline">Text inline</label>
                            <input class="w-100" type="text" id="text-inline" name="text"
                                   placeholder="Entrez du texte">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">

                        <!-- Input color inline -->
                        <div class="form-inline">
                            <label for="color-inline">Color inline</label>
                            <input type="color" id="color-inline" name="color">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="vertical-center">

                            <!-- Form radio inline -->
                            <div class="form-inline">
                                <label for="radio-inline">Radio inline</label>
                                <input type="radio" id="radio-inline" name="choice" value="yes">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="vertical-center">

                            <!-- Form checkbox inline -->
                            <div class="form-inline">
                                <label for="checkbox-inline">Checkbox inline</label>
                                <input type="checkbox" id="checkbox-inline" name="checkbox" value="1">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="container-code mt-2 d-none" id="container-code-form-input-display">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-form-input-display" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-form-input-display" data-type="code">
        </code></pre>
        </div>

    </div>
</section>
