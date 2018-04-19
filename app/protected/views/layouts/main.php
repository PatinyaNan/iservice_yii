<?php
@ob_start();
@session_start();
//declare base url variable
$baseUrl = Yii::app()->request->baseUrl;
 ?>

 <?php if(!empty($content)):?>
   <html>
     <head xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
       <meta http-equiv="content-type" content="text/html"; charset="utf-8">
       <meta name="language" content="en" />
       <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/style_backend.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/js/themes/default/easyui.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/js/themes/icon.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/jquery-ui-1.7.1.custom.css" />

        <script type="text/javascript" src ="<?php echo $baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src ="<?php echo $baseUrl; ?>/js/jquery.easyui.min.js"></script>
        <script type="text/javascript" src ="<?php echo $baseUrl; ?>/js/jquery/lightbox-0.5.js"></script>
        <script type="text/javascript" src ="<?php echo $baseUrl; ?>/js/script.js"></script>
     </head>
     <body>
        <div class="container" id="page">
          <div class="header">
            <?php echo CHtml::link("iService 1.0",array("/")); ?>
          </div>
          <div class="row">
            <?php if(Yii::app()->session["employee_id"] != null): ?>
              <table width="100%" border="1">
                <tr valign="top">
                  <td class="menu_left" width="100px">
                    <?php $this->beginContent("/site/menu_left"); ?>
                    <?php $this->endContent(); ?>
                  </td>
                  <td class="content">
                    <?php echo $content; ?>
                  </td>
                </tr>
              </table>
            <?php else: ?>
              <div>
                <?php echo $content; ?>
              <?php endif; ?>
              </div>
                </div>
                <div class="footer">
                  <div>
                    helpdesk.bee-easy.com
                  </div>
                </div>
        </div>
     </body>
   </html>
 <?php endif; ?>
