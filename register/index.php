<?php include('../general/head2.php'); ?>
  <main style="min-height: 540px;">
    <div class="container">      
      <div class="row">
        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-5">
          <div class="card">
            <h5 class="card-header special-color white-text text-center py-4">
              <strong>Create Account</strong>
            </h5>
              <div class="card-body px-lg-5 pt-0">                
                  <form class="text-center" style="color: #757575;" method="post" action="checkAccount.php">
                      <div class="form-row">
                          <div class="col">
                              <div class="md-form">
                                  <input type="text" name="firstname" id="firstname" class="form-control" required="required">
                                  <label for="firstname">First name</label>
                              </div>
                          </div>
                          <div class="col">
                              <div class="md-form">
                                  <input type="text" name="lastname" id="lastname" class="form-control" required="required">
                                  <label for="lastname">Last name</label>
                              </div>
                          </div>
                      </div>
                      <div class="md-form mt-0">
                          <input type="text" name="username" id="username" class="form-control" required="required">
                          <label for="user">Username</label>
                          <small></small>
                      </div>
                      <div class="md-form mt-0">
                          <input type="email" name="email" id="email" class="form-control" required="required">
                          <label for="email">E-mail</label>
                      </div>
                      <p class="text-left"><small>Our system will generate your password but you can change and secure it later.</small></p>        
                      <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit" id="regBtn">Proceed to Templates</button>             
                  </form>
              </div>
          </div>
        </div>
        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
      </div>      
    </div>
  </main>
<?php include('../general/footer2.php'); ?>
<script type="text/javascript" src="ajaxtest.js"></script>