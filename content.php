<?php include 'includes/head.php'; ?>

<div class="wrap">
<div class="mainContent">

<!-- HEADER -->
<?php include 'includes/header.php'; ?>    

<!-- MAIN -->
<main>
<div class="row">
<div class="content u-container">

<?php

if(isset($_GET['page'])) {
  $pageName = $_GET['page'];
  ?>

<div class="content__title">
  <h2 class="title--h2"><?php echo $pageName; ?></h2>
</div>

<div class="content__photo"></div>
<div class="content__lists u-clearFix">
  <div class="content__listItems u-left">

    <?php
    
    $query = "SELECT * FROM menu_content WHERE menu_id = '$pageName'";
    $menuContentResult = mysqli_query($con, $query);
    
    while($row = mysqli_fetch_assoc($menuContentResult)) {

      $manu_title = $row['menu_content_title'];
      $menu_content_title_plus = $row['menu_content_title_plus'];
      $menu_content_url = $row['menu_content_url'];
      $menu_content_bonus = $row['menu_content_bonus'];

      echo "<a href='$menu_content_url' target='_blank' class='listItem'>
              <h3 class='title--h3'>$manu_title</h3>
              <span class='listItem__plas'>$menu_content_title_plus</span>
              <div class='listItem__data'>$menu_content_bonus</div>
            </a>";
    }

    ?>

  </div>
  <aside class="content__aside u-right">
    <!-- <form action="">
      <div>
        <label for="">Username/Email</label>
        <input type="text">
      </div>
      <div>
        <label for="">Password</label>
        <input type="text">
      </div>
      <button type="">Login</button>
    </form> -->
  </aside>
</div>
<?php } ?>

</div>
</div>
<div class="content__transBack" id="manuBack"></div>
</main>

</div><!-- mainContent -->

<!-- MAIN MENU -->
<?php include 'includes/aside-menu.php'; ?>

</div><!-- wrap -->

<?php include 'includes/footer.php'; ?>