<html>
  <head>
    <title>Restaurant Management System</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <!--      navbar-->
      <div class="container">
          <nav class="navbar navbar-default navbar-top" style="background-color:rgb(82, 82, 84);margin:-1;">
          <div class="collapse navbar-collapse" id="">
              <form class="navbar-form navbar-left">
                  <div class="form-group">
                      <input  type="text" name="search" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">
                      <i class="glyphicon glyphicon-search"></i>
                  </button>
              </form>
<!--              right navbar-->
              <div class="navbar-right">
                   <div class=" dropdown">
                  <button  class="btn btn-secondary btn-md dropdown-toggle" href="#" role="button" id="accountmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:6px; margin-right:30px;">Account<span class="caret"></span></button>
                  <div class="dropdown-menu" aria-labelledby="accountmenu">
                      <li><a class="dropdown-item" href="">Settings<span class="glyphicon glyphicon-cog"></span></a></li>
                      <li><a class="dropdown-item" href="">Logout<span class="glyphicon glyphicon-off"></span></a></li>
                  </div>
              </div>
              </div>
          </div>
      </nav>
      </div>
<!-- features tabs-->
         <div class=" navbar">
             <ul class="nav nav-tabs">
                 <li class="nav-item">
                     <a class="nav-link active" href="../view/user-management.php">User Management</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="../view/menu-management.php">Menu Management</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Inventory Management</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Billing and Payments</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Dashboard</a>
                 </li>
             </ul>
        </div>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <aside  id="sidebar">
            <ul class="sidebar-nav" id="sidemenu">
                
                    <div class="row">
                        <a class="accordion-toggle collapsed  toggle-switch" data-toggle="collapse" href="#menu-2">
                            <span class="sidebar-icon"></span>
                            <span class="sidebar-title">Add Menu Item</span>
                        </a>
                    </div>
                    <ul class="panel-collapse  collapse  panel-switch" role="menu" id="menu-2">
                        <li><a href="">test11</a></li>
                    </ul>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Edit Menu Item</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Delete Menu Item</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Add ingredient</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Delete ingredient</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Update ingredient</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Set Price</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Descriptions</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Pricing</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Availability Management</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Menu Categories</span>
                        </a>
                    </div>
                </li>
            </ul>
        </aside>
    </div>
</div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>