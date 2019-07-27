<!--
  2cc08a6de9:Do8pV7Xx5vM7
-->

<?php
define("API_USER","2cc08a6de9");
define("API_PASS","Do8pV7Xx5vM7");

include_once(dirname(__FILE__) . '/d-functions.php');

//check if post request contains template ID
if (isset($_POST["template_id"])) {
    
//create site
$siteName = createSite($_POST["template_id"]);

//create account with tmp info
$date = new DateTime();
$tempAcctName = 'tmp_' . uniqid() . '_' . $date->getTimestamp();
$account = createCustomerAccount($tempAcctName);

//grant access
grantAccountAccess($account,$siteName);

//generate & print sso link
echo getSSOLink($account,$siteName,'EDITOR');

//prevent rest of page from loading and kill other php commands
die();
}

$.ajax({
  type: "POST",
  url: "serverUrl",
  data: formData,
  success: function(){},
  dataType: "json",
  contentType : "application/json"
});

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="row top" style="background:#f1f1f1">
            <div class="col s12 center-align">
                <h4 class="">Choose a template to start from</h4>
                <p>Each template is natively responsive and can be fully customized to your liking.</p>
            </div>
        </div>
<div class="container">

<?php

$templatesData = json_decode(getAllTemplates());

echo '<div class="row">';

//loop through each item of the template data and display in a card style layout
foreach($templatesData as $template) {
    echo '<div class="col s12 m6 l4">
      <div class="card">
        
      <html>
        <head><title>test</title></head>
          <body>
            <form action="myurl" method="POST" name="myForm">
            <p><label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="fname"></p>

            <p><label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="lname"></p>

            <input value="Submit" type="submit" onclick="submitform()">
            </form>
          </body>
      </html>

    </div>';

}
echo '</div>';

?>


</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script> $(document).ready(function(){$('.materialboxed').materialbox();});
        function createWebsite(tmpID) {
            var request = jQuery.ajax({
                url:window.location.pathname,
                beforeSend:function() {
                  //display click notification while AJAX call is in progress
                  Materialize.toast('Creating your website now..', 10000) 
                },
                method:"POST",
                data:{"template_id":tmpID}
            });

        request.success(function(d){
            var respData = d;
            console.log(respData);
            //display success message
            Materialize.toast('Successfully created website',10000);
            Materialize.toast('Sending you to edit..', 500,'', function(){ window.location = respData;
                })
        });
        
        //handle falures to create
        request.fail(function(d,sts,err){
            Materialize.toast('Website creation failed: ' + d, 5000)
            });
        }
        //find each start building links (both pencils and links) and call createwebsite function with template ID
        $('.start-building').each(function(e) {
            $(this).on('click',function(tmpID){
                var tmpID = $(this).data('template-id');
                createWebsite(tmpID);

            })
        })



      </script>
    </body>
  </html>