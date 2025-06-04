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