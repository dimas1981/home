<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <meta name="description" content="<?php echo $description; ?>">   
        <link href="<?php echo base_url();?>assets/yaml/core/base.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/yaml/navigation/hlist.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/yaml/forms/gray-theme.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/yaml/screen/typography.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/yaml/screen/screen-FULLPAGE-layout.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/yaml/print/print.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>  
        <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css"/>  
         <!--[if lte IE 7]>
         <link href="<?php echo base_url();?>assets/yaml/core/iehacks.min.css" rel="stylesheet" type="text/css"/>
         <![endif]-->
         <!--[if lt IE 9]>
         <script src="<?php echo base_url();?>assets/lib/html5shiv/html5shiv.js" type="text/javascript"></script>
         <![endif]-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js" ></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js" ></script>
    </head>
    <body>
         <div class="ym-wrapper">
            <div class="ym-wbox">
                <header>
                        <nav class="ym-hlist">
                            <ul style="visibility: visible">
                             <!-- <li class="active"><strong>Active</strong></li>
                             <li><a href="#">Link</a></li>
                             <li><a href="#">Link</a></li>
                             <li><a href="#">Link</a></li>-->
                             <li><a href="/">Home page</a></li>
                           </ul>
                          </nav>
                </header>
                        <?php echo $content; ?>
            </div>
        </div>
    </body>
</html> 