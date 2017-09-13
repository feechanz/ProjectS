<!-- BEGIN NAVIGATION -->
<div class="header-navigation">
  <ul>
    <?php 
      if($page == "home"){
        echo "<li class='active'>";
      }else{
        echo "<li>";
      }
    ?>
        <a href="index.php?page=home">Home </a>
    </li>
    <?php 
      if($page == "jadwal"){
        echo "<li class='active'>";
      }else{
        echo "<li>";
      }
    ?>
        <a href="index.php?page=jadwal">Jadwal</a>
    </li>
    <?php 
      if($page == "lagu"){
        echo "<li class='active'>";
      }else{
        echo "<li>";
      }
    ?>
        <a href="index.php?page=lagu">Lagu</a>
	  </li>
		<?php 
      if($page == "hadiah"){
        echo "<li class='active'>";
      }else{
        echo "<li>";
      }
    ?>
		    <a href="index.php?page=hadiah">Hadiah</a>
		</li>
  </ul>
</div>
<!-- END NAVIGATION -->