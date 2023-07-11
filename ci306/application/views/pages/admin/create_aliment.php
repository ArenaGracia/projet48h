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
                  <form>

                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label class="form-label">Nom d'aliment</label>
                        <input type="text" class="form-control" placeholder="" name="name_food">
                      </div>

                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label">Prix</label>
                          <input type="text" class="form-control" placeholder="en Ariary" name="price">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Creer</button>
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
