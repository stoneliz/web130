<!DOCTYPE html>
<html>
<head>
    <title>Seattle Central Times</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
    <header>
        <h1>Seattle Central Times</h1>
    </header>
    <div><?php
  $json_string = file_get_contents("http://api.wunderground.com/api/cde81439557d0a9e/geolookup/conditions/q/IA/Seattle.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  echo "Current temperature in ${location} is: ${temp_f}\n";
?></div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header" href="#">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                    <span class="sr-only">MENU</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="campus.php">Campus</a>
                    </li>
                    <li class="">
                        <a href="community.php">Community</a>
                    </li>
                    <li class="">
                        <a href="opinion.php">Opinion</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="login-logout" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="container">
        <section class="row">
            <h3>Editor Login</h3>
            <form action="#" method="post" class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="username">Email address</label>
                    <input type="email" class="form-control" id="username" name="username" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button id="login-button" type="submit" class="btn btn-default">Login</button>
            </form>
        </section>
    </main>
    

    <script type="text/javascript">
        var js_page = 'login_page';
    </script>
    <script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>