<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
  <div id="content">
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </div>
</div>
<div display="grid">
  <a href="create.php">create</a>
  <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <form id="delete_button" action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value="delete">
    </form>
  </div>
  <?php } ?>
<?php
require_once('view/bottom.php');
?>
