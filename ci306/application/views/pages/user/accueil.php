<?php $this->load->view("pages/templates/headerUser"); ?>

    <div class="content-body">
      <div class="container-fluid">
        <!-- row -->
    <form action="<?php echo site_url('crud_regime/getRegimeActivite') ?>" method="get">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Augmenter poids </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <div class="mb-3">
                    <label class="mb-1 form-label"><strong>Choisir</strong></label>
                    <select name="type" id="" class="default-select form-control wide mb-3">
                        <option value="1">Augmenter son poids</option>
                        <option value="2">Diminuer son poids</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="mb-1"><strong>Entrer votre effet:</strong></label>
                    <input type="number" class="form-control" value="" placeholder="en kg" name="effet">
                  </div>

                  <input type="submit" value="Valider" class="btn btn-warning">
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      </form>
    </div>
  </div>

  </div>
  <?php $this->load->view("pages/templates/footerAdmin"); ?>


