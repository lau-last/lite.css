<section id="table-section">

    <div class="container">


        <h2>Table</h2>

        <div class="card">
            <div class="card-body">
                <h3>How to Use Tables</h3>
                <p>
                    Our table system offers several classes to customize appearance, size, and behavior:
                    colors, border styles, spacing, hover effects, and more.
                    Each class corresponds to a specific style, easy to combine to achieve the desired look.
                </p>

                <h4>Colors</h4>
                <ul class="list-unstyled">
                    <li><code class="text-primary">.table-primary</code>: Uses the variable <code class="text-primary">var(--table-primary-color)</code>
                    </li>
                    <li><code class="text-secondary">.table-secondary</code>: Uses the variable <code
                                class="text-primary">var(--table-secondary-color)</code>
                    </li>
                    <li><code class="text-success">.table-success</code>: Uses the variable <code class="text-primary">var(--table-success-color)</code>
                    </li>
                    <li><code class="text-warning">.table-warning</code>: Uses the variable <code class="text-primary">var(--table-warning-color)</code>
                    </li>
                    <li><code class="text-danger">.table-danger</code>: Uses the variable <code class="text-primary">var(--table-danger-color)</code>
                    </li>
                    <li><code class="text-info">.table-info</code>: Uses the variable <code class="text-primary">var(--table-info-color)</code>
                    </li>
                    <li><code class="text-neutral">.table-neutral</code>: Uses the variable <code class="text-primary">var(--table-neutral-color)</code>
                    </li>
                    <li><code class="border-radius bg-light text-dark">.table-dark</code>: Uses the variable <code
                                class="text-primary">var(--table-dark-color)</code></li>
                    <li><code class="border-radius bg-dark text-light">.table-light</code>: Uses the variable <code
                                class="text-primary">var(--table-light-color)</code>
                    </li>
                </ul>

                <h4>Sizes</h4>
                <ul class="list-unstyled">
                    <li><code class="text-primary">.table-small</code>: Compact table with reduced padding</li>
                    <li><code class="text-primary">.table-md</code>: Medium-sized table with standard padding</li>
                    <li><code class="text-primary">.table-lg</code>: Large table with increased spacing</li>
                </ul>

                <h4>Styles</h4>
                <ul class="list-unstyled">
                    <li><code class="text-primary">.table-bordered</code>: Adds borders around each cell</li>
                    <li><code class="text-primary">.table-borderless</code>: Table without borders</li>
                    <li><code class="text-primary">.table-striped</code>: Alternating row backgrounds</li>
                    <li><code class="text-primary">.table-striped-columns</code>: Alternating column backgrounds</li>
                    <li><code class="text-primary">.table-hover</code>: Hover effect on rows</li>
                    <li><code class="text-primary">.table-group-divider</code>: Adds a divider line between row groups
                    </li>
                </ul>
            </div>
        </div>

        <!--
        table small
        -->

        <table class="table table-small">
            <tbody>
            <tr style="background: var(--table-primary-color)">
                <td class="text-center fw-bold">.table-primary</td>
            </tr>
            <tr style="background: var(--table-secondary-color)">
                <td class="text-center fw-bold">.table-secondary</td>
            </tr>
            <tr style="background: var(--table-tertiary-color)">
                <td class="text-center fw-bold">.table-tertiary</td>
            </tr>
            <tr style="background: var(--table-success-color)">
                <td class="text-center fw-bold">.table-success</td>
            </tr>
            <tr style="background: var(--table-info-color)">
                <td class="text-center fw-bold">.table-info</td>
            </tr>
            <tr style="background: var(--table-warning-color)">
                <td class="text-center fw-bold">.table-warning</td>
            </tr>
            <tr style="background: var(--table-danger-color)">
                <td class="text-center fw-bold">.table-danger</td>
            </tr>
            <tr style="background: var(--table-neutral-color)">
                <td class="text-center fw-bold">.table-neutral</td>
            </tr>
            <tr style="background: var(--table-dark-color)">
                <td class="text-center fw-bold">.table-dark</td>
            </tr>
            <tr style="background: var(--table-light-color)">
                <td class="text-center fw-bold text-dark">.table-light</td>
            </tr>
            </tbody>
        </table>


        <div class="d-flex align-items-center">
            <h3>Table small, striped, hover</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-table-small"></div>
        </div>

        <div data-code-target="#code-table-small">
            <div class="table-responsive">

                <!-- Table small -->
                <table class="table-primary table-striped table-hover">

                    <!-- Table thead -->
                    <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                    </thead>

                    <!-- Table body -->
                    <tbody>
                    <tr>
                        <th>Chris</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th>Dennis</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Sarah</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tbody>

                    <!-- Table footer -->
                    <tfoot>
                    <tr>
                        <th>Average age</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-table-small">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-table-small" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-table-small" data-type="code">
        </code></pre>
        </div>

        <!--
        table medium
        -->

        <div class="d-flex align-items-center mt-2">
            <h3>Table medium, bordered, hover</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-table-medium"></div>
        </div>

        <div data-code-target="#code-table-medium">
            <div class="table-responsive">

                <!-- Table medium -->
                <table class="table-md table-bordered table-hover table-striped">

                    <!-- Table thead -->
                    <thead class="table-secondary">
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                    </thead>

                    <!--Table body -->
                    <tbody class="table-light">
                    <tr>
                        <th>Chris</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th>Dennis</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Sarah</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tbody>

                    <!--Table-footer-->
                    <tfoot class="table-secondary">
                    <tr>
                        <th>Average age</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-table-medium">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-table-medium" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-table-medium" data-type="code">
        </code></pre>
        </div>

        <!--
        table large
        -->

        <div class="d-flex align-items-center mt-2">
            <h3>Table large, borderless, hover</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-table-large"></div>
        </div>

        <div data-code-target="#code-table-large">
            <div class="table-responsive">

                <!-- Table large -->
                <table class="table-danger table-lg table-borderless table-hover">

                    <!-- Table thead -->
                    <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                    </thead>

                    <!-- Table body -->
                    <tbody>
                    <tr>
                        <th>Chris</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th>Dennis</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Sarah</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tbody>

                    <!-- Table footer -->
                    <tfoot class="table-light">
                    <tr>
                        <th>Average age</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-table-large">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-table-large" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-table-large" data-type="code">
        </code></pre>
        </div>


        <!--
        table-divider
        -->

        <div class="d-flex align-items-center mt-2">
            <h3>Table medium, divider, borderless</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-table-divider"></div>
        </div>

        <div data-code-target="#code-table-divider">
            <div class="table-responsive">

                <!-- Table default medium -->
                <table class="table-borderless">

                    <!-- Table-thead -->
                    <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                    </thead>

                    <!-- Table-body -->
                    <tbody class="table-group-divider">
                    <tr>
                        <th>Chris</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th>Dennis</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Sarah</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tbody>

                    <!-- Table-footer -->
                    <tfoot>
                    <tr>
                        <th>Average age</th>
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit. orem ipsum dolor sit Lorem ipsum dolor sit.
                        </td>
                        <td>36</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-table-divider">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-table-divider" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-table-divider" data-type="code">
        </code></pre>
        </div>


        <!--
        table-striped-columns
        -->

        <div class="d-flex align-items-center mt-2">
            <h3>Table medium, striped columns</h3>
            <div class="ms-2 cursor-pointer" data-action="toggle-display"
                 data-target="#container-code-table-striped-columns"></div>
        </div>

        <div data-code-target="#code-table-striped-columns">
            <div class="table-responsive">

                <!-- Table striped -->
                <table class="table-warning table-striped-columns">

                    <!--Table-thead-->
                    <thead>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>36</td>
                    </tr>
                    </thead>

                    <!--Table-body-->
                    <tbody>
                    <tr>
                        <th>Chris</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <th>Dennis</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <th>Sarah</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>36</td>
                    </tr>
                    </tbody>

                    <!--Table-footer-->
                    <tfoot>
                    <tr>
                        <th>Karen</th>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>Lorem</td>
                        <td>36</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-table-striped-columns">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-table-striped-columns" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-table-striped-columns" data-type="code">
        </code></pre>
        </div>
    </div>


</section>





