<?php
	$template_id=$_POST["template"];
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $username=$_POST["username"];
  $email=$_POST["email"];
?>

<?php 
  include('../api/api.php');
  include('../templates/getTemplate.php'); 
?>
<?php include('../general/head2.php'); ?>
  <main style="min-height: 500px;">
    <div class="container py-5">
      <h4>Your good to go.</h4>      
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 py-5">
          <?php
            $templatesData = json_decode(getTemplate($template_id));
            echo '
              <div class="card">
                <h5 class="card-header special-color white-text text-center py-4">
                  <strong>Selected Template</strong>
                </h5>
                <img class="card-img-top" src="'. $templatesData->thumbnail_url .'" alt="Selected Template">
                <div class="card-body">
                  <h4 class="card-title"><a>'. $templatesData->template_name .'</a></h4>
                  <p class="card-text">This is your selected Template.</p>
                </div>
              </div>
            ';
          ?>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-5">
          <div class="card">
            <h5 class="card-header special-color white-text text-center py-4">
              <strong>Account Details</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">                
              <form style="color: #757575;" action="../templates/d-functions.php" method="post">
                <div class="md-form">
                  <input type="text" name="firstname" id="firstname" hidden="hidden" value="<?php echo $firstname;?>">
                  <p><strong>Firstname :</strong> <?php echo $firstname;?></p>
                </div>
                <div class="md-form mt-0">
                  <input type="text" name="lastname" id="lastname" hidden="hidden" value="<?php echo $lastname;?>">
                  <p><strong>Lastname :</strong> <?php echo $lastname;?></p>
                </div>
                <div class="md-form mt-0">
                  <input type="text" name="username" id="username" hidden="hidden" value="<?php echo $username;?>">
                  <p><strong>Username :</strong> <?php echo $username;?></p>
                </div>
                <div class="md-form mt-0">
                  <input type="email" name="email" id="email" hidden="hidden" value="<?php echo $email; ?>">
                  <p><strong>E-mail :</strong> <?php echo $email;?></p>
                  <input type="text" name="template" id="template" hidden="hidden" value="<?php echo $template_id; ?>">
                  <p><strong>Template ID :</strong> <?php echo $template_id;?></p>
                </div>
                <p><small>Our system will generate your password but you can change and secure it later.</small></p>          
                <button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit">Create Account</button>
                <a href="index.php"><small>Back to form</small></a>             
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </main>
<?php include('../general/footer2.php'); ?>
