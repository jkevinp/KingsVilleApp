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
                  <i class="fa fa-area-chart"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="bill">
              <i class="fa fa-bolt"></i>
                <span>Bills</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.bill.list')}}" class="bill-list"><i class='fa fa-list'></i> Show All Bills</a></li>
              </ul>
          </li>
            <li class="sub-menu">
              <a href="javascript:;" class="content" >
                  <i class="fa fa-bullhorn"></i>
                  <span>Announcements</span>
              </a>
              <ul class="sub">
                 <li> <a href="{{route('User.content.list')}}" class="content-list"><i class='fa fa-list'></i> View Announcements</a></li>
                 <li> <a href="{{route('User.content.create')}}" class="content-create"><i class='fa fa-plus'></i> Post Announcement</a></li>
              </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;"  class="account">
                  <i class="fa fa-users"></i>
                  <span>User Management</span>
              </a>
              <ul class="sub">
                 <li><a href="{{route('User.account.list')}}" class="account-list"><i class='fa fa-list'></i> List Users</a></li>
                 <li><a href="{{route('User.account.create')}}" class="account-create"><i class='fa fa-plus'></i> Add new User</a></li>
              </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;" class="reservable">
                  <i class="fa fa-book"></i>
                  <span>Reservables</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.reservable.list')}}" class="reservable-list"><i class='fa fa-list'></i> Reservable Listing</a></li>
                <li> <a  href="{{route('User.reservable.create')}}" class="reservable-create"><i class='fa fa-plus'></i> Add new Reservable</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="fee">
              <i class="fa fa-ticket"></i>
                <span>Fees</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.fee.list')}}"  class="fee-list"><i class='fa fa-list'></i> View Fees</a></li>
                <li> <a  href="{{route('User.fee.create')}}" class="fee-create"><i class='fa fa-plus'></i> Add new Fee</a></li>
                <li> <a  href="{{route('User.fee.trash')}}" class="fee-trash"><i class='fa fa-trash'></i> View Trashed Fees</a></li>
              </ul>
          </li>

           <li class="sub-menu">
            <a href="javascript:;"  class="meter">
              <i class="fa fa-tachometer"></i>
                <span>Meters</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.meter.create')}}" class="meter-create"><i class='fa fa-plus'></i> Create new Meter</a></li>
                <li> <a  href="{{route('User.meter.list')}}" class="meter-list"><i class='fa fa-list'></i> Meter Listing</a></li>
                <li> <a  href="{{route('User.meter.trash')}}" class="meter-trash"><i class='fa fa-trash'></i> View Trashed Meters</a></li>
              </ul>
          </li>
             <li class="sub-menu">
            <a href="javascript:;"  class="meter-reading">
              <i class="fa fa-desktop"></i>
                <span>Meter Readings</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.meter.reading.create')}}" class="meter-reading-create"><i class='fa fa-plus'></i> Create new Meter Reading</a></li>
                <li> <a  href="{{route('User.meter.reading.list')}}" class="meter-reading-list"><i class='fa fa-list'></i> Meter Reading List</a></li>
              </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-exchange"></i>
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
              <i class="fa fa-home"></i>
                <span>Property</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.property.create')}}"><i class='fa fa-plus'></i> Create new Property</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa  fa-clock-o"></i>
                <span>Reservations</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.property.create')}}"><i class='fa fa-plus'></i> Create new Property</a></li>
              </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="bill-type">
              <i class="fa fa-gears"></i>
                <span>Bill Type</span>
              </a>
              <ul class="sub">
                <li> <a  href="{{route('User.bill.type.list')}}" class="bill-type-list"><i class='fa fa-list'></i> Bill Type List</a></li>
                <li> <a  href="{{route('User.bill.type.create')}}" class="bill-type-create"><i class='fa fa-plus'></i> Add new Bill Type</a></li>
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


<div class="col-lg-3 ds col-lg-offset-9"  id="div_search" style="position:fixed; top:60px; right:-300px; z-index:9999999999; display:none;">
  <div class="">
    <input type="text" class="opacity5 form-control text-center"  placeholder="Search" />
  </div>   
  <div class="desc">
    <div class="thumb">
      <span class="badge bg-theme">
        <i class="fa fa-clock-o"></i>
      </span>
    </div>
    <div class="details">
      <p><muted>Title</muted><br>
         <a href="#">Link</a>
      </p>
    </div>
  </div>
</div>
<!--sidebar end-->