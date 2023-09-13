<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even Odd Checker</title>
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
        <form  action="odd_even_post.php" method="POST" class="w-50 mx-auto mt-5 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Write Your Number</label>
            <input type="number" name="check_number" class="form-control" id="" placeholder="Enter Your Marks Here">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-warning">RESULT</button>
        </div>
        </form>
        <br> 
        <div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>