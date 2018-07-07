<?php

function renderUserMenu() {
  if (isset($_SESSION['korisnik_role'])) {
    echo '<div class="mainMenu__userMenu">  
            <nav class="mainMenu__menu">
              <ul>
                <li><a href="dashboard" class="btn btn--menu"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="#" class="btn btn--menu"><i class="fa fa-list-ol" aria-hidden="true"></i> Todo</a></li>
                <li><a href="my-lists" class="btn btn--menu"><i class="fa fa-list" aria-hidden="true"></i> Lists</a></li>
                <li><a href="#" class="btn btn--menu"><i class="fa fa-sticky-note" aria-hidden="true"></i> Notes</a></li>
                <li><a href="#" class="btn btn--menu"><i class="fa fa-code" aria-hidden="true"></i> Code</a></li>
              </ul>
            </nav>
          </div>';
  }
}

function renderListuinMenu($catagory) {
  global $con;

  $query = "SELECT * FROM menu WHERE menu_category = '$catagory'";
  $menuResult = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($menuResult)) {
    $menuName = $row["menu_name"];
    echo "<li><a href='content.php?page=$menuName#active=$menuName' class='btn btn--submenu'>$menuName</a></li>";
  }
}

function renderMenuBtns() {
  // if admin
  if(isset($_SESSION['korisnik_role'])) {
    if ($_SESSION['korisnik_role'] === 'glavni') {
      echo '<a href="#" class="btn btn--nav">
            <i class="fa fa-envelope" aria-hidden="true"></i> 
            <span class="header__nav header__nav-toggleText"> Messages (2)</span>
          </a>
          <a href="#" class="btn btn--nav">
            <i class="fa fa-lock" aria-hidden="true"></i> 
            <span class="header__nav header__nav-toggleText"> Admin</span>
          </a>';
    }
  }
  // if logged in show user
  if (isset($_SESSION["korisnik_fullname"])) {
    $fullname = $_SESSION['korisnik_fullname'];
    echo "<a href='javascript:;' class='btn btn--nav js--um js-user-menu-btn'>
            <i class='fa fa-user js--um' aria-hidden='true'></i>
            <span class='header__nav header__nav-toggleText js--um'>$fullname</span>
            <!-- <span class='btn--icon'>E</span> -->
          </a>
          <div class='userDropdown'>
          <ul>
            <li><a href='#' class='btn btn--dropdown'>Profile</a></li>
            <li><a href='accounts/logout.php' class='btn btn--dropdown'>Logout</a></li>
          </ul>
        </div>";
  }
      // if not logged in
  if (!isset($_SESSION["korisnik_fullname"])) {
    echo "<a href='accounts/singup' class='btn btn--nav btn--singin'><i class='fa fa-sign-out' aria-hidden='true'></i> Sing Up</a>";
  }
}

function renderUserMenuBtns() {
  // if admin
  if(isset($_SESSION['korisnik_role'])) {
    if ($_SESSION['korisnik_role'] === 'glavni') {
      echo '<a href="#" class="btn btn--nav">
            <i class="fa fa-envelope" aria-hidden="true"></i> 
            <span class="header__nav header__nav-toggleText"> Messages (2)</span>
          </a>
          <a href="#" class="btn btn--nav">
            <i class="fa fa-lock" aria-hidden="true"></i> 
            <span class="header__nav header__nav-toggleText"> Admin</span>
          </a>';
    }
  }
  // if logged in show user
  if (isset($_SESSION["korisnik_fullname"])) {
    $fullname = $_SESSION['korisnik_fullname'];
    echo "<a href='javascript:;' class='btn btn--nav js--um js-user-menu-btn'>
            <i class='fa fa-user js--um' aria-hidden='true'></i>
            <span class='header__nav header__nav-toggleText js--um'>$fullname</span>
            <!-- <span class='btn--icon'>E</span> -->
          </a>
          <div class='userDropdown'>
          <ul>
            <li><a href='#' class='btn btn--dropdown'>Profile</a></li>
            <li><a href='../accounts/logout.php' class='btn btn--dropdown'>Logout</a></li>
          </ul>
        </div>";
  }
      // if not logged in
  if (!isset($_SESSION["korisnik_fullname"])) {
    echo "<a href='accounts/singup' class='btn btn--nav btn--singin'><i class='fa fa-sign-out' aria-hidden='true'></i> Sing Up</a>";
  }
}

function renderSubNav() {
  if(isset($_GET['page'])) { 
    $page = $_GET['page']; 
    $hide = '';
  }
  else { 
    $page = ''; 
    $hide = 'u-hide';
  }
  

  echo "<div class='header__subNavTitle u-left'>
          <h1 class='title--h1 header__title' id='mainTitle'>Graphic Material</h1>
          <span class='title--h1-plus'>$page</span>
        </div>
        <ul class='header__breadcrumb $hide'>
          <li class='header__breadcrumb-item'>
            <a href='index.php' class='btn btn--breadcrumb'>Home</a>
          </li>
          <li class='header__breadcrumb-item'>
            <a href='content.php?page=$page#active=$page' class='btn btn--breadcrumb btn--fadeText'>$page</a>
          </li>
        </ul>";
}





?>