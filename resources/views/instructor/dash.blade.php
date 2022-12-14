<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
  <a href="{{route('instructor_Home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="{{route('instructor_Profile')}}"><i class="fa fa-fw fa-address-card-o"></i> Profile</a>
  
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="{{route('upload.file')}}"><i class='fa fa-fw fa-file-text'></i> Course</a>
  <a href="{{route('courseList')}}"><i class='fa fa-fw fa-eye'></i> Course List</a>
  <a href="{{route('logout')}}"> <i class="fa fa-fw fa-sign-out"></i> LogOut</a>
</div>



<div class="main">
  <h2>Welcome to   Dashboard</h2>
  <p></p>
  <p></p>
  <p></p>
</div>
     
</body>
</html> 
