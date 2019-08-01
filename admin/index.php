<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Admin navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="registration.admin.php">Register admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ship.orders.front.php">Create shipments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../employee/registration.employee.php">Register Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../products/registration.product.php">Add products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../trucktrip/create.trucktrip.html">Create trucktrip</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vieworders/all.html">View orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../add_employee_workdata/">Add Employee Work Data</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="../inc/logout.inc.php">Logout</a>
            </li>

        </ul>
      </div>
    </nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
