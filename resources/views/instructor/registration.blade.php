<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <style>
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 580px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 60px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 90%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 100px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
 
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="title" >Apply as an Instructor</div>
            
                <form action="{{route('register-instructor')}}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                     @csrf

                <div class="form-group">
                <strong>Your Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name"><br>
                <span class="text-danger">
                       @error('name')
                          {{$message}}
                      @enderror
                </span>
            </div>
            
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="you@example.com"><br>
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="form-group">
                <strong>Mobile Number</strong>
                <input type="tel" name="phone" class="form-control" placeholder="Mobile Number"><br>
                <span class="text-danger">
                  @error('phone')
                      {{$message}}
                  @enderror
                </span>
            </div>
             
            <div class="form-group">
                <strong>Educational Background</strong>
                <input type="text" name="educational_background" class="form-control" placeholder="e.g. CSE,AIUB,Bangladesh"><br>
                <span class="text-danger">
                  @error('educational_background')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <strong>Work Experience</strong>
            <p>Current organization and designation/position</p>

            <div class="form-group">
                <strong>Organization Name</strong>
                <input type="text" name="organization_name" class="form-control" placeholder="Your Currently Working at.."><br>
                <span class="text-danger">
                  @error('organization_name')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Designation Name</strong>
                <input type="text" name="designation_name" class="form-control" placeholder="Designation"><br>
                <span class="text-danger">
                  @error('designation_name')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Department</strong>
                <input type="text" name="department" class="form-control" placeholder="e.g. Department of Computer Science"><br>
                <span class="text-danger">
                  @error('department')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Linkedin Profile Link</strong>
                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin Profile Link.."><br>
                <span class="text-danger">
                  @error('linkedin')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Topics You are Interested to Teach</strong>
                <input type="text" name="topics" class="form-control" placeholder="e.g. AWS Basics,PHP Basics,Laravel.."><br>
                <span class="text-danger">
                  @error('topics')
                      {{$message}}
                  @enderror
                </span>
            </div>

          

            
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"><BR>
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>

            <h6>Already Registered !! <a href="login-instructor"> Sign in </a></h6>
        
        </form>
    </body>
</html>
