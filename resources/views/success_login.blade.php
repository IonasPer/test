<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="{{asset('css/style.css')}}"
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Simple Login System in Laravel</h3><br />

   @if(isset(Auth::user()->email))
    <div class="alert alert-success success-block">
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Logout</a>
    </div>
   @else
    <script>window.location = "/main";</script>
   @endif
   <div class='btn btn-success'><a href="{{url('/main/employee')}}">Create Application</a></div>
   <br />
  </div>
  
  <div class=" container vacation-list">
    <ul class="col-lg-12" style="list-style-type:none">
    @php
    foreach($applications as $application){
    $css_class= $application->status;
    @endphp
      <li><span class="details-box">{{$application->reason}}</span><span class="badge-align {{$css_class}}">{{$application->status}}</span></li>
    @php 
    } 
    @endphp
    </ul>
  </div>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
 </body>
</html>
