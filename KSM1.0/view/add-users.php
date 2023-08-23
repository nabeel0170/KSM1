<html>
    <head>
        <title>Restaurant Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!--      navbar-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex flex-column datetime m-2">
                    <div class="date">
                        <span id="dayname">Day</span>
                        <span id="month">Month</span>:
                        <span id="daynum">00</span>
                        <span id="year">Year</span>
                    </div>
                    <div class="time">
                        <span id="hour">00</span>:
                        <span id="minutes">00</span>:
                        <span id="seconds">00</span>:
                        <span id="period">AM</span>
                    </div>

                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto"> <!-- Use "ml-auto" to push items to the right -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><span style="margin-right:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                            </svg></span>Settings</a></li>
                                <li><a class="dropdown-item" href="#"><span style="margin-right:5px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                            </svg></span></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--              right navbar-->

        </nav>
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
                    <a class="nav-link active" href="../view/inventory-management.php">Inventory Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../view/billing-payments.php">Billing and Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../view/dashboard.php">Dashboard</a>
                </li>
            </ul>
        </div>
        <hr>
            <div style="display:flex;">
                <div class="side-bar"style="width:fit-content;">
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                        <div class="side-nav">
                            <div class="list-group list-group-flush " style="width:fit-content;text-align:center;padding:20px;height:270px;justify-content:space-around">
                                <div>
                                    <a href="../view/add-users.php" class="list-group-item-action py-2 ripple" aria-current="true" style="text-decoration:none;">
                                        <span>Add Users</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="" class="list-group-item-action py-2 ripple" aria-current="true" style="text-decoration:none;">
                                        <span>View & Edit Users</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="" class="list-group-item-action py-2 ripple" aria-current="true" style="text-decoration:none;">
                                        <span>Remove Users</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav> 
                </div>
                <div class="section" style="width:100%;">
                    <div class="container justify-content-center align-items-center " style="width:500px;padding:30px">
                        <form>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Fname">First Name</span>
                                    </div>
                                    <input type="text" class="form-control" id="firstName" placeholder="User's First Name" aria-label="First Name" aria-describedby="Fname" maxlength="30" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Lname">Last Name</span>
                                    </div>
                                    <input type="text" class="form-control" id="lastName" placeholder="User's Last Name" aria-label="Last Name" aria-describedby="Lname" maxlength="30" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Email">Email</span>
                                    </div>
                                    <input type="text" class="form-control" id="user_Email" placeholder="User's Email" aria-label="User Email" aria-describedby="Email" maxlength="100" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Unic">NIC</span>
                                    </div>
                                    <input type="text" class="form-control" id="user_Nic" placeholder="User's Nic" aria-label="User Nic" aria-describedby="Unic" maxlength="20" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Userdob">Date of Birth</span>
                                    </div>
                                    <input type="Date" class="form-control" id="user_Dob"  aria-label="User Date of Birth" aria-describedby="Userdob"  required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Contact">Contact Number</span>
                                    </div>
                                    <input type="text" class="form-control" id="user_Contact" placeholder="User's Contact Number" aria-label="User Contact" aria-describedby="Contact" maxlength="15" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Username">Username</span>
                                    </div>
                                    <input type="text" class="form-control" id="userName" placeholder="Set Username" aria-label="Username" aria-describedby="Username" maxlength="20" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="Password">Password</span>
                                    </div>
                                    <input type="text" class="form-control" id="userPassword" placeholder="Set Password" aria-label="User Password" aria-describedby="Password" maxlength="35" required>
                                </div>
                            </div>
                            <div class=" d-flex flex-column ">
                                <select class="forms-select mb-3" id="userRole" aria-label="Users Role" required>
                                    <option  disabled selected value="">Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Cashier</option>
                                    <option value="3">Chef</option>
                                    <option value="4">Stock Manager</option>
                                </select>
                                <div class="mb-3">

                                    <input class="form-control " type="file"  id="formFile" required>
                                </div>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
            <script type="text/javascript">
                function updateClock() {
                    var now = new Date();
                    var dname = now.getDay(),
                            mo = now.getMonth(),
                            dnum = now.getDate(),
                            yr = now.getFullYear(),
                            hou = now.getHours(),
                            min = now.getMinutes(),
                            sec = now.getSeconds(),
                            pe = "AM";
                    if (hou == 0) {
                        hou = 12;
                    }
                    if (hou > 12) {
                        hou = hou - 12;
                        pe = "PM";
                    }
                    Number.prototype.pad = function (digits) {
                        for (var n = this.toString(); n.length < digits; n = 0 + n)
                            ;
                        return n;

                    }

                    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                    var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                    for (var i = 0; i < ids.length; i++)
                        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
                }
                function initClock() {
                    updateClock();
                    window.setInterval(updateClock, 1000);
                }
                initClock();
            </script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>