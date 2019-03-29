<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Friend</title>

    <link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <!-- navbar-->
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#">Friends</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarCollapse" aria-controls="navbarCollapse"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="https://facebook.com"><img src="images/facebook.png" alt="" style="weight:20px; height:20px;">
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://Twitter.com"><img src="images/twitter.png" alt="" style="weight:20px; height:20px;"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="https://google.com"><img src="images/google1.png" alt="" style="weight:20px; height:20px;"></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

<!--Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide img-fluid" src="images/15.jpg" alt="First slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                  </div>
<!-- Sign up form on the first slide-->
                  <h3 class = "first_Text">Don't be alone</h3>
                  <h4 class="first_Text1">Start making friends </h4>
                  <form class="form-signin img-fluid">
                    <a class="social_icon" href="https://facebook.com"><img src="images/facebook.png" alt="" style="weight:100px; height:100px;"></a>
                    <a class="social_icon" href="https://Twitter.com"><img src="images/twitter.png" alt="" style="weight:100px; height:100px;"></a>
                    <a class="social_icon" href="https://google.com"><img src="images/google1.png" alt="" style="weight:100px; height:100px;"></a>
                  </form>
                </div>
              </div>
              <div class="carousel-item">
                <img class="second-slide img-fluid" src="images/13.jpg">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
<!-- Sign in form on the first slide-->
                  <form action="index.php" method="post" class="form-signin img-fluid">
	                  <?php include('errors.php'); ?>
                    <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Please sign up</h1>
                    <label for="inputfullname" class="sr-only">Full name</label>
                    <input type="text" id = "inputfull_name" class="form-control" name="full_name" placeholder="full_name">
                    <label for="inputUsername" class="sr-only">Username</label>

                    <input type="text" id = "inputUsername" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>">

                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password_1" value="<?php echo $password; ?>" placeholder="Password" required>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password_2" value="<?php echo $password; ?>" placeholder="Password" required>
                     <div class="checkbox mb-3">
                      <label style="color:white;">
                        <input type="checkbox" value="remember-me" > Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block"  type="submit" name="reg_user" id= "submit">Sign up</button>
                    <p>
                      Already a member? <a href="login.php">Sign in</a>
                    </p>
                  </form>
                </div>
              </div>
              <div class="carousel-item">
                <img class="third-slide" src="images/14.jpg" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                  </div>
                <form class="form-signin" action="index.php" method="post">
                    <?php include('errors.php'); ?>
                    <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="email"  placeholder="Email address" required>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                    <div class="checkbox mb-3">
                      <label style="color:white;">
                        <input type="checkbox" value="remember-me" > Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user" id= "Sign_in">Sign in</button>

                  </form>

                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>



/*

 function writing data to file sometextfile.txt

function WriteToFile(d1,d2) {
    var fso = new ActiveXObject("Scripting.FileSystemObject");
    var s   = fso.OpenTextFile("C:/Users/Alex/Desktop/Project/webproject/sometextfile.txt",8,false,0);
    s.writeline(d1+', '+d2);
    s.Close();
}

function WriteToFile (d1,d2) {
try {
      var filePath = "chrome://myextension/files/"+"C:/Users/Alex/Desktop/Project/bootstrap_4.1/sometextfile.txt";
      netscape.security.PrivilegeManager.enablePrivilege ("UniversalXPConnect");
      var file =Components.classes["@mozilla.org/file/local;1"].createInstance(Components.interfaces.nsILocalFile );
      file.initWithPath(filePath);
        if (!file.exists())
            file.writeline(d1, d2);


      var outputStream =Components.classes["@mozilla.org/network/file-output-stream;1"].createInstance(Components.interfaces.nsIFileOutputStream);
      outputStream.init(file, 0x20 | 0x04, 00004, null);
      outputStream.write(d1 + " " + d2, content.length);
      outputStream.flush();
      outputStream.close();
      return true;
}

catch (e) {
alert(e);
return false;
}
}

  var submit = document.getElementById("submit");
    submit.onclick = function () {
    var inputUsername = document.getElementById('inputUsername').value;
    var inputEmail  = document.getElementById('inputEmail').value;
    var inputPassword = document.getElementById('inputPassword').value;
    WriteToFile(inputUsername+","+inputEmail+","+inputPassword);

  alert(inputUsername +" "+inputEmail+ " "+inputPassword);
   window.open("main.html");
 function readFile(){
    var fso = new ActiveXObject("Scripting.FileSystemObject");
    var fh = fso.OpenTextFile("C:/Users/Alex/Desktop/Project/webproject/sometextfile.txt", 1, false, 0);
    var lines = "";
    while (!fh.AtEndOfStream) {
    lines += fh.ReadLine() + "\r";
    }
    fh.Close();
    return lines;
}

    var Sign_in = document.getElementById("Sign_in");
      Sign_in.onclick = function () {
    var inputEmail1  = document.getElementById('inputEmail1').value;
    var inputPassword1 = document.getElementById('inputPassword1').value;
      if (inputEmail1 !="" && inputPassword1 !="") {
        var text = readFile();
        var lines = text.split("\r");
        lines.pop();
        var result;
        for (var i = 0; i < lines.length; i++) {
          if (lines[i].match(new RegExp(inputEmail1) && new RegExp(inputPassword1))) {
            result = "Found: " + lines[i].split(",")[1];
            window.open("main.html");
}

}

    if (result) { (result); }
    else { alert("Invalid Username or password"); }

}

}
*/



</body>

</html>
