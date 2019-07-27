<?php
	$firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $username=$_POST["username"];
	$email=$_POST["email"];

    include('../api/api.php');
    include('../templates/getAllTemplates.php');
?>

<?php include('../general/head.php');?>
    <body>
        <div class="row top" style="background:#f1f1f1">
            <div class="col s12 center-align">
                <h4 class="">Choose a template to start from</h4>
                <p>Each template is natively responsive and can be fully customized to your liking.</p>
            </div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="enterprise">Enterprise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="destination">Page De Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="services">Services Professionnels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="restauration">Restauration Et Alimentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#vide" role="tab" aria-controls="vide">Vide</a>
                </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#boutique" role="tab" aria-controls="boutique">Boutique En ligne</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#evenements" role="tab" aria-controls="evenements">Événements</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#folio" role="tab" aria-controls="folio">Portfolio et CV</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#voyages" role="tab" aria-controls="voyages">Voyages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#title" role="tab" aria-controls="title">Title or question</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#education" role="tab" aria-controls="education">Communauté et Education</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#blog" role="tab" aria-controls="blog">Blog</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1004643", "1005442", "1005710","1007730","1016497","1017273","1003075","1004110","1013307","1003458","1004111","1004112","1007980","1037395","1011557","1015027","1027444","1062978","1016503","1016512","1016775","1016945","1017847","1021909","1026342","1016202","1045884","1033336","1046917","1047062","1025359","1054739"))){        
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
    </div>
  <div class="tab-pane" id="profile" role="tabpanel">Page de Destination
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1008303", "1009457", "1009459","1034487","1024395","1026287","1057637","1033504","1022517","1016505","1072284","1046918","1047060"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="messages" role="tabpanel">Services Professionnels
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1026026", "1004642", "1005711","1010811","1031169","1031176","1031172","1026311","1041738","1076030","1016502","1003739","1003737","1017022","1007979","1005051","1005445","1009922","1038893","1069287","1076951","1016504","1016507","1016514"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="settings" role="tabpanel">Restauration Et Alimentation
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1003041", "1007187", "1008302","1027884","1027883","1049888","1037599","1045114","1074761","1074762","1074763","1075042","1075979","1076223","1076240","1076444","1077365","243f1d22","1077560","1079120","1002820","1016564","1016516","20060"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="vide" role="tabpanel">Vide
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1003460", "1003459", "1012450","1015028","1031575","1024394","1027437","1023876","1004113","1021410","1003738","1047061"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="boutique" role="tabpanel">Boutique En ligne
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1005052", "1007423", "1015026","1031170","1016500","1026341","1007731","1031175","1023873","1016499","1003040","1016508","1016515","1032084","1032085","1057989","1077696","1077974","20023","1046091","1047059","1077347"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="evenements" role="tabpanel">Evenements
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1009165", "1002714", "1003735","1004580","1005444","1031576","1048358","1005663","1038889","1016513"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="folio" role="tabpanel">Portfolio et CV
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1002713", "1013306"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="voyages" role="tabpanel">Voyages
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1002716", "1002715","1003736","1009838","1031173","1029064","1075961"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="title" role="tabpanel">Title
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1000772", "1009458","1029063","1016505","1016511","1018724","1042175","1046242","1058286","1053148"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="education" role="tabpanel">Education
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1003734", "1012895","1072891","1015401","1016509","1016506"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  <div class="tab-pane" id="blog" role="tabpanel">Blog
    <div class="container">
            <?php
                $templatesData = json_decode(getAllTemplates());
               
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
                    //if($template->template_id==1004643 && 1005442){
                    if (in_array($template->template_id, array("1002785","1059485","1060503","1077193","20063"))){      
                                    
                    echo '

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                            </div>
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
                            </div>
                            <div class="card-action">
                                <form method="post" action="details.php">
                                    <input type="text" name="template" id="template" hidden="hidden" value="' . $template->template_id . '">
                                    <input type="text" name="firstname" id="firstname" hidden="hidden" value="' . $firstname . '">
                                    <input type="text" name="lastname" id="lastname" hidden="hidden" value="' . $lastname . '">
                                    <input type="text" name="username" id="username" hidden="hidden" value="' . $username . '">
                                    <input type="text" name="email" id="email" hidden="hidden" value="' . $email . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
                echo '</div>';
            ?>
        </div>
  </div>
  
</div>

<script>
 
</script>
</div>
        </div>
    </body>
<?php include('../general/footer.php');?>
