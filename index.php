<!doctype html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lite CSS</title>
    <link rel="stylesheet" href="styles/app.css">
    <script type="module" src="javascript/app.js"></script>
</head>

<body>
<?php include 'templates/theme.php'; ?>
<?php include 'templates/navbar.php'; ?>
<?php include 'templates/navbar_side.php'; ?>
<?php include 'templates/navbar_big_dropdown.php'; ?>
<?php include 'templates/carousel.php'; ?>
<?php include 'templates/button_dropdown.php'; ?>

    <section>
        <h2>Title</h2>
        <div class="d-flex flex-column">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <h4>Lorem ipsum dolor sit amet.</h4>
            <h5>Lorem ipsum dolor sit amet.</h5>
            <h6>Lorem ipsum dolor sit amet.</h6>
        </div>
    </section>
    <section>
        <h2>Link</h2>
        <a href="#">Lorem ipsum dolor sit amet.</a>
    </section>
    <section>
        <h2>List ul</h2>
        <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
        </ul>
    </section>
    <section>
        <h2>List ol</h2>
        <ol>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
        </ol>
    </section>
    <section>
        <h2>Paragraph</h2>
        <p>Lorem ipsum dolor sit amet.</p>
    </section>
    <section>
        <h2>Image modal</h2>

        <img data-toggle="modal" data-target="#modal-img" data-img="#img-target"
            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
            class="img-fluid img-hover-opacity" style="width: 350px;" alt="">

        <div class="modal" id="modal-img">
            <div class="modal-content-img">
                <span class="icon-close-light" data-function="close-modal" data-target="#modal-img"></span>
                <img id="img-target" src="" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="container-card">
            <div class="card" style="width: 25rem;">
                <div class="card-header bg-primary">
                    <h5>Card title</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <div class="card-header bg-primary">
                    <h5>Card title</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                        Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Ea, sequi.</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <div class="card-header bg-primary">
                    <h5>Card title</h5>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Card link</a>
                    <a href="#" class="btn">Another link</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2>Modal</h2>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-1">Open Modal</button>
        <div class="modal" id="modal-1">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6>Modal Header</h6>
                    <span class="icon-close-light" data-function="close-modal" data-target="#modal-1"></span>
                </div>
                <div class="modal-body">
                    <p>Some text in the Modal Body</p>
                    <p>Some other text...</p>
                    <p>Some more text...</p>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger me-1" data-function="close-modal"
                            data-target="#modal-1">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Do something</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2>Tabs</h2>
        <div class="tab">
            <button class="btn btn-primary active" type="button" data-toggle="tab" data-target="#tab-1">London</button>
            <button class="btn btn-primary" type="button" data-toggle="tab" data-target="#tab-2">Paris</button>
            <button class="btn btn-primary" type="button" data-toggle="tab" data-target="#tab-3">Tokyo</button>
        </div>
        <div class="tab-content" id="tab-1" data-active="true">
            <h3>Tab 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>
        <div class="tab-content" id="tab-2">
            <h3>Tab 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>
        <div class="tab-content" id="tab-3">
            <h3>Tab 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, facere.</p>
        </div>
    </section>
    <section>
        <h2>Table</h2>
        <h3>Table small, striped, hover</h3>
        <div class="table-responsive">
            <table class="table-primary table-sm table-striped table-hover">
                <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                </thead>
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
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit orem ipsum dolor sit Lorem ipsum dolor sit..
                        </td>
                        <td>36</td>
                    </tr>
                </tbody>
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
        <h3>Table medium, bordered, hover</h3>
        <div class="table-responsive">
            <table class="table-secondary table-md table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                </thead>
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
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit orem ipsum dolor sit Lorem ipsum dolor sit..
                        </td>
                        <td>36</td>
                    </tr>
                </tbody>
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
        <h3>Table large, borderless, hover</h3>
        <div class="table-responsive">
            <table class="table-danger table-lg table-borderless table-hover">
                <thead>
                    <tr>
                        <th>Person</th>
                        <th>Most interest in</th>
                        <th>Age</th>
                    </tr>
                </thead>
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
                        <td>Lorem ipsum dolor sit Lorem ipsum dolor sit orem ipsum dolor sit Lorem ipsum dolor sit..
                        </td>
                        <td>36</td>
                    </tr>
                </tbody>
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
    </section>
    <section>
        <h2>Badge</h2>
        <div class="row">
            <div class="col-12">
                <span class="badge badge-pill badge-sm bg-primary">Primary</span>
                <span class="badge badge-pill badge-sm bg-secondary">Secondary</span>
                <span class="badge badge-pill badge-sm bg-success">Success</span>
                <span class="badge badge-pill badge-sm bg-info">Info</span>
                <span class="badge badge-pill badge-sm bg-warning">Warning</span>
                <span class="badge badge-pill badge-sm bg-danger">Danger</span>
                <span class="badge badge-pill badge-sm bg-neutral">Neutral</span>
                <span class="badge badge-pill badge-sm bg-light">Light</span>
                <span class="badge badge-pill badge-sm bg-dark">Dark</span>
            </div>
            <div class="col-12">
                <span class="badge badge-sm badge-primary">Primary</span>
                <span class="badge badge-sm badge-secondary">Secondary</span>
                <span class="badge badge-sm badge-success">Success</span>
                <span class="badge badge-sm badge-info">Info</span>
                <span class="badge badge-sm badge-warning">Warning</span>
                <span class="badge badge-sm badge-danger">Danger</span>
                <span class="badge badge-sm badge-neutral">Neutral</span>
                <span class="badge badge-sm badge-light">Light</span>
                <span class="badge badge-sm badge-dark">Dark</span>
            </div>
            <div class="col-12">
                <span class="badge badge-md badge-primary">Primary</span>
                <span class="badge badge-md badge-secondary">Secondary</span>
                <span class="badge badge-md badge-success">Success</span>
                <span class="badge badge-md badge-info">Info</span>
                <span class="badge badge-md badge-warning">Warning</span>
                <span class="badge badge-md badge-danger">Danger</span>
                <span class="badge badge-md badge-neutral">Neutral</span>
                <span class="badge badge-md badge-light">Light</span>
                <span class="badge badge-md badge-dark">Dark</span>
            </div>
            <div class="col-12">
                <span class="badge badge-lg badge-primary">Primary</span>
                <span class="badge badge-lg badge-secondary">Secondary</span>
                <span class="badge badge-lg badge-success">Success</span>
                <span class="badge badge-lg badge-info">Info</span>
                <span class="badge badge-lg badge-warning">Warning</span>
                <span class="badge badge-lg badge-danger">Danger</span>
                <span class="badge badge-lg badge-neutral">Neutral</span>
                <span class="badge badge-lg badge-light">Light</span>
                <span class="badge badge-lg badge-dark">Dark</span>
            </div>
            <div class="col-12">
                <span class="badge badge-outline-primary">Primary</span>
                <span class="badge badge-outline-secondary">Secondary</span>
                <span class="badge badge-outline-success">Success</span>
                <span class="badge badge-outline-info">Info</span>
                <span class="badge badge-outline-warning">Warning</span>
                <span class="badge badge-outline-danger">Danger</span>
                <span class="badge badge-outline-neutral">Neutral</span>
                <span class="badge badge-outline-light">Light</span>
                <span class="badge badge-outline-dark">Dark</span>
            </div>
        </div>
    </section>
    <section>
        <h2>Badge linked</h2>
        <div class="row">
            <div class="col-12">
                <a href="#" class="badge badge-pill badge-sm badge-primary">Primary</a>
                <a href="#" class="badge badge-pill badge-sm badge-secondary">Secondary</a>
                <a href="#" class="badge badge-pill badge-sm badge-success">Success</a>
                <a href="#" class="badge badge-pill badge-sm badge-info">Info</a>
                <a href="#" class="badge badge-pill badge-sm badge-warning">Warning</a>
                <a href="#" class="badge badge-pill badge-sm badge-danger">Danger</a>
                <a href="#" class="badge badge-pill badge-sm badge-neutral">Neutral</a>
                <a href="#" class="badge badge-pill badge-sm badge-light">Light</a>
                <a href="#" class="badge badge-pill badge-sm badge-dark">Dark</a>
            </div>
            <div class="col-12">
                <a href="#" class="badge badge-sm badge-primary">Primary</a>
                <a href="#" class="badge badge-sm badge-secondary">Secondary</a>
                <a href="#" class="badge badge-sm badge-success">Success</a>
                <a href="#" class="badge badge-sm badge-info">Info</a>
                <a href="#" class="badge badge-sm badge-warning">Warning</a>
                <a href="#" class="badge badge-sm badge-danger">Danger</a>
                <a href="#" class="badge badge-sm badge-neutral">Neutral</a>
                <a href="#" class="badge badge-sm badge-light">Light</a>
                <a href="#" class="badge badge-sm badge-dark">Dark</a>
            </div>
            <div class="col-12">
                <a href="#" class="badge badge-md badge-primary">Primary</a>
                <a href="#" class="badge badge-md badge-secondary">Secondary</a>
                <a href="#" class="badge badge-md badge-success">Success</a>
                <a href="#" class="badge badge-md badge-info">Info</a>
                <a href="#" class="badge badge-md badge-warning">Warning</a>
                <a href="#" class="badge badge-md badge-danger">Danger</a>
                <a href="#" class="badge badge-md badge-neutral">Neutral</a>
                <a href="#" class="badge badge-md badge-light">Light</a>
                <a href="#" class="badge badge-md badge-dark">Dark</a>
            </div>
            <div class="col-12">
                <a href="#" class="badge badge-lg badge-primary">Primary</a>
                <a href="#" class="badge badge-lg badge-secondary">Secondary</a>
                <a href="#" class="badge badge-lg badge-success">Success</a>
                <a href="#" class="badge badge-lg badge-info">Info</a>
                <a href="#" class="badge badge-lg badge-warning">Warning</a>
                <a href="#" class="badge badge-lg badge-danger">Danger</a>
                <a href="#" class="badge badge-lg badge-neutral">Neutral</a>
                <a href="#" class="badge badge-lg badge-light">Light</a>
                <a href="#" class="badge badge-lg badge-dark">Dark</a>
            </div>
            <div class="col-12">
                <a href="#" class="badge badge-outline-primary">Primary</a>
                <a href="#" class="badge badge-outline-secondary">Secondary</a>
                <a href="#" class="badge badge-outline-success">Success</a>
                <a href="#" class="badge badge-outline-info">Info</a>
                <a href="#" class="badge badge-outline-warning">Warning</a>
                <a href="#" class="badge badge-outline-danger">Danger</a>
                <a href="#" class="badge badge-outline-neutral">Neutral</a>
                <a href="#" class="badge badge-outline-light">Light</a>
                <a href="#" class="badge badge-outline-dark">Dark</a>
            </div>
        </div>
    </section>
    <section>
        <h2>Button</h2>
        <div class="row">
            <div class="col-12 gap-1">
                <button class="btn-primary btn-pill btn-sm">Go to page 1</button>
                <button class="btn-secondary btn-pill btn-sm">Go to page 2</button>
                <button class="btn-success btn-pill btn-sm">Go to page 3</button>
                <button class="btn-info btn-pill btn-sm">Go to page 4</button>
                <button class="btn-warning btn-pill btn-sm">Go to page 5</button>
                <button class="btn-danger btn-pill btn-sm">Go to page 6</button>
                <button class="btn-neutral btn-pill btn-sm">Go to page 7</button>
                <button class="btn-light btn-pill btn-sm">Go to page 8</button>
                <button class="btn-dark btn-pill btn-sm">Go to page 9</button>
            </div>
            <div class="col-12">
                <button class="btn-primary btn-sm">Go to page 1</button>
                <button class="btn-secondary btn-sm">Go to page 2</button>
                <button class="btn-success btn-sm">Go to page 3</button>
                <button class="btn-info btn-sm">Go to page 4</button>
                <button class="btn-warning btn-sm">Go to page 5</button>
                <button class="btn-danger btn-sm">Go to page 6</button>
                <button class="btn-neutral btn-sm">Go to page 7</button>
                <button class="btn-light btn-sm">Go to page 8</button>
                <button class="btn-dark btn-sm">Go to page 9</button>
            </div>
            <div class="col-12">
                <button class="btn-primary btn-md">Go to page 1</button>
                <button class="btn-secondary btn-md">Go to page 2</button>
                <button class="btn-success btn-md">Go to page 3</button>
                <button class="btn-info btn-md">Go to page 4</button>
                <button class="btn-warning btn-md">Go to page 5</button>
                <button class="btn-danger btn-md">Go to page 6</button>
                <button class="btn-neutral btn-md">Go to page 7</button>
                <button class="btn-light btn-md">Go to page 8</button>
                <button class="btn-dark btn-md">Go to page 9</button>
            </div>
            <div class="col-12">
                <button class="btn-primary btn-lg">Go to page 1</button>
                <button class="btn-secondary btn-lg">Go to page 2</button>
                <button class="btn-success btn-lg">Go to page 3</button>
                <button class="btn-info btn-lg">Go to page 4</button>
                <button class="btn-warning btn-lg">Go to page 5</button>
                <button class="btn-danger btn-lg">Go to page 6</button>
                <button class="btn-neutral btn-lg">Go to page 7</button>
                <button class="btn-light btn-lg">Go to page 8</button>
                <button class="btn-dark btn-lg">Go to page 9</button>
            </div>
            <div class="col-12">
                <button class="btn-outline-primary">Go to page 1</button>
                <button class="btn-outline-secondary">Go to page 2</button>
                <button class="btn-outline-success">Go to page 3</button>
                <button class="btn-outline-info">Go to page 4</button>
                <button class="btn-outline-warning">Go to page 5</button>
                <button class="btn-outline-danger">Go to page 6</button>
                <button class="btn-outline-neutral">Go to page 7</button>
                <button class="btn-outline-light">Go to page 8</button>
                <button class="btn-outline-dark">Go to page 9</button>
            </div>
        </div>
    </section>
    <section>
        <h2>Form</h2>
        <form action="/submit" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <label for="text-1">Texte :</label>
                    <input class="form-control form-control-sm" type="text" id="text-1" name="text-1"
                        placeholder="Entrez du texte" required>
                    <label for="text-2">Texte :</label>
                    <input class="form-control form-control-md" type="text" id="text-2" name="text-2"
                        placeholder="Entrez du texte" required>
                    <label for="text-3">Texte :</label>
                    <input class="form-control form-control-lg" type="text" id="text-3" name="text-3"
                        placeholder="Entrez du texte" required>
                </div>
            </div>
            <hr class="my-2">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Texte -->
                    <label for="text">Texte :</label>
                    <input class="form-control" type="text" id="text" name="text" placeholder="Entrez du texte"
                        required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Mot de passe -->
                    <label for="password">Mot de passe :</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- E-mail -->
                    <label for="email">Email :</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- URL -->
                    <label for="url">Site web :</label>
                    <input class="form-control" type="url" id="url" name="url">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Numéro -->
                    <label for="number">Nombre :</label>
                    <input class="form-control" type="number" id="number" name="number" min="0" max="100">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Date -->
                    <label for="date">Date :</label>
                    <input class="form-control" type="date" id="date" name="date">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Heure -->
                    <label for="time">Heure :</label>
                    <input class="form-control" type="time" id="time" name="time">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Date et heure -->
                    <label for="datetime">Date et heure :</label>
                    <input class="form-control" type="datetime-local" id="datetime" name="datetime">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Mois -->
                    <label for="month">Mois :</label>
                    <input class="form-control" type="month" id="month" name="month">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Semaine -->
                    <label for="week">Semaine :</label>
                    <input class="form-control" type="week" id="week" name="week">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Téléphone -->
                    <label for="tel">Téléphone :</label>
                    <input class="form-control" type="tel" id="tel" name="tel">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Couleur -->
                    <div class="form-color">
                        <label for="color">Couleur favorite :</label>
                        <input type="color" id="color" name="color">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Fichier -->
                    <label for="file">Fichier :</label>
                    <input class="form-control" type="file" id="file" name="file">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Zone de texte -->
                    <label for="textarea">Message :</label>
                    <textarea class="form-control" id="textarea" name="textarea" rows="4" cols="40"></textarea>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Sélecteur déroulant -->
                    <label for="select">Choisissez une option :</label>
                    <select class="form-control" id="select" name="select">
                        <option value="">--Choisir--</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Cases à cocher -->
                    <p>Choix multiples :</p>
                    <div class="form-check form-check-sm">
                        <input type="checkbox" id="option-a" name="check1" value="1">
                        <label for="option-a">Option A</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input type="checkbox" id="option-b" name="check2" value="2">
                        <label for="option-b">Option B</label>
                    </div>
                    <div class="form-check form-check-lg">
                        <input type="checkbox" id="option-c" name="check3" value="2">
                        <label for="option-c">Option C</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="form-check my-1">
                        <label class="switch switch-sm">
                            <input id="switch-1" name="switch-1" type="checkbox">
                            <span class="switch-slider round"></span>
                        </label>
                        <span class="switch-label" data-label="switch-1">Switch small</span>
                    </div>

                    <div class="form-check my-1">
                        <label class="switch switch-md">
                            <input id="switch-2" name="switch-2" type="checkbox">
                            <span class="switch-slider round"></span>
                        </label>
                        <span class="switch-label" data-label="switch-2">Switch medium</span>
                    </div>

                    <div class="form-check my-1">
                        <label class="switch switch-lg">
                            <input id="switch-3" name="switch-3" type="checkbox">
                            <span class="switch-slider round"></span>
                        </label>
                        <span class="switch-label" data-label="switch-3">Switch large</span>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Boutons radio -->
                    <p>Choix unique :</p>
                    <div class="form-radio form-radio-sm">
                        <input type="radio" id="radio-oui" name="choice" value="yes">
                        <label for="radio-oui">Oui</label>
                    </div>
                    <div class="form-radio form-radio-md">
                        <input type="radio" id="radio-non" name="choice" value="no">
                        <label for="radio-non">Non</label>
                    </div>
                    <div class="form-radio form-radio-lg">
                        <input type="radio" id="radio-other" name="choice" value="other">
                        <label for="radio-other">Autre</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <!-- Range (curseur) -->
                    <label for="range">Niveau :</label>
                    <input class="form-control" type="range" id="range" name="range" min="0" max="100">
                </div>
            </div>
            <!-- Bouton de soumission -->
            <button class="btn btn-primary" type="submit">Envoyer</button>
            <button class="btn btn-danger" type="reset">Réinitialiser</button>
        </form>
    </section>
    <section>
        <h2>JS element</h2>
        <div class="container-card">
            <card-element>
                <card-header>
                    <div class="d-flex justify-content-between">
                        <h4>Hello JS element</h4>
                        <icon-close></icon-close>
                    </div>
                </card-header>
                <card-body>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, possimus!</card-body>
                <card-footer>My footer</card-footer>
            </card-element>
            <card-element>
                <card-header>
                    <div class="d-flex justify-content-between flex-row-reverse">
                        <icon-burger data-animated="true"></icon-burger>
                        <h4>Hello JS element</h4>
                    </div>
                </card-header>
                <card-body>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, possimus!Lorem ipsum dolor
                    sit
                    amet, consectetur adipisicing elit. Placeat, possimus!Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Placeat, possimus!
                </card-body>
                <card-footer>My footer</card-footer>
            </card-element>
            <card-element>
                <card-header>
                    <h4>Hello JS element</h4>
                </card-header>
                <card-body>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, possimus!</card-body>
                <card-footer>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto atque, beatae
                    culpa
                    doloremque ducimus eligendi explicabo illo incidunt ipsam ipsum laboriosam modi.
                </card-footer>
            </card-element>
        </div>
    </section>
</body>

</html>