<?php
$uri = $_SERVER['REQUEST_URI'];
$isEnglish = strpos($uri, '/en') !== false;
$lang = $isEnglish ? 'AR' : 'EN';
?>




  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bi bi-globe"></i> <?= $lang ?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="langDropdown">
      <li><a class="dropdown-item" href="/Shaden">عربي</a></li>
      <li><a class="dropdown-item" href="/Shaden/en">English</a></li>
    </ul>
  </li>


