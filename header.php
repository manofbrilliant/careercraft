
<!DOCTYPE html>
<html lang="en">
    <h>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewpoint" content="width=device-width,initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
       <?php
       if(@$type==1){
       ?>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
        <link rel="stylesheet"href="<?=$action->helper->loadcss('cv_content_1.css')?>">
        <link rel="icon"href="<?=$action->helper->loadimage('logo.png')?>">
       <?php
       }
       ?>

       
        <link rel="stylesheet"href="<?=$action->helper->loadcss('main2.css')?>">
        <link rel="icon"href="<?=$action->helper->loadimage('logo.png')?>">
        <title><?=@$title?></title>
    </head>
    <body>
       
  