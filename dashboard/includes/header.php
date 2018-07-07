<header class="header">
<nav class="header__nav u-clearFix">

<div class="u-left">
  <i class="fa fa-bars btn btn--nav btn--mobMenu" id="toggleMenuBtn" aria-hidden="true"></i>
</div>

<div class="logo__container u-menuLogo">
  <img src="../img/logo.jpg" class="logo__icon" alt="Listuin Logo">
  <span class="logo__text">Listuin</span>
</div>

<div class="u-right u-rel u-clearFix">
  <a href='../index.php' class='btn btn--nav'>
    <i class='fa fa-home' aria-hidden='true'></i> 
    <span class='header__nav header__nav-toggleText'>Home</span>
    <!-- <span class='btn--icon'>E</span> -->
  </a>
  <?php renderUserMenuBtns(); ?>
</div>
</nav>

<!-- SUBHEADER -->
<div class="row">
<div class="header__subNav u-clearFix">
  <div class='header__subNavTitle u-left'>
    <h1 class='title--h1 header__title' id='mainTitle'>Dashboard</h1>
    <span class='title--h1-plus'>Welcome</span>
  </div>
  <ul class='header__breadcrumb $hide'>
    <li class='header__breadcrumb-item'>
      <a href='../index.php' class='btn btn--breadcrumb'>Home</a>
    </li>
    <li class='header__breadcrumb-item'>
      <a href='javascript:;' class='btn btn--breadcrumb btn--fadeText'>Dashboard</a>
    </li>
  </ul>
</div> 
</div> 

</header>