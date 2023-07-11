
<?php $this->load->view("pages/templates/headerAdmin") ?>
     
    <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Completez le formulaire</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="<?php echo site_url("WelcomeAdmin/modifierActivite"); ?>" method="post">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">
                                                    <h4>Activite</h4>
                                                </label>
                                                <input type="hidden" class="form-control" placeholder="Nom de l'activite"
                                                    name="id_activite" value="<?php echo $sport['id_activite'] ?>">

                                                <input type="text" class="form-control" placeholder="Nom de l'activite"
                                                    name="activite" value="<?php echo $sport['activite'] ?>">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php $this->load->view("pages/templates/footerAdmin") ?>

