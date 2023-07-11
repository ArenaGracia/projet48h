<?php $this->load->view("pages/templates/headerUser"); ?>

    <div class="content-body">
      <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Diminuer poids </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive-md">
                      <thead>
                        <tr>
                          <th><strong>NOM REGIME</strong></th>
                          <th><strong>ACTIVITE</strong></th>
                          <th><strong>DETAILS REGIME</strong></th>
                          <th><strong>PRIX TOTAL</strong></th>
                          <th><strong>NOMBRE DE SEMAINE</strong></th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach($proposition as $propo) { ?>
                        <tr>
                          <td><?php echo $propo['nom'] ?></td>
                          <td><?php echo $propo['activite'] ?></td>
                          <td><?php echo $propo['nom_aliment'] ?></td>
                          <td><?php echo number_format($propo['prix_total'],0,',',' ') ?> Ar</td>
                          <td><?php echo $propo['nbr_semaine'] ?></td>
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
  <!--**********************************

  <?php $this->load->view("pages/templates/footerAdmin");

