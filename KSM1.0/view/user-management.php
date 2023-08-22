<html>
  <head>
    <title>Restaurant Management System</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  </head>
  <body>
      <!--      navbar-->
      <nav class="navbar navbar-default navbar-top" style="background-color:rgb(82, 82, 84);margin:0;">
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
<!-- features tabs-->
         <div class=" navbar">
             <ul class="nav nav-tabs">
                 <li class="nav-item">
                     <a class="nav-link active" href="">User Management</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Stock Management</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Statistics</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="">Other</a>
                 </li>
             </ul>
        </div>
      <div class="feature-container">
         <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-offset-2">
                 <div href="" class="item" style="height:250px;margin:10px;"> 
                      <a href="" style="text-decoration:none;color:black">
                          <div class="text-center" style="padding-top:10px;margin:0;">
                          <img src="../images/user/add-user.png" class="rounded" alt="add-user image" style="height:175px">
                      </div>
                      <div class="text-center">
                          <h2>Add-User</h2>
                      </div>
                      </a>
                  </div>
              </div>        
              <div class="col-lg-4">
                  <div href="" class="item" style="height:250px;margin:10px;"> 
                      <a href="" style="text-decoration:none;color:black">
                          <div class="text-center" style="padding-top:10px;margin:0;">
                          <img src="../images/user/edit-user.png" class="rounded" alt="edit-user image" style="height:175px">
                      </div>
                      <div class="text-center">
                          <h2>Edit-User</h2>
                      </div>
                      </a>
                  </div>
              </div>        
           </div>
          <div class="row">
              <div class="col-lg-4 col-md-offset-4">
                  <div href="" class="item" style="height:250px;margin:10px;"> 
                      <a href="" style="text-decoration:none;color:black">
                          <div class="text-center" style="padding-top:10px;margin:0;">
                          <img src="../images/user/add-user.png" class="rounded" alt="add-user image" style="height:175px">
                      </div>
                      <div class="text-center">
                          <h2>Delete-User</h2>
                      </div>
                      </a>
                  </div>
              </div>        
            </div>
          </div>
      </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>