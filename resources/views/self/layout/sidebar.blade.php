
        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <h5 class="centered"><span class="glyphicon glyphicon-user"></span>
                 User here
                </h5>
                  <li class="mt">
                      <a href="">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                        <i class="glyphicon glyphicon-shopping-cart"></i><span>My Transactions</span>
                      </a>
                      <ul class="sub">
                         <li> <a  href="{{route('HomeOwner.transaction.list')}}">Transactions Overview</a></li>
                         <li> <a  href="{{route('HomeOwner.transaction.ledger')}}">Ledger Viewer</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Reservations</span>
                      </a>
                      <ul class="sub">
                         <li> <a  href="">Add new Reservation</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Activity</span>
                      </a>
                      <ul class="sub">
                            <li><a  href="">All Transactions</a></li>
                            <li><a  href="">Confirm Payments</a></li>
                            <li><a  href="">Verified Transactions</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-user"> </i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->