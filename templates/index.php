<?php
    include('../api/api.php');
    include('getAllTemplates.php');
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
            <?php
                $templatesData = json_decode(getAllTemplates());
                echo '<div class="row">';
                //loop through each item of the template data and display in a card style layout
                foreach($templatesData as $template) {
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
                                <form method="post" action="form.php">
                                    <input type="text" name="templateID" id="templateID" hidden="hidden" value="' . $template->template_id . '">
                                    <button type="submit" class="red tooltipped waves-effect waves-light btn" data-tooltip="Start editing this template">Select</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
                echo '</div>';
            ?>
        </div>
    </body>
<?php include('../general/footer.php');?>
