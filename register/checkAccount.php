<?php
	include('../api/api.php');
	include('../general/head2.php');

	$firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];

	getCustomerAccount($username,$firstname,$lastname,$email);

	function getCustomerAccount($username,$firstname,$lastname,$email) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.duda.co/api/accounts/'.$username);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, API_USER.':'.API_PASS);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //execute cURL call
        $output = curl_exec($ch);

        //check result for correct HTTP code
        if(curl_getinfo($ch,CURLINFO_HTTP_CODE) == 200) {
            curl_close($ch);
            //return $output;
            echo '
            <div class="container">      
		      	<div class="row">
		        	<div class="col-sm-3 col-md-3 col-lg-3 py-5"></div>
		        	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-5">
		            	<div class="card">
		                	<h5 class="card-header special-color white-text text-center py-4">
		                  		<strong>Account Error!</strong>
		                	</h5>                
		                	<div class="card-body">
		                  		<h4 class="card-title"><a>User Account Already Exist.</a></h4>
		                  		<p class="card-text">Please try again.</p>
		                  		<a href="index.php">Back to form</a>
		                	</div>
		                </div>
		            </div>
		        </div>
            </div>';

        } else {
            curl_close($ch);
            http_response_code(400);
            //die('Error getting templates details: '. $output . '<br/>');
            echo '
            <div class="container">      
		      	<div class="row">
		            <div class="col-sm-3 col-md-3 col-lg-3 py-5"></div>
		            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-5">
				        <div class="card">
				            <h5 class="card-header special-color white-text text-center py-4">
				              	<strong>Account is Validated</strong>
				            </h5>
				            <div class="card-body px-lg-5 pt-0">                
				                <form style="color: #757575;" action="templates.php" method="post">
			                      	<div class="form-row">
			                          	<div class="col">
			                              	<div class="md-form">
			                                  	<input type="text" name="firstname" id="firstname" hidden="hidden" value="'.$firstname.'">
			                                  	<p>Firstname : '.$firstname.'</p>
			                              	</div>
			                          	</div>
			                          	<div class="col">
			                              	<div class="md-form">
			                                  	<input type="text" name="lastname" id="lastname" hidden="hidden" value="'.$lastname.'">
			                                  	<p>Lastname : '.$lastname.'</p>
			                              	</div>
			                          	</div>
			                      	</div>
			                      	<div class="md-form mt-0">
			                          	<input type="text" name="username" id="username" hidden="hidden" value="'.$username.'">
			                          	<p>Username : '.$username.'</p>
			                      	</div>
			                      	<div class="md-form mt-0">
			                          	<input type="email" name="email" id="email" hidden="hidden" value="'.$email.'">
			                          	<p>E-mail : '.$email.'</p>
			                      	</div>
			                      	<button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit">Proceed to Templates</button>
			                      	<a href="index.php"><small>Back to form</small></a>
			                  	</form>
			              	</div>
			          	</div>
			        </div>
			    </div>
			</div>';
        }
    }

    include('../general/footer2.php');
?>