<?php
	include('../api/api.php');
	include('getTemplate.php');
	include('../general/head2.php');

	$firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $template_id = $_POST["template"];

	getCustomerAccount($username,$firstname,$lastname,$email,$template_id);

	function getCustomerAccount($username,$firstname,$lastname,$email,$template_id) {
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
		                  		<a href="index.php">Back to Templates</a>
		                	</div>
		                </div>
		            </div>
		        </div>
            </div>';
        } else {
            curl_close($ch);
            http_response_code(400);
            $templatesData = json_decode(getTemplate($template_id));
            //die('Error getting templates details: '. $output . '<br/>');
            echo '
            <div class="container py-5">
	            <h3>Account Validated and your good to go.</h3>
	            <div class="card-body px-lg-5 pt-0">
	            	<div class="row">
	            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-4">
	            			<div class="card">
				                <h5 class="card-header special-color white-text py-4">
				                  Selected Template
				                </h5>
				                <img class="card-img-top" src="'. $templatesData->thumbnail_url .'" alt="Selected Template">
				                <div class="card-body">
				                  <h4 class="card-title"><a>'. $templatesData->template_name .'</a></h4>
				                  <p class="card-text">This is your selected Template.</p>
				                </div>
				            </div>
	            		</div>             
	            		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-4">
	            			<div class="card">
				                <h5 class="card-header special-color white-text py-4">
				                  Account Details
				                </h5>
				                <div class="card-body">               
					                <form style="color: #757575;" action="d-functions.php" method="post">
		                              	<div class="md-form">
		                                  	<input type="text" name="firstname" id="firstname" hidden="hidden" value="'.$firstname.'">
		                                  	<p><strong>Firstname :</strong> '.$firstname.'</p>
		                              	</div>
		                              	<div class="md-form mt-0">
		                                  	<input type="text" name="lastname" id="lastname" hidden="hidden" value="'.$lastname.'">
		                                  	<p><strong>Lastname :</strong> '.$lastname.'</p>
		                              	</div>
				                      	<div class="md-form mt-0">
				                          	<input type="text" name="username" id="username" hidden="hidden" value="'.$username.'">
				                          	<p><strong>Username :</strong> '.$username.'</p>
				                      	</div>
				                      	<div class="md-form mt-0">
				                          	<input type="email" name="email" id="email" hidden="hidden" value="'.$email.'">
				                          	<p><strong>E-mail :</strong> '.$email.'</p>
				                      	</div>
				                      	<div class="md-form mt-0">
				                          	<input type="text" name="template" id="template" hidden="hidden" value="'.$template_id.'">
				                          	<p><strong>Template ID :</strong> '.$template_id.'</p>
				                      	</div>               
				                      	<button class="btn btn-success btn-rounded btn-block my-4 z-depth-0" type="submit">Confirm</button>
				                      	<a href="index.php"><small>Back to Templates</small></a>				                      	
				                  	</form>
				                </div>
			                </div>
		                </div>
	                </div>
              	</div>
	        </div>';
        }
    }

    include('../general/footer2.php');
?>