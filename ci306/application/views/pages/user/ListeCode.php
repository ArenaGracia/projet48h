<?php $this->load->view("pages/templates/headerUser") ?>

        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste de tous les credits</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                <h4 class="card-title">Acheter du credit</h4>
                                </div>
                                    <div class="card-body">
                                    <div class="basic-form">
                                        <?php if (isset($monnaie)) { ?>
                                            <h3><label>Votre argent est de <?php echo number_format($monnaie['SUM(argent)'],0,',',' ') ?> Ar</label></h3>
                                        <?php  } ?>

                                        <form action="<?php echo site_url('WelcomeUser/AjouterCode') ?>" method="post">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                            <label class="form-label">Entrer le code</label>
                                            <input type="number" class="form-control" placeholder="" name="code">
                                            </div>
                                        </div>

                                        <?php if (isset($result)) { ?>
                                            <p><label><?php echo $result ?></label></p>
                                        <?php  } ?>
                                        <button type="submit" class="btn btn-primary">Acheter</button>

                                        </form>
                                        
                                    </div>
                                    </div>
                                </div>

                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Code</strong></th>
                                                <th><strong>Crédit</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i <count($code) ; $i++) { ?>
                                                <tr>
                                                    <td><?php echo $code[$i]['code'] ?></td>
                                                    <td><?php echo number_format($code[$i]['prix'],0,',',' ') ?> Ar</td>   
                                                </tr>                                                
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $this->load->view("pages/templates/footerAdmin") ?>


