<?php
$uri = $_SERVER['REQUEST_URI'];
$isEnglish = strpos($uri, '/en') !== false;
$lang = $isEnglish ? 'AR' : 'EN';
?>



<ul class="navbar-nav">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bi bi-globe"></i> <?= $lang ?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="langDropdown">
      <li><a class="dropdown-item" href="/Dewi-1.0.0">عربي</a></li>
      <li><a class="dropdown-item" href="/Dewi-1.0.0/en">English</a></li>
    </ul>
  </li>
</ul>

