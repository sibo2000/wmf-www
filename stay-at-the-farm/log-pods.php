<?php $pageTitle = "Log Pods"; include('../includes/head_subPage.php'); ?>
<?php $subNav = "nav-accom"; $tpl = "content_tpl";  include('../includes/header.php'); ?>

<section class="l-primary">
  <h1>Log pods on a <em>working farm</em> in <em>rural Devon</em>.</h1>     
  <img src="" alt="lead image " />   
</section>      
<section class="l-secondary">
 <div id="photo-thumbs"> 
   <h3>Photographs</h3>
    <div class="imageBox">
         <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 1"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
         <a href="../img/c1.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 2"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
          <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 3"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
         <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 4"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
          <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 5"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
         <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 6"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
          <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 7"><img src="../img/photo-thumb.png"></a>
    </div>
    <div class="imageBox">
         <a href="../img/c3.jpg" class="fancybox" data-fancybox-group="gallery" title="Sample title 8"><img src="../img/photo-thumb.png"></a>
    </div>
</div>
  <script>
      $(document).ready(function() {
          $('.fancybox').fancybox();
      });
  </script>
  <h3>Ready to book</h3>
  <div id="stayicons">
    <h3>--Ways to stay--</h3>
    
      <a class="tooltip" href="/stay-at-the-farm/camping.php"><img src="../img/campicon.png"><span class="classic"> Come camping</span></a>
      <a class="tooltip" href="/stay-at-the-farm/log-pods.php"><img src="../img/logpodicon.png" alt="Camping"><span class="classic"> Come glamping</span></a>
      <a class="tooltip"href="/stay-at-the-farm/caravaning.php"><img src="../img/caravanicon.png" alt="Camping"><span class="classic"> Come caravanning</span></a>
      <a class="tooltip"href="/stay-at-the-farm/bed-and-breakfast.php"><img src="../img/campicon.png" alt="Camping"> <span class="classic"> Stay in B&amp;B</span></a>
  </div>
</section>
<?php include('../includes/footer.php'); ?>



