<?php
  include('../api/api.php');
  include_once(dirname(__FILE__) . '/d-functions.php');
  if (isset($_POST["template_id"])) {
    $siteName = createSite($_POST["template_id"]);
    $date = new DateTime();
    $tempAcctName = 'tmp_' . uniqid() . '_' . $date->getTimestamp();
    $account = createCustomerAccount($tempAcctName);
    grantAccountAccess($account,$siteName);
    echo getSSOLink($account,$siteName,'EDITOR');
    die();
  }
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
        foreach($templatesData as $template) {
          echo '<div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <img class="materialboxed" src="' . $template->thumbnail_url . '">
                <a class="btn-floating tooltipped halfway-fab waves-effect waves-light red start-building" data-tooltip="Start editing this template" data-template-id="' . $template->template_id . '"><i class="material-icons">mode_edit</i></a>
              </div>
              <div class="card-content">
                <span class="card-title grey-text text-darken-4 truncate">' . $template->template_name . '</span>
                <a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">Preview Template</a>
              </div>
              <div class="card-action">
                <a data-template-id="' . $template->template_id . '" href="#" class="start-building">Start with this template</a>
              </div>
            </div>
          </div>';
        }
        echo '</div>';
      ?>
      </div>
      <?php include('../general/footer.php');?>
      <script> $(document).ready(function(){$('.materialboxed').materialbox();});
        function createWebsite(tmpID) {
          var request = jQuery.ajax({
              url:window.location.pathname,
              beforeSend:function() {
                Materialize.toast('Creating your website now..', 10000) 
              },
              method:"POST",
              data:{"template_id":tmpID}
          });

          request.success(function(d){
              var respData = d;
              console.log(respData);
              Materialize.toast('Successfully created website',10000);
              Materialize.toast('Sending you to edit..', 500,'', function(){ window.location = respData;
                  })
          });
          
          request.fail(function(d,sts,err){
              Materialize.toast('Website creation failed: ' + d, 5000)
              });
        }
        $('.start-building').each(function(e) {
            $(this).on('click',function(tmpID){
                var tmpID = $(this).data('template-id');
                createWebsite(tmpID);
            })
        })
      </script>
    </body>
  </html>