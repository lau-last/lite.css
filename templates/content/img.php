<style>
    [data-code-target="#code-img"] {
        img {
           margin-top: .5rem;
        }
    }
</style>
<section id="img-section">

    <div class="container">

        <div class="d-flex align-items-center">
            <h2>Image</h2>
            <div class="ms-2 cursor-pointer" data-action="toggle-display" data-target="#container-code-img"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>How To Use Image</h3>
                <p>
                    Our framework provides utility classes to handle images responsively, apply styling such as borders and rounded corners, control alignment, and manage float behavior. These classes help maintain layout consistency and adapt images to different screen sizes without additional CSS.
                </p>

                <ul class="list-unstyled">
                    <li><code class="text-primary">.img-fluid</code>: Makes the image responsive using max-width: 100%.</li>
                    <li><code class="text-primary">.img-thumbnail</code>: Adds a border, padding, similar to a thumbnail preview.</li>
                    <li><code class="text-primary">.mx-auto</code>: Horizontally centers the image using margin left and margin right auto.</li>
                    <li><code class="text-primary">.float-start</code>: Floats the image to the left within its container.</li>
                    <li><code class="text-primary">.float-end</code>: Floats the image to the right within its container.</li>
                </ul>
            </div>
        </div>

        <div class="container-code mt-2 d-none" id="container-code-img">
            <button class="btn-primary position-top-right" type="button" data-position-tooltip="left" data-action="copy"
                    data-target="#code-img" data-tooltip="Copié !">Copier
            </button>
            <pre><code id="code-img" data-type="code">
            </code></pre>
        </div>

        <div data-code-target="#code-img">
            <!-- Image responsive -->
            <img src="https://placehold.co/500x100" class="img-fluid" alt="">

            <!-- Image thumbnail -->
            <img src="https://placehold.co/100x100" class="img-thumbnail" alt="">

            <!-- Image center -->
            <img src="https://placehold.co/100x100" class="mx-auto" alt="">

            <!-- Image float start -->
            <img src="https://placehold.co/100x100" class="float-start" alt="">

            <!-- Image float end -->
            <img src="https://placehold.co/100x100" class="float-end" alt="">
        </div>
    </div>
</section>