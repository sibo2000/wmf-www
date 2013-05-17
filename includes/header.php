<?php if ($tpl == "content_tpl") { ?>
<body class="tpl-content">
<?php }elseif ($tpl == "homeLanding_tpl"){ ?>
<body class="tpl-homeLanding">
<?php }elseif ($tpl == "landing_tpl"){ ?>
<body class="tpl-landing">
<?php }; ?>  


  <div class="l-pagewrap">
    <header>
      <h1 class="logo">West Middlewick Farm</h1>
      <div id="channels">
        <ul>
          <li><a class="phoneNumber" href="tel:01884 861235">01884 861235</a></li>
          <li><a title="Check out Flickr images" href="http://www.flickr.com/photos/westmiddlewick/"><img src="../img/flickr-icon.png" alt="Flickr"></a></li>
          <li><a title="Follow us on Twitter" href="https://twitter.com/westmiddlewick"><img src="../img/twitter-icon.png" alt="Twitter"></a></li>
          <li><a title="Follow us on Facebook" href="https://www.facebook.com/pages/West-Middlewick-Farm/123773327794960"><img src="../img/fb-icon.png" alt="Facebook"></a></li>
    	  </ul>
    	</div>
      <?php include('nav_main.php'); ?>
      <?php if ($subNav == "nav-accom") { include('nav_accom.php'); }; ?> 
      
    </header>