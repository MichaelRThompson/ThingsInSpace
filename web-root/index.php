<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/icomoon.css">
    <link rel="stylesheet" href="/style.css">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="/scripts/satellite.min.js"></script>
    <script src="/script-loader.php"></script>
    <title>Stuff in Space</title>
  </head>
  <body>

 
  <div id="canvas-holder">
    <canvas id="canvas"></canvas>
    <div id="menubar">
      <div id="search-holder" class="menu-item">
        <span class="icon-search"></span>
        <input type="text" id="search"></input>
      </div>
      <div id="menu-groups" class="menu-item">
        <div class="menu-title">Groups</div>
        <ul id="groups-display" class="submenu">
          <li data-group="<clear>" class="clear-option">Clear</li>
          <li data-group="GPSGroup">GPS</li>
          <li data-group="IridiumGroup">Iridium</li>
          <li data-group="GlonassGroup">GLONASS</li>
          <li data-group="GalileoGroup">Galileo</li>
          <li data-group="Iridium33DebrisGroup">Iridium 33 Collision Debris</li>
          
          <li data-group="FunGroup">Ariane Sylda</li>
        </ul>
      </div>
     <!-- <div id="menu-color-schemes" class="menu-item">
        <div class="menu-title">Color Schemes</div>
        <ul id="color-schemes-submenu" class="submenu">
          <li data-color="default">Type</li>
          <li data-color="velocity">Velocity</li>
          <li data-color="apogee">Apogee</li>
        </ul>
      </div>-->
    </div>
    <div id="search-results"></div>
    <div id="sat-hoverbox">(none)</div>
    <div id="sat-infobox">
      <div id="sat-info-title">WAFFLESAT-5 R/B</div>
      <div class="sat-info-row">
        <div class="sat-info-key">Int'l Designator</div>
        <div class="sat-info-value" id="sat-intl-des">1998-067A</div>
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Type</div>
        <div class="sat-info-value" id="sat-type">PAYLOAD</div>
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Apogee</div>
        <div class="sat-info-value" id="sat-apogee">100 km</div>
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Perigee</div>
        <div class="sat-info-value" id="sat-perigee">100 km</div>
      </div>
       <div class="sat-info-row">
        <div class="sat-info-key">Inclination</div>
        <div class="sat-info-value" id="sat-inclination">123.45</div>°
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Altitude</div>
        <div class="sat-info-value" id="sat-altitude">100</div> km
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Velocity</div>
        <div class="sat-info-value" id="sat-velocity">100</div> km/s
      </div>
      <div class="sat-info-row">
        <div class="sat-info-key">Period</div>
        <div class="sat-info-value" id="sat-period">100</div> min
      </div>
    </div>
    <div id="load-cover">
      <div id="loader">
        <div id="spinner"></div>
        <div id="loader-text">
          Downloading resources...
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
