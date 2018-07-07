<header class="header">
<nav class="header__nav u-clearFix">

<div class="u-left">
  <i class="fa fa-bars btn btn--nav btn--mobMenu" id="toggleMenuBtn" aria-hidden="true"></i>
</div>

<div class="logo__container u-menuLogo">
  <img src="img/logo.jpg" class="logo__icon" alt="Listuin Logo">
  <span class="logo__text">Listuin</span>
</div>

<div class="u-right u-rel u-clearFix">
  <?php renderMenuBtns(); ?>
</div>
</nav>

<!-- SUBHEADER -->
<div class="row">
<div class="header__subNav u-clearFix">
  <?php renderSubNav(); ?>
</div> 
</div> 
</header>