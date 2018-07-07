<aside class="mainMenu" id="mainMenu">

<div class="logo__container">
  <img src="img/logo.jpg" class="logo__icon" alt="Listuin Logo">
  <span class="logo__text">Listuin</span>
</div>

<div class="mainMenu__screen" id="menuScreen">
  <img src="img/display3.jpg" class="mainMenu__screenImg js-msImg u-show-o" alt="Screen">
  <img src="img/display2.jpg" class="mainMenu__screenImg js-msImg" alt="Screen">
  <img src="img/display1.jpg" class="mainMenu__screenImg js-msImg" alt="Screen">
</div>

<?php renderUserMenu(); ?>

<div class="mainMenu__listuinMenu">
  <nav>
    <div class="btn btn--menu js--menuTitle"><i class="fa fa-picture-o" aria-hidden="true"></i> Graphic Material</div>
    <ul class="mainMenu__submenu">
      <?php renderListuinMenu('Graphic Material') ?>
    </ul>
  </nav>
  <nav>
    <div class="btn btn--menu js--menuTitle"><i class="fa fa-picture-o" aria-hidden="true"></i> Audio/Video Material</div>
    <ul class="mainMenu__submenu">
      <?php renderListuinMenu('Audio/Video Material') ?>
    </ul>
  </nav>
</div>
</aside>