<?php $this->load->view("pages/templates/headerAdmin") ?>

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
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Code</strong></th>
                                                <th><strong>Crédit</strong></th>
                                                <th><strong>Etat</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i <count($code) ; $i++) { ?>
                                                <tr>
                                                    <td><?php echo $code[$i]['code'] ?></td>
                                                    <td><?php echo $code[$i]['prix'] ?></td>
                                                    
                                                    <?php if ($code[$i]['etat']==5 || $code[$i]['etat']==1 ) { ?>
                                                        <td><span class="badge badge-success">Encore disponnible</span></td>
                                                    <?php } ?>

                                                    <?php if ($code[$i]['etat']==10) { ?>
                                                        <td><span class="badge badge-light">Plus disponnible</span></td>
                                                    <?php } ?>
                                                                                                   
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

    </div>

<?php $this->load->view("pages/templates/footerAdmin") ?>
