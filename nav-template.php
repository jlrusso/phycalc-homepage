<?php
echo "
  <nav class='clearfix'>
    <div class='nav-logo animated fadeInRight'><a href='/home'>Input Physics</a></div>
    <div class='navigation animated fadeInLeft'>
      <ul class='horizontal-nav'>
        <li><a href='#' id='contact-btn'>Contact</a></li>
        <li><a href='#' id='calculator-btn'>Calculator</a></li>
        <li><a href='#' id='conversion-btn'>Conversions</a></li>
        <li><a href='#' id='horizontal-search-btn'><i class='glyphicon glyphicon-search'></i></a></li>
      </ul>
      <div class='animated fadeInLeft' id='icon'>
        <div id='vertical-search-btn'><i class='glyphicon glyphicon-search'></i></div>
        <div id='click-box'></div>
        <span id='hamburger-menu'></span>
        <div id='vertical-nav' class='vertical-nav'>
          <ul>
            <li><a href='#' id='vert-contact-btn'>Contact</a></li>
            <li><a href='#' id='vert-calculator-btn'>Calculator</a></li>
            <li><a href='#' id='vert-conversion-btn'>Conversions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div id='search-section'>
    <div id='search-form'>
      <input type='text' id='search-bar' placeholder='Search'/>
      <div id='search-icon'><i class='glyphicon glyphicon-search'></i></div>
    </div>
    <div id='close-search-btn'>
      <span id='close-bar-one'></span>
      <span id='close-bar-two'></span>
    </div>
    ";
    include_once "search-cases.php";

  echo "</div>";
?>
