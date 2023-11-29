<div class="main_body">  
  <div class="sidebar_menu">
    <div class="inner__sidebar_menu">
      <ul>

        <li>
          <a href="{{route('user_consultation_record')}}" class="active">
            <span class="icon"><i class="fas fa-border-all"></i></span>
            <span class="list">User Dashboard</span>
          </a>
        </li>

        <li>
          <a href="{{route('user_consultation')}}" class="active">
            <span class="icon"><i class="fa fa-users"></i></span>
            <span class="list">Consultation</span>
          </a>
        </li>
        
        <li>
          <a href="{{route('user_notification')}}">
            <span class="icon"><i class="fas fa-book-medical"></i></span>
            <span class="list">Notification</span>
          </a>
        </li>

            <!-- <span class="position-absolute top-50 start-50 translate-middle badge rounded-pill bg-danger">
              
                // $msgCount = DB::table('tbl_messages')->where([
                //     ['readmsg', 0],
                //     ['receiver',1],
                //   ])->orWhere([
                //     ['readmsg',0],
                //     ['receiver',2]
                //   ])->count();
                // print($msgCount);
              ?>            
            </span> -->

      </ul>

    <div class="hamburger">
      <div class="inner_hamburger">
          <span class="arrow">
              <i class="fas fa-long-arrow-alt-left"></i>
              <i class="fas fa-long-arrow-alt-right"></i>
          </span>
      </div>
    </div>
    </div>
  </div>
