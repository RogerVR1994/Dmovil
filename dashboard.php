<?php
include "../../connect.php";
  
  $link= db_Connection();
  $result= $link->query("SELECT saldo as saldo from Usuarios where nombre = 'Rogelio'");
?>

<?php 
  if($result!==FALSE){
     while($row = $result->fetch_assoc()) {
        $row = $result['saldo'];
     }
     $link->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="blank, starter">
    

    <title>Portal de usuario</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/tec.png">
    <link rel="icon" href="assets/img/teclogo.png">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>

  <body class="pace-done sidebar-folded">

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-left sidebar-light sidebar-expand-lg">
      <header class="sidebar-header" style="background-color: #ffffff;color:#ffffff">
        <a class="logo-icon" href="#"><img src="assets/img/teclogo.png" alt="logo icon" style="overflow: hidden"; height="40px" width="40px"></a>
        <span><h1>&nbsp;Dinero Móvil</h1></span>
        <span class="sidebar-toggle-fold">::before</span>
      </header>

      <nav class="sidebar-navigation">
        <li class="menu-category">Navegación</li>

        <ul class="menu">
          <li class="menu-item active">
            <a class="menu-link" href="#">
              <span class="icon fa fa-home"></span>
              <span class="title">Inicio</span>
            </a>
          </li>


          <li class="menu-item">
            <a class="menu-link" href="login">
              <span class="icon fa fa-sign-out"></span>
              <span class="title">Salir</span>
            </a>
          </li>
        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->

 

    <!-- Topbar -->
    <header class="topbar topbar-inverse bg-info">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
  
  &nbsp;&nbsp;&nbsp;
      </div>

      <div class="topbar-right">
        <ul class="topbar-btns">

         <h2 style="color: white">Mi Portal</h2>

        </ul>
  

      </div>
    </header>
    <!-- END Topbar -->


    <main class="main-container">
      <header class="header" style="margin-bottom:0px;">
        <div class="header-bar">
          <h2>Inicio</h2>
            
        </div>
      </header>
      <div class="main-content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Mi Saldo</h3>
              <div class="card-body">
                <div style="height: 100px;">
                  <h1 style="text-align: center;  font-size: 40px;">$ <?php echo '<p>'.$saldo.'</p>'; ?></h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Mi Estado de Cuenta</h3>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th scope="col">ID Transacción</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Fecha</th>
                  </thead>  
                  <tbody>
                    <tr>
                      <th scope="row">1483</th>
                      <td>Depósito</td>
                      <td>$ 2435.50</td>
                      <td>3 de Mayo de 2018</td>
                    </tr>

                    <tr>
                      <th scope="row">1852</th>
                      <td>Depósito</td>
                      <td>$ 495.00</td>
                      <td>2 de Mayo de 2018</td>
                    </tr>

                    <tr>
                      <th scope="row">1983</th>
                      <td>Retiro</td>
                      <td>$ 125.00</td>
                      <td>1 de Mayo de 2018</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <h3>Depositar a una cuenta</h3>
              <form action="dashboard.php" method="post">
                <div class="form-group">
                  <label for="NumeroCuenta">Número de Cuenta</label>
                  <input type="text" name="NumeroCuenta" id="NumeroCuenta">
                  <br>
                  <label for="Cantidad">Monto</label>
                  <input type="text" name="Cantidad" id="Cantidad">
                  <br>
                  <label for="banco">Banco</label>
                  <select class="form-control" id="banco">
                    <option>Banamex</option>
                    <option>Bancomer</option>
                    <option>Gentera</option>
                    <option>ScotiaBank</option>
                    <option>Banco Azteca</option>
                  </select>
                  <br>
                  <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
   


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2017 <a href="https://github.com/RogerVR1994/Redesqq">Github</a>. Todos los derechos reservados.</p>
          </div>

          <div class="col-md-6">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="#">Condiciones Generales de uso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Aviso de privacidad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Imprint</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->

    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/script.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
      });
    </script>
        <script>
    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'myfirstchart1',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        { year: '2008', value: 101 },
        { year: '2009', value: 85 },
        { year: '2010', value: 120 },
        { year: '2011', value: 103 },
        { year: '2012', value: 94 },
        { year: '2013', value: 81 },
        { year: '2014', value: 77 },
        { year: '2015', value: 68 },
        { year: '2016', value: 70 },
        { year: '2017', value: 42 }
      ],
      // The name of the data record attribute that contains x-values.
      ykeys: ['a'],
      labels: ['Individual'],
      pointSize: 3,
      fillOpacity: 0,
      pointStrokeColors: ['#9966ff'],
      behaveLikeLine: true,
      gridLineColor: '#ebebeb',
      lineWidth: 1,
      hideHover: 'auto',
      lineColors: ['#9966ff'],
      resize: true
    });
  </script>

  </body>
</html>