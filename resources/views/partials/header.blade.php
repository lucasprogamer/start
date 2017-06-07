

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
                          <li><a href="{{ route('profiles.show', [Auth::user()->id]) }}"><i class="fa fa-user"></i>  Perfil</a></li>
                          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a></li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                      </ul>
                  </li>

              </ul>
          </div>


      </div>
