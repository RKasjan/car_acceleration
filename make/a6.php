<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Kasjan Rozycki">

        <title>Cars acceleration</title>

        <link href="../css/bootstrap.css" rel="stylesheet">  <link href="../css/car-acceleration.css" rel="stylesheet">

      </head>
      <body>
        <nav class="navbar navbar-dark sticky-top ming flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Cars acceleration</a>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

              </button>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-3 col-lg-2 d-md-block jet sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                        
                            <li class="nav-item">
                                <a class="nav-link active" href="../index.html">
                                    <span data-feather="home"></span>
                                    Home page 
                                  </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="../make.html">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Acceleration 
                                  </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="../fuel-consumption.html">
                                    Fuel consumption 
                                  </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="../add-your-car.html">
                                    Add your car 
                                  </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="../contact-us.html">
                                    Cars acceleration
                                  </a>
                            </li>
                        </ul>
            </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <table class="table table-bordered">
                    <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Torque</th>
                    <th>Power</th>
                    <th>Acceleration</th>
                    <th>Max speed</th>
                    </tr>     
                    
                     
					  <?php include '../php/php_make/a6.php';?>
                    </table>

            </main>
        </div>
    </div>


      </body>
      </html>
