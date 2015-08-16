
        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <h5 class="centered"><span class="glyphicon glyphicon-user"></span>
                 @if(Auth::user())
                    {{Auth::user()->firstname}} 
                    {{Auth::user()->middlename}}
                    {{Auth::user()->lastname}}
                    <br/>
                    {{Auth::user()->usergroup}}
                 @endif
                </h5>
                  <li class="mt">
                      <a href="{{route('User.index')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Announcements</span>
                      </a>
                      <ul class="sub">
                         <li> <a  href="{{route('User.content.create')}}">Post new Announcement</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>User Management</span>
                      </a>
                      <ul class="sub">
                         <li> <a  href="{{route('User.account.list')}}">List Users</a></li>
                         <li> <a  href="{{route('User.account.create')}}">Add new User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bookmark"></i>
                          <span>Reservables</span>
                      </a>
                      <ul class="sub">
                        <li> <a  href="{{route('User.reservable.list')}}">Reservable Listing</a></li>
                        <li> <a  href="{{route('User.reservable.create')}}">Add new Reservable</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                      <i class="fa fa-ticket"></i>
                        <span>Fees</span>
                      </a>
                      <ul class="sub">
                        <li> <a  href="{{route('User.fee.list')}}">View Fees</a></li>
                        <li> <a  href="{{route('User.fee.create')}}">Add new Fee</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                      <i class="fa fa-desktop"></i>
                        <span>Transactions</span>
                      </a>
                      <ul class="sub">
                        <li> <a  href="{{route('User.transaction.list')}}">Transaction List</a></li>
                        <li> <a  href="{{route('User.transaction.billing.water')}}">Monthly Water Bill</a></li>
                        <li> <a  href="#">Annual Miscellaneous</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                      <i class="fa fa-desktop"></i>
                        <span>Property</span>
                      </a>
                      <ul class="sub">
                        <li> <a  href="{{route('User.property.create')}}">Create new Property</a></li>
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