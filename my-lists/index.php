<!-- HEAD -->
<?php include 'includes/head.php'; ?>
<body>

<div class="wrap">
<div class="mainContent">

<!-- HEADER -->
<?php include 'includes/header.php'; ?>


<!-- LOADER SHADOW -->
<!-- <div id="view">
  <?php //include '../includes/user-data-shadow.php'; ?>
</div> -->


<!-- USER FEATURES MENU -->
<div class="row">
<div class="userFM u-clearFix">
  <a href="../my-lists" class="btn btn--userFM btn--blue u-left">
    <i class="fa fa-list userFM__icon" aria-hidden="true"></i>
    <div class="userFM__textBox">
      <span class="userFM__title">My lists</span>
      <span class="userFM__menuNum">120 list items</span>
    </div>
  </a>
  <a href="../my-notes" class="btn btn--userFM btn--red u-left">
    <i class="fa fa-sticky-note userFM__icon" aria-hidden="true"></i>
    <div class="userFM__textBox">
      <span class="userFM__title">My Notes</span>
      <span class="userFM__menuNum">120 notes items</span>
    </div>
  </a>
  <a href="../my-code" class="btn btn--userFM btn--green u-left">
    <i class="fa fa-code userFM__icon" aria-hidden="true"></i>
    <div class="userFM__textBox">
      <span class="userFM__title">My Code</span>
      <span class="userFM__menuNum">120 code items</span>
    </div>
  </a>
</div>
</div> 

<!-- MAIN -->
<div class="row">
<main>
<div class="u-container myLists">

<div class="content__title myLists__title">
  <h2 class="title--h2">My Lists</h2>
</div>

<div class="myLists__content">
  <div class="content__container">
    <div class="content__main u-clearFix">
      <div class="addItem u-left">
        <h3 class="addItem__title title--h3">Add list item</h3>
        <form class="addItem__form u-clearFix">
          <div class="addItem__form-title u-left">
            <input type="text" class="input input--col1" placeholder="Title*">
          </div>
          <div class="addItem__form-url u-left">
            <input type="text" class="input input--col1" placeholder="Url">
          </div>
          <div class="addItem__form-listBtn u-right">
            <i class="fa fa-plus addItem__btn btn" aria-hidden="true"></i>
          </div>
        </form>
        <div class="myLists__list">
          <div class="menuListItem myLists__item">
            <a href="#" class="menuListItem__link">
              <span class="menuListItem__title">Download Angular Course</span>
              <span class="menuListItem__description"> _url</span>
            </a>
            <i class="fa fa-ellipsis-v menuListItem__menuIcon btn" aria-hidden="true"></i>
          </div>
          <div class="menuListItem myLists__item">
            <a href="#" class="menuListItem__link">
              <span class="menuListItem__title">Download Angular Course</span>
              <span class="menuListItem__description"> _url</span>
            </a>
            <i class="fa fa-ellipsis-v menuListItem__menuIcon btn" aria-hidden="true"></i>
          </div>
          <div class="menuListItem myLists__item">
            <a href="#" class="menuListItem__link">
              <span class="menuListItem__title">Download Angular Course</span>
              <span class="menuListItem__description"> _url</span>
            </a>
            <i class="fa fa-ellipsis-v menuListItem__menuIcon btn" aria-hidden="true"></i>
          </div>
        </div>
      </div>

      <div class="myLists__aside u-right">
        <div class="addMenu">
          <h3 class="addItem__title title--h3">Add new menu</h3>
          <form class="addMenu__form u-clearFix">
            <input type="text" class="input input--col1 addMenu__input" placeholder="Menu name*">
            <i class="fa fa-plus addMenu__btn btn" aria-hidden="true"></i>
          </form>
        </div>
        <div class="myLists__menuListItems">
          <div class="menuListItem myLists__item">
            <a href="#" class="menuListItem__link">
              <span class="menuListItem__title">Angular Course</span>
              <span class="menuListItem__description"> <</span>
            </a>
            <i class="fa fa-ellipsis-v menuListItem__menuIcon btn" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div><!-- content__main -->
    
    
  </div>
</div>

</div>
<div id="manuBack"></div>
</main>
</div> 

</div><!-- mainContainer -->
<!-- MAIN MENU - ASIDE -->
<?php include 'includes/aside-menu.php'; ?>
</div><!-- wrap -->

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>
</body>
</html>


