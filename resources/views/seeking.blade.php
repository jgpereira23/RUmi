<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RUmi | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  	<div class="off-canvas-wrap" style="height:100%;" data-offcanvas>
    
    <div class="inner-wrap" style="height:100%;">
        <nav class="tab-bar red" >
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
          </section>

          <section class="middle tab-bar-section">
            <h1 class="title">RUmi</h1>
          </section>

          <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>RUmi</label></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">View Profile</a></li>
            <li><a href="#">Seeking</a></li>
            <li class="has-submenu"><a href="#">Account</a>
                <ul class="left-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Account</label></li>
                    <li><a href="#">Change Personal Info</a></li>
                    <li><a href="#">Change Account Info</a></li>
                    <li><a href="#">Change Interests/Habits</a></li>
                </ul>
              </li>
            <li class="has-submenu"><a href="#">App Settings</a>
              <ul class="left-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>App Settings</label></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Logout</a></li>
                    <li><a href="#">Delete Account</a></li>
                </ul>
            </li>
          </ul>
        </aside>

        <aside class="right-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>Chats</label></li>
            <li><a href="#">Hari Seldon</a></li>
            <li><a href="#">Tom Smith</a></li>
          </ul>
        </aside>

        <section class="main-section">
          <!-- content goes here -->
          <div class="row">
          	<h4>Age:</h4>
			  <div class="small-10 medium-11 columns">
			    <div class="range-slider" data-slider data-options="display_selector: #sliderOutput3;">
			      <span class="range-slider-handle" role="slider" tabindex="0"></span>
			      <span class="range-slider-active-segment"></span>
			    </div>
			  </div>
			  <div class="small-2 medium-1 columns">
			    <span id="sliderOutput3"></span>
			  </div>
			</div>
			  

			<div class="row">
				<h4 class="medium-1 columns">Sex:</h4>
				<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown medium-2 columns">Sex</button><br>
				<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
				  <li><a href="#">Male</a></li>
				  <li><a href="#">Female</a></li>
				</ul>
			</div>
			<div class="row">
				<h4 class="medium-1 columns">Year:</h4>
				<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown medium-2 columns">Year</button>
				<br>
				<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
				  <li><a href="#">None</a></li>
				  <li><a href="#">Freshman</a></li>
				  <li><a href="#">Sophomore</a></li>
				  <li><a href="#">Year</a></li>
				  <li><a href="#">Seniors</a></li>
				</ul>
			</div>

			<div class="row">
		      <label>Lottery #
		        <input type="text" placeholder="Lottery #" />
		      </label>
		    </div>

          </section>

        <a class="exit-off-canvas"></a>
      </div>
    </div>
    
  <div class="range-slider" data-slider>
  <span class="range-slider-handle" role="slider" tabindex="0"></span>
  <span class="range-slider-active-segment"></span>
  <input type="hidden">
</div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
