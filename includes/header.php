<?php if ($tpl == "content_tpl") { ?>
<body class="tpl-content">
<?php }elseif ($tpl == "homeLanding_tpl"){ ?>
<body class="tpl-homeLanding">
<?php }elseif ($tpl == "stayLanding_tpl"){ ?>
<body class="tpl-stayLanding">
<?php }; ?>  
  <div class="l-pagewrap">
    <header>
      <h1 class="logo">West Middlewick Farm</h1>
      <a href="tel:0700 879234">0700 879234</a>
      <?php include('nav_main.php'); ?>
      <?php if ($subnav == "nav_accom") { include('nav_accom.php'); }; ?>  
    </header>