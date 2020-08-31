 <html lang="en">
 <head>
     <meta charset="UTF-8">
    
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>Eye of the eagle </title>
      <!-- Favicon -->
      <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Icons -->
      <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
      <!-- Page plugins -->
       <link rel="stylesheet" type="text/css" href="../icon/icofont/icofont.min.css">
      <!-- Argon CSS -->
      <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
       <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
      <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../icon/icofont/icofont.min.css">

       <title>Document</title>
 </head>
 <body>
  <!-- nav bar -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <h2>Eye of the Eagle</h2>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Locations</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Customers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="icofont-hotel"></i>
                <span class="nav-link-text">Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="icofont-ebook"></i>
                <span class="nav-link-text">Bookings</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="icofont-blogger"></i>
                <span class="nav-link-text">Blogs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
          </ul>
         
        </div>
      </div>
    </div>
  </nav>

  <!-- main body -->
  <div class="main-content" id="panel">
   

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 80px">
        
      </div>
       
      </div>
      <!-- Footer -->
      <div class="main-content" id="panel">
   

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Locations</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="#" class="plusBtn" style="color: black;" >
                  <i class="icofont-home"></i>
                </a>
                </div>
              </div>
            </div>
            <div class="row">      
           <div style="padding-left: 40px;">
              <label for="firstName">Name:</label>
               <input name="firstName" class="form-control" type="text" style="display: inline-block;">    
           </div>            
          </div>

           <div class="row">      
           <div style="padding-left: 40px;">
              <label for="price">Price:</label>
               <input name="price" class="form-control" type="text" style="display: inline-block;">    
           </div>            
          </div>
          <br>
          <div class="row">      
           <div style="padding-left: 40px;">
              <label for="photo">Photo:</label>
               <input type="file">   
           </div>            
          </div>
          <div class="row">      
           <div style="padding-left: 40px;">
              <label for="type">Type:</label>
              <select name="type" id="">
                <option value="">Forest</option>
                <option value="">Mountain</option>
              </select>   
           </div>            
          </div>

          <button class="btn-success" style="border: none;">Edit</button>
          </div>
        </div>
       
      </div>
      <!-- Footer -->
      
    </div>
  </div>
    </div>
  </div>
 </body>
 </html>