
<?php $this->load->view("pages/templates/headerAdmin") ?>
<!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 >Tout les listes des aliments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>IMAGE</strong></th>
                                                <th><strong>NOM</strong></th>
                                                <th><strong>PRIX</strong></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php for ($i=0; $i <4 ; $i++) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center"><img
                                                                    src="../../assets/images/avatar/1.jpg"
                                                                    class="rounded-lg me-2" width="24" alt="" /></div>
                                                        </td>
                                                        <td>Kaly be</td>
                                                        <td>250 000Ar</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn btn-warning light sharp"
                                                                    data-bs-toggle="dropdown">
                                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                                                        </g>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="./update_aliment.html">Modifier</a>
                                                                    <a class="dropdown-item" href="./delete_aliment.html">Supprimer</a>
                                                                </div>
                                                            </div>
                                                        </td>
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

