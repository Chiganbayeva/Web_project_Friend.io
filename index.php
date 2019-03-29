<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Friends</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap_3.7.css">
  <link rel="stylesheet" href="style_main.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/lightbox-plus-jquery.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap_3.7.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Friends</a>
  </div>
  <div class="collapse navbar-collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="https://www.facebook.com" class="active"><img src="images/facebook.png" class="icon_sc"> </a></li>
    <li><a href="https://www.Twitter.com"><img src="images/twitter.png" class="icon_sc" > </a></li>
    <li><a href="https://www.gmail.com"> <img src="images/google1.png" class="icon_sc" > </a></li>
    </ul>
  </div>
  </nav>
  </div>

  <div class='container'>
    <div class='row'>
      <div id="buzz" class="text-center">
        <div class="container">
            <div class="row">
            <div class='col-sm-4 first_cont'>
              <form class="form-signin" action="index.php" method="post">
              <?php include('errors.php'); ?>
                  <h1 class="h3 mb-3 font-weight-normal" >Please sign in</h1>
                  <input type="email" class="form-control" name="email"  placeholder="Email address" required>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <div class="checkbox mb-3">
                    <label style="margin-left:-200px;">
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="btn-lg btn-primary btn-block" type="submit" name="login_user">Sign in</button>
                </form>
                <p>
              		Not yet a member?<a href="javascript:PopUpShow()">Sign up</a>
              	</p>
            </div>
            <div class='col-sm-4 first_cont second_cont'>
              <?php
// Simple RSS parser v.1.0 by CyberSEO.net
$feed = file_get_contents ( "http://feeds.skynews.com/feeds/rss/politics.xml" );
//$filename = "cache.txt";
if (file_exists ( $feed ) && filesize ( $feed ) && (time () - filectime ( $feed )) < 60 * 60) {
	$content = file_get_contents ( $feed );
} else {
	$xml_parser = xml_parser_create ();
	xml_parse_into_struct ( $xml_parser, $feed, $vals, $index );
	$cnt = min ( 5, count ( $index ["TITLE"] ) );
	$content = "";
	for($i = 1; $i < $cnt; $i ++) {
		$content .= "<h3>" . html_entity_decode ( $vals [$index ["TITLE"] [$i]] ["value"], ENT_QUOTES ) . "</h3>\n";
	$content .= "<p>" . html_entity_decode ( $vals [$index ["DESCRIPTION"] [$i]] ["value"], ENT_QUOTES ) . "</p>\n";
    $content .= '<a href="' . html_entity_decode ( $vals [$index ["ITEM"] [$i]] ["value"], ENT_QUOTES ) .'"></a>';

	}
	//file_put_contents ( $filename, $content, LOCK_EX );
	xml_parser_free ( $xml_parser );

}
echo $content;
?>
<a href="#"></a>
            </div>
            <div class="b-popup" id="popup1">
              <div class="b-popup-content">
                <button type="button" class="close" aria-label="Close">
                  <a href="javascript:PopUpHide()" aria-hidden="true">&times;</a>
                </button>
                <form action="index.php" method="post" class="form-signin img-fluid">
                <?php include('errors.php'); ?>
                <h1 class="h3 mb-3 font-weight-normal">Create a new account</h1>

                  <input type="text" class="form-control" name="First_name" placeholder="First_name">
                  <input type="text" class="form-control" name="Surname" placeholder="Surname">
                  <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
                  <input type="password" class="form-control" name="password_1" placeholder="Password" required>
                  <input type="password" class="form-control" name="password_2" placeholder="Repeat password" required>
                  <label style="margin:2px auto 2px -370px;">
                  <input type="checkbox" value="remember-me" > Remember me
                  </label>

                  <div class="_5dba">
                    <span><label>Birthday</label></span>

                  <select class="_5dba" name="birthday_day" title="Day">
                    <option value="0">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29" selected="1">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
              <select aria-label="Month" name="birthday_month" id="month" title="Month" class="_5dba">
              <option value="0">Month</option>
              <option value="1">Jan</option>
              <option value="2">Feb</option>
              <option value="3">Mar</option>
              <option value="4">Apr</option>
              <option value="5">May</option>
              <option value="6">Jun</option>
              <option value="7">Jul</option>
              <option value="8">Aug</option>
              <option value="9">Sept</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12" selected="1">Dec</option>
            </select>
            <select aria-label="Year" name="birthday_year" id="year" title="Year" class="_5dba">
            <option value="0">Year</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993" selected="1">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
            <option value="1929">1929</option>
            <option value="1928">1928</option>
            <option value="1927">1927</option>
            <option value="1926">1926</option>
            <option value="1925">1925</option>
            <option value="1924">1924</option>
            <option value="1923">1923</option>
            <option value="1922">1922</option>
            <option value="1921">1921</option>
            <option value="1920">1920</option>
            <option value="1919">1919</option>
            <option value="1918">1918</option>
            <option value="1917">1917</option>
            <option value="1916">1916</option>
            <option value="1915">1915</option>
            <option value="1914">1914</option>
            <option value="1913">1913</option>
            <option value="1912">1912</option>
            <option value="1911">1911</option>
            <option value="1910">1910</option>
            <option value="1909">1909</option>
            <option value="1908">1908</option>
            <option value="1907">1907</option>
            <option value="1906">1906</option>
            <option value="1905">1905</option>
          </select>
        </div>
        <div class="">
          <span>
            <input type="radio" name="sex" value="1">
            <label>Female</label>
          </span>
          <span >
            <input type="radio" name="sex" value="2">
            <label>Male</label>
          </span>

        </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user" >
                    <a href="javascript:PopUpHide()" style="color:white;">Sign up</a>
                  </button>
                  <p>
                    Already a member? <a href="#home">Sign in</a>
                  </p>
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


  <script src="https://code.jquery.com/jquery.js"></script>
  <script type="text/javascript" src="dist/js/bootstrap.js"></script>
  <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
  <script type="text/javascript" src="js/jqiry-3.3.1.min.js">

  </script>

  <script>

  document.clear();
      $(document).ready(function(){
          //Скрыть PopUp при загрузке страницы
          PopUpHide();
      });
      
      //Функция отображения PopUp
      function PopUpShow(){
          $("#popup1").show();
      }
      //Функция скрытия PopUp
      function PopUpHide(){
          $("#popup1").hide();
      }
  </script>
</body>
</html>
