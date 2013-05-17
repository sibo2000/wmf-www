<nav class="mod-mainNav">
  <span id="showNav">Menu</span>
  <ul>
    <li>
      <?php if ($pageTitle == "Home") { ?>
        <a class="active" href="../../index.php">Home</a></li>      
      <?}else{?>
        <a href="../index.php">Home</a></li>      
      <?}?>
    </li>
    <li>
      <?php if ($pageTitle == "Stay at the Farm") { ?>
        <a class="active" href="../stay-at-the-farm.php">Stay at the farm</a>
      <?}else{?>
        <a href="../stay-at-the-farm.php">Stay at the farm</a>
      <?}?>      
    </li>
    <li>
      <?php if ($pageTitle == "About the Farm") { ?>
        <a class="active" href="../about-the-farm.php">About the farm</a>
      <?}else{?>
        <a href="../about-the-farm.php">About the farm</a>
      <?}?>      
    </li>
    
    <li>
      <?php if ($pageTitle == "Reviews") { ?>
        <a class="active" href="../reviews.php">Reviews</a>
      <?}else{?>
        <a href="../reviews.php">Reviews</a> 
      <?}?>      
    </li>
    
    <li>
      <?php if ($pageTitle == "Attractions") { ?>
        <a class="active" href="../attractions.php">Attractions</a>
      <?}else{?>
        <a href="../attractions.php">Attractions</a>
      <?}?>      
    </li>
    
    <li>
      <?php if ($pageTitle == "Contact") { ?>
        <a class="active" href="../contact.php">Contact</a>
      <?}else{?>
        <a href="../contact.php">Contact</a>
      <?}?>      
    </li>
    
    <li>
      <?php if ($pageTitle == "Book Now") { ?>
        <a class="active" href="../book-now.php">Book now</a>
      <?}else{?>
        <a href="../book-now.php">Book now</a>
      <?}?>      
    </li>
  </ul>
</nav>