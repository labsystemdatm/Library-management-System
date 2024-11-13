<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management system</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
          .myimg{
            margin-left: -171px;
          }
          .myfrm{
            margin-top: 91px;
          }
     </style> 
</head>
<body onload="BodyLoad()">
    <div class="container container-fluid">
    <h1 class="text-primary bg-light text-center">Library Management system</h1>
    <h2 class="text-primary text-center">Dooars Academy of Technology and Management</h2>

        <div class="row align-items-start">
            <div class="col-6">
                <img class="myimg" src="this_html.png" alt="" height="400" width="800">
            </div>
            <div class="col-6">
                
                
                <!-- <?php // if (isset($_POST['choice'])){
                //     for ($i=0;$i<2;$i++)
                //     {
                //         $utype=$_POST['choice'];
                //     }
                        
                //         echo $utype; -->
                // };?>-->
                <h1 class="text-warning">Login with secure!</h1>
                <form class="container-fluid myfrm" action="loginback.php" method="post" name="loginfrm" id="loginfrm">
                <!-- <select class="form-control" name="choice" id="choice">
                    <option class="form-control"name="choice" value="admin" id="admin">Admin</option>
                    <option class="form-control"name="choice" value="teacher" id="teacher">Teacher</option>
                    <option class="form-control" name="choice"value="student" id="student">Student</option>
                </select> -->
                    <!-- <input type="text" value="<?php //echo $utype;?>"> -->
                    <input type="text" class="form-control text-warning" name="uname" id="uname" placeholder="username" required><br>
                    <input type="password" class="form-control  text-warning" name="pwd" id="pwd" placeholder="********" required><br>
                    <button class="btn btn-info text-light " name="loginbtn" id="loginbtn">Login</button>
                </form>
                <br>
                <button class="btn btn-warning text-dark " name="new_register" id="new_register" OnClick="RegFormOpen()"> Click for New Teacher Register</button><br>
                  

            </div>
            <br><div class="col-8" id="newregfrm">
            <h2 class="bg alert alert-dark text-info">Only Teachers Registers</h2><br>
            <form class="container-fluid " action="#" method="post" name="regfrm" id="regfrm">
                    <!-- <input type="text" value="<?php //echo $utype;?>"> -->
                    <input type="text" class="form-control text-warning" name="tid" id="tid" placeholder="Teacher-id" required><br>
                    <input type="text" class="form-control text-warning" name="uname" id="uname" placeholder="Full-Name" required><br>
                    <input type="email" class="form-control  text-warning" name="pwd" id="pwd" placeholder="Email Id" required><br>
                    <input type="number" class="form-control  text-warning" name="pwd" id="pwd" placeholder="Mobile-NO" required><br>
                    <input type="text" class="form-control text-warning" name="uname" id="uname" placeholder="username" required><br>
                    <input type="password" class="form-control  text-warning" name="pwd" id="pwd" placeholder="********" required><br>
                    <button class="btn btn-success text-light " name="regbtn" id="regbtn">Register</button>
                </form>
                
            </div>
        </div>
    </div>
    
   
    <br><footer><p class="alert alert-warning text-primary bg-light text-center "><strong>Copyright &copy; 2024 <a href="https://datm.co.in">DATM~LMS</a>.</strong> All rights reserve</p>
    </footer>
</body>

<script>
    function BodyLoad()
    {
        const rfrm1 = document.getElementById("newregfrm");
        rfrm1.style.display = "none";
    }
    function RegFormOpen(){
        const rfrm = document.getElementById("newregfrm");
        //const rbtn = document.getElementById("new_register");
        if (rfrm.style.display === "none") {
            rfrm.style.display = "block";   //show
            } else {
                rfrm.style.display = "none";    //hide
            }     
    }
</script>
</html>