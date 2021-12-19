<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a class="btn btn-warning btn-lg" href="{{route('home')}}"> Home </a></li>
      <li><a class="btn btn-warning btn-lg" href="{{route('adds.addlist')}}">Advertisments</a></li>
      
      @if(Session::has('user'))
      <li><a class="btn btn-warning btn-lg" href="{{route('owners.showPost')}}">Show Post</a></li>
      <li><a class="btn btn-warning btn-lg" href="{{route('owners.wantedpost')}}"> Wanted Post</a></li>
      <li><a class="btn btn-warning btn-lg" href="#"> Refund</a></li>
      <li><a class="btn btn-warning btn-lg" href="{{route('owners.report')}}"> Report </a></li>
      <li><a class="btn btn-warning btn-lg" href="{{route('owners.ownerDash')}}"> Dash Board</a></li>
      <li><a class="btn btn-warning btn-lg" href="{{route('logout')}}"> Logout</a></li>
      @else
      <li><a class="btn btn-warning btn-lg" href="{{route('login')}}"> Login</a></li>
      
      @endif
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav> 