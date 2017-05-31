

      <div class="header-section">


          <a class="toggle-btn"><i class="fa fa-bars"></i></a>



          <div class="menu-right">
              <ul class="notification-menu">
                  <li>
                      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <img src="#" alt="" /> <?php // TODO: add this image ?>
                          {{ Auth::user()->name }}
                          <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                          <li><a href="{{ Auth::logout() }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                      </ul>
                  </li>

              </ul>
          </div>


      </div>
