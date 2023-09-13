

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="personal_info.php">Task One</a>
        <a class="nav-link " aria-current="page" href="temperature_converter.php">Task Two</a>
        <a class="nav-link " aria-current="page" href="grade_calculator.php">Task Three</a>
        <a class="nav-link " aria-current="page" href="even_odd_checker.php">Task Four</a>
        <a class="nav-link " aria-current="page" href="weather_report.php">Task Five</a>
        <a class="nav-link " aria-current="page" href="comparison_tool.php">Task Six</a>
        <a class="nav-link " aria-current="page" href="simple_calculator.php">Task Seven</a>
      
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
   <!-- Navbar -->








    <div class="container">
    <div class="w-50 mx-auto">
    <?php
    $name = "Sanjoy Kundu";
    $age = 23;
    $country = "Bangladesh";
    $berif_info = "This is Sanjoy. I am Computer Enginnering. I also love coding.";
    echo "Hey! My name is ".$name;
    echo "<br/>";
    echo "I am ".$age." Years Old";
    echo "<br/>";
    echo "I am form ".$country;
    echo "<br/>";
    echo "Here is my information below: ".$berif_info;
    echo "<br/>";
    ?>
    </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>