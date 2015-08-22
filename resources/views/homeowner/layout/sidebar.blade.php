<!-- sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
      <ul class="sidebar-menu" id="nav-accordion">
        <h5 class="centered"><span class="glyphicon glyphicon-user"></span>
          @if(Auth::check())
          {{Auth::user()->firstname}}
          {{Auth::user()->middlename}}
          {{Auth::user()->lastname}}
          @endif
        </h5>
        <h6 class="centered">
            {{Auth::user()->usergroup}}
        </h6>
          <li class="mt">
              <a href="{{route('HomeOwner.index')}}">
                  <i class="fa fa-dashboard"></i>
                  <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-desktop"></i>
                  <span>Bills</span>
              </a>
              <ul class="sub">
                    <li><a  href="{{route('User.bill.list')}}">My Bills</a></li>
              </ul>
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
                 <li> <a href="{{route('HomeOwner.reservation.create')}}">Add new Reservation</a></li>
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
            <li class="sub-menu">
              <a href="{{route('auth.logout')}}" >
                  <i class="glyphicon glyphicon-user"> </i>
                  <span>Logout</span>
              </a>
          </li>
      </ul>
      <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->