<div id="top-nav" class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-toggle"></span>
              </button>
              <a class="navbar-brand" href="/admin">Student | Dashboard</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                  <a class="dropdown-toggle" role="button" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_session']; ?> <span class="caret"></span></a>
                  <ul id="g-account-menu" class="dropdown-menu" role="menu">
                    <li><a href="/content/profile">Profile</a></li>
                  </ul>
                </li>
                <li><a href="/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
              </ul>
            </div>
          </div><!-- /container -->
        </div>