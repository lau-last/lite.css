<section id="dropdown-section">
    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Dropdown button</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-dropdown-button">
            </div>
        </div>


        <div class="card p-2 my-1">
            <div class="card-body">
                <h3 class="p-1">How To Use Dropdown Buttons</h3>
                <p class="p-1">
                    Our framework includes a flexible dropdown button component designed for toggling expandable
                    content.
                    It combines button styling with interaction logic using utility attributes. This component is ideal
                    for
                    menus, collapsible content blocks, and other toggleable elements.
                </p>

                <ul class="list-unstyled p-1 ms-2">
                    <li><strong>Key structural classes:</strong> These provide layout and styling.</li>
                    <li><code class="text-primary">.btn-dropdown</code>: Styles the toggle button and sets up
                        interaction logic.</li>
                    <li><code class="text-primary">.content-dropdown-push</code>: Wraps the hidden content to be
                        toggled.</li>
                    <li><code class="text-primary">.wrapper-dropdown</code>: Container that wraps each
                        button-content pair.</li>
                </ul>

                <ul class="list-unstyled p-1 ms-2">
                    <li><strong>Interactive attributes:</strong> Used to link the button to the dropdown content.</li>
                    <li><code class="text-primary">data-action="dropdown"</code>: Required on the button to
                        enable toggling.</li>
                    <li><code class="text-primary">data-target="#dropdownX"</code>: Specifies the <code>id</code> of the
                        dropdown content to show/hide.</li>
                    <li><code class="text-primary">data-arrow="up"</code>: Optional, used for displaying an arrow icon
                        that can toggle direction.</li>
                </ul>

                <p class="p-1">
                    You can use multiple dropdowns in the same page, each uniquely identified by its <code>id</code>.
                </p>
            </div>
        </div>



        <div class="container-code mt-2 d-none" id="container-code-dropdown-button">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                data-target="#code-dropdown-button" data-tooltip="Copié !">Copier
            </button>
            <pre class="p-2"><code id="code-dropdown-button" data-type="code">
        </code></pre>
        </div>


        <div data-code-target="#code-dropdown-button">
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown10">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown10" class="dropdown">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>


            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown1">
                    Dropdown menu 1
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown1" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown2">
                    Dropdown menu 2
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown2" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown3">
                    Dropdown menu 3
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown3" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown4">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown4" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
        </div>



        <div class="wrapper-dropdown">

            <!--Button-->
            <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                data-target="#dropdown5">
                Dropdown menu 4
                <span data-arrow="up"></span>
            </button>

            <!--Content-->
            <div id="dropdown5" class="dropdown-push">
                <p class="p-1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                    eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                    aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                    nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                    temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                    voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                    et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                    officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                </p>
            </div>
        </div>

        <div class="d-flex">
            <div class="wrapper-dropdown-fit">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown6">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown6" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown-fit">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown7">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown7" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown8">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown8" class="dropdown-push">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
            <div class="wrapper-dropdown">

                <!--Button-->
                <button type="button" class="btn-dropdown btn-primary mt-half" data-action="toggle-dropdown"
                    data-target="#dropdown9">
                    Dropdown menu 4
                    <span data-arrow="up"></span>
                </button>

                <!--Content-->
                <div id="dropdown9" class="dropdown">
                    <p class="p-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque distinctio, dolorum
                        eligendi excepturi hic, modi natus non nostrum obcaecati repellat sint tenetur ut. Accusamus
                        aspernatur autem cum delectus deleniti dolor, facilis fugit illo ipsa ipsum laboriosam, laborum
                        nisi nobis odio placeat porro quae quibusdam quidem sapiente sed similique sit tempore
                        temporibus, ullam vel. Accusamus esse fuga fugiat obcaecati quas quo rerum soluta tempore vero
                        voluptates? Alias asperiores aspernatur atque aut, culpa cumque dignissimos doloremque eius est
                        et eum facilis fugiat ipsam itaque libero magnam minus, molestiae natus nemo nihil nobis
                        officiis pariatur placeat praesentium quidem repellendus suscipit ullam voluptatum?
                    </p>
                </div>
            </div>
        </div>


    </div>
</section>