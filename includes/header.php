<!-- ======= Header ======= -->

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center mx-auto" >
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename"><?=$translateArr['Shaden House']?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><?=$translateArr['home']?></a></li>
          <li><a href="#about"><?=$translateArr['about']?></a></li>
          <li><a href="#services"><?=$translateArr['services']?></a></li>
          <li><a href="#portfolio"><?=$translateArr['Gallery']?></a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact"><?=$translateArr['contact']?></a></li>

          <?php
            include('langDropDown.php');
          ?>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

       

    </div>
  </header>