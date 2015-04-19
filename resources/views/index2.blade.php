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
          <!-- this adds Foundation Icon Fonts!! -->
          
          <div class="row">
            <!-- The Whole Card -->
              <div class="medium-9 columns box">
                <img class="box-icon" src="img/profile_pic.jpg">

                <div class="medium-5 columns personal-info">
                  <h4 class="text-center">Mario DeLaPaz</h4>
                  <p>age</p>
                  <p>building preference</p>
                  <p>lottery #</p>
                  <span>
                  <p>Using psychohistory, Seldon has discovered the declining nature of the Empire, angering the aristocratic members of the Committee of Public Safety, the de facto rulers of the Empire. The Committee considers Seldon's views and statements treasonous, and he is arrested along with young mathematician Gaal Dornick.</p></span>
                </div>
                
                <div class="trait-info medium-7 columns">
                  <div class="medium-12 columns">
                    <h5 class="project">Trait 1</h5>
                    <div class="progress">
                      <span class="meter blue" style="width:65%">
                      </span>
                    </div>
                  </div>

                <div class="medium-12 columns">
                  <h5 class="project">Trait 2</h5>
                  <div class="progress">
                    <span class="meter blue" style="width:65%">
                    </span>
                  </div>
                </div>

                <div class="medium-12 columns">
                  <h5 class="project">Trait 3</h5>
                  <div class="progress">
                    <span class="meter blue" style="width:65%">
                    </span>
                  </div>
                </div>

                <div class="medium-12 columns">
                  <h5 class="project">Trait 4</h5>
                  <div class="progress">
                    <span class="meter blue" style="width:65%">
                    </span>
                  </div>
                </div>
                <!-- Personal Info -->
              </div>
              <div class="medium-7 columns interests">
                <h5 class="project medium-12 columns">Interests:</h5>
                <div class="medium-12 columns">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                  <img class="medium-3 columns" src="img/Interests/sailing.png">
                  <img class="medium-3 columns" src="img/Interests/basketball.png">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                </div>
                <div class="medium-12 columns">
                  <img class="medium-3 columns" src="img/Interests/money.png">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                  <img class="medium-3 columns" src="img/Interests/billiards.png">
                  <img class="medium-3 columns" src="img/Interests/coding.png">
                </div>
                <div class="medium-12 columns">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                  <img class="medium-3 columns" src="img/Interests/swimming.png">
                </div>
              </div>
              <!-- The Whole Card -->
            </div>
            <div class="rate alert-box success medium-2 columns">
              <img src="img/star.png">
            </div>
            <div class="rate alert-box alert medium-2 columns">
              <img id="hand" src="img/hand.png">
            </div>
        </section>

        <a class="exit-off-canvas"></a>
      </div>
    </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
