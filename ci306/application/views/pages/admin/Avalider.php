<?php $this->load->view("pages/templates/headerAdmin") ?>

        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste à valider</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <?php if (count($valide)==0) { ?>
                                            <p>Aucune validatation en attente</p>
                                        <?php } else { ?> 
                                            <thead>
                                                <tr>
                                                    <th><strong>Code</strong></th>
                                                    <th><strong>Crédit</strong></th>
                                                    <th><strong>Utilisateur</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i=0; $i <count($valide) ; $i++) { ?>
                                                    <tr>
                                                        <td><?php echo $valide[$i]['code'] ?></td>
                                                        <td><?php echo $valide[$i]['prix'] ?></td>
                                                        <td><?php echo $valide[$i]['user'] ?></td>                                        
                                                    </tr>                                                
                                                <?php } ?>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $this->load->view("pages/templates/footerAdmin") ?>
