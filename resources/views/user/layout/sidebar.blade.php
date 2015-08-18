<!--sidebar start-->
<aside>
  <!-- sidebar menu start-->
  <div id="sidebar"  class="nav-collapse ">
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
              <a href="javascript:;" class="content" >
                  <i class="fa fa-users"></i>
                  <span>Announcements</span>
              </a>
              <ul class="sub">
                 <li> <a href="{{route('User.content.list')}}" class="content-list">View Announcements</a></li>
                 <li> <a href="{{route('User.content.create')}}" class="content-create">Post new Announcement</a></li>
              </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;"  class="account">
                  <i class="fa fa-users"></i>
                  <span>User Management</span>
              </a>
              <ul class="sub">
                 <li><a href="{{route('User.account.list')}}" class="account-list">List Users</a></li>
                 <li><a href="{{route('User.account.create')}}" class="account-create">Add new User</a></li>
              </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;" class="reservable">
                  <i class="fa fa-bookmark"></i>
                  <span>Reservables</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.reservable.list')}}" class="reservable-list">Reservable Listing</a></li>
                <li> <a  href="{{route('User.reservable.create')}}" class="reservable-create">Add new Reservable</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="fee">
              <i class="fa fa-ticket"></i>
                <span>Fees</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.fee.list')}}"  class="fee-list">View Fees</a></li>
                <li> <a  href="{{route('User.fee.create')}}" class="fee-create">Add new Fee</a></li>
                <li> <a  href="{{route('User.fee.trash')}}" class="fee-trash">View Trashed Fees</a></li>
              </ul>
          </li>

           <li class="sub-menu">
            <a href="javascript:;"  class="meter">
              <i class="fa fa-desktop"></i>
                <span>Meters</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.meter.create')}}" class="meter-create">Create new Meter</a></li>
                <li> <a  href="{{route('User.meter.list')}}" class="meter-list">Meter Listing</a></li>
                <li> <a  href="{{route('User.meter.trash')}}" class="meter-trash">View Trashed Meters</a></li>
              </ul>
          </li>
             <li class="sub-menu">
            <a href="javascript:;"  class="meter-reading">
              <i class="fa fa-desktop"></i>
                <span>Meter Readings</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.meter.reading.create')}}" class="meter-reading-create">Create new Meter Reading</a></li>
                <li> <a  href="{{route('User.meter.reading.list')}}" class="meter-reading-list">Meter Reading List</a></li>
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