
<?php
    /*if ($this->session->userdata('logged_in')) {
        if ($this->session->userdata('niveau') == 1) {//Admin   
            redirect('Welcome/home_admin');
        }else {//initiateur
            $user = $this->session->userdata('user_num');
            redirect("Welcome/home_init/$user");
        }
    }*/
    $this->load->view('head'); ?>
<body id="page-top">
    <!-- Navigation
    <?php //$this->load->view('nav'); ?>
    <?php// $this->load->view('header_admin'); ?>-->
    <div class="container">
        <br>
        <div class="card bg-light container" style="max-width: 400px;">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Connexion</h4>
                <p class="divider-text"></p>
                <?php //echo form_open('/Welcome/doLogin'); ?>
                <!-- Utilisateur -->
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
                    <input required name="password" class="form-control" placeholder="Mot de passe" type="password">
                </div>
                
                <br><!--Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-block" style="background-color:#00ff00"> Se connecter</button>
                </div>
                <?php //echo form_close(); ?>
                <hr>
                <a href="" class="text-decoration-none"><span style="font-size: 15px; color:#00ff00"> mot de passe oublié </span></a>
                <br>
                <span style="color: dark">Si vous n'avez pas encore de compte</span>
                <!--Button -->
                <div class="form-group">
                    <a class="text-decoration-none" href="<?php echo base_url('index.php/Welcome/registration_page') ?>"><button type="submit" class="btn btn-light btn-block" > Créer un compte</button></a>
                </div>
            </article>
        </div> <!-- card.// -->
    </div>
    <!--container end.//-->
   
</body>

</html>