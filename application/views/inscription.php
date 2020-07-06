<?php 
    $this->load->view('head'); ?>

<body>
    <div class="container">
        <br>
        <div class="card bg-light container" style="max-width: 800px;">
            <article class="card-body mx-auto" style="max-width: 800px;">
                <!-- <h4 class="card-title mt-3 text-center">Si vous avez une fois publié, mettez le même numéro téléphone pour mettre à jour vos informations</h4>
                <p class="divider-text"></p> -->
                
                <!-- Utilisateur -->
                <h4 class="card-title mt-3 text-center">Inscription</h4>
                <?php echo $this->session->flashdata('email_sent');
                 echo form_open('/Welcome/registration'); ?>
                <div class="form-group input-group" >
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input required name="username" class="form-control" placeholder="Nom complet" type="text">
                </div>
                <!-- Numero de telephone -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input required name="user_tel" class="form-control" placeholder="Numéro de téléphone" type="number">
                </div>
                <!-- Email -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input required name="user_email" class="form-control" placeholder="Votre Email" type="text">
                </div>
                <!-- Mot de passe -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input required id="password" name="user_password" class="form-control" placeholder="Définissez un mot de passe" type="password">
                </div>
                <!-- Confirmation Mot de passe -->
                <div id="msg"></div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input required id="password_conf" name="user_password_conf" class="form-control" placeholder="Confirmez le mot de passe" type="password">
                </div>

                <!--Ville -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marked"></i> </span>
                    </div>
                    <input required name="user_ville" class="form-control" placeholder="Ville" type="text">
                
                </div>

                <!--role -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <select required id="role" name="user_role" class="form-control">
                        <option value="">Catégorie </option>
                        <option value="">Travailleur </option>
                        <option value="">Freelance </option>
                        <option value="">Investisseur </option>
                        <option value="">Entrepreneur </option>
                        <option value="">Talent </option>
                    </select>
                </div>

                <!--condition -->
                <div class="form-check form-check-inline">
                    <input required class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">J'accepte les conditions d'utilisation</label>
                </div>

            
                <div id="msg2" class="alert-danger"></div>
                <div class="form-group">
                    <button id="submit" type="submit" class="btn btn-block" style = "background-color: #00ff00 ;" > Valider <i class="fa fa-arrow-circle-right"></i> </button>
                </div>
                <?php echo form_close(); ?> 
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//
    <?php $this->load->view('footer'); ?>
    -->
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#password_conf").blur(function() {
            if ($("#password").val() != $("#password_conf").val()) {
                $("#msg").html("Mots de passe non conformes").css("color", "red");
                $("#msg2").html("Assurez-vous de mettre les mêmes mots de passe");
                $("#submit").attr('disabled', true);
            } else {
                $("#msg").html("Mots de passe conformes").css("color", "green");
            }
        });
    });
</script>
