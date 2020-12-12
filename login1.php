<!DOCTYPE html>
<head>
<style>
.log{
 color:#11ffee;
 font-size:60 px;
}
</style>
<title>Login page</title>

<link href="http://sibservices.in/snib/public/css/bootstrap.min.css" rel="stylesheet">
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet" />
<!-- FontAwesome -->
<link href="http://sibservices.in/snib/public/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!-- CustomCss -->
<link href="http://sibservices.in/snib/public/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://sibservices.in/snib/public/css/media.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="loginpage">
  <div class="container-fluid logincontainer">
    <div class="maincontainer">
      <div class="row">
        <div class="col-xs-12">
          <div class="logininner">
            <div class="loginleftimg">
        <img src="https://www.sbsgroup.com.sg/wp-content/uploads/Register-Cleaning-Company-in-Singapore.jpg" alt="Login image">
      </div>
            <div class="loginrightpanel">
              <div class="row">
                <div class="col-xs-12">
                  <div class="loginlogo">
      <!--img src="logo.jpeg"-->
                 <h1 class="log">U&L</h1>;
      </div>
                </div>
    <div class="col-xs-12">
                  <h1>Login Page</h1>
                </div>
              </div>
              <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="loginpanel">
                    <i class="loginicon"><img src="http://sibservices.in/snib/public/images/loginicon1.png" alt="" /></i>
                    <h3>Admin Login</h3>
                    <h5>Login to access Admin's data</h5>
        <div class="form-group">
                      <div class="inputgroup">

    
                <form action="admin.php" method="POST">
                        <span class="fieldicon"><img src="http://sibservices.in/snib/public/images/user-icon.png" alt=""></span>
                        <input type="hidden" name="_token" value="ozIYtTpMXS4yg6Oc1pnC3Hx4AXhS9kJEvRwMzfLF"/>
                        <input type="hidden" name="cms_privileges" value="3">
                        <input type="hidden" name="cms_privileges_name" value="Client Login">
                        <input type="text" class="form-control" name="user" placeholder="Admin username" required>
          </div>
                    </div>
                    <div class="form-group">
                      <div class="inputgroup">
                        <span class="fieldicon"><img src="http://sibservices.in/snib/public/images/lock-icon.png" alt=""></span>
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                      </div>
                    </div>


    <button class="continuebtn"><i class="fa fa-arrow-circle-right"></i>Continue</button>
                </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="loginpanel callcenter">
                    <i class="loginicon"><img src="http://sibservices.in/snib/public/images/loginicon2.png" alt="" /></i>
                    <h3>Employee Login</h3>
                    <h5>Login to access Employee's data</h5>

    <div class="form-group">
                      <div class="inputgroup">
                <form action="employee_page.php" method="POST">
                        <span class="fieldicon"><img src="http://sibservices.in/snib/public/images/user-icon2.png" alt=""></span>
                        <input type="hidden" name="_token" value="ozIYtTpMXS4yg6Oc1pnC3Hx4AXhS9kJEvRwMzfLF"/>
                        <input type="hidden" name="cms_privileges" value="4">
                        <input type="hidden" name="cms_privileges_name" value="Call Center User Login">
                        <input type="text" class="form-control" name="user" placeholder="Employee's username" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="inputgroup">
                        <span class="fieldicon"><img src="http://sibservices.in/snib/public/images/lock-icon2.png" alt=""></span>
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                      </div>
                    </div>
                    <button class="continuebtn"><i class="fa fa-arrow-circle-right"></i>Continue</button>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>
</html>






