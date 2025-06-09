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

        <div class="card p-2 my-1">
            <div class="card-body">
                <h3 class="p-1">How To Use Image</h3>
                <p class="p-1">
                    Our framework provides utility classes to handle images responsively, apply styling such as thumbnails.
                </p>

                <ul class="list-unstyled p-1 ms-2">
                    <li><code class="text-primary">.img-fluid</code>: Makes the image responsive using max-width: 100%.</li>
                    <li><code class="text-primary">.img-thumbnail</code>: Adds a border, padding, similar to a thumbnail preview.</li>
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
        </div>
    </div>
</section>