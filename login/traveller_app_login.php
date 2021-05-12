  <?php

  include ('../headers/header.php');

  if(isset($_POST['login'])){
    $val1=$_POST['username'];
    $val2=$_POST['pswd'];
    $dg=['client_username','client_contact','client_email','client_password'];
    $access->verifying($pdo,$val1,$val2,'companies','../admin/dash_board.php',$dg,'client_username','client_password');
  }


  
  ?>
     <!-- C:\xampp\htdocs\hack_thone\login\traveller_app_login.php -->
    <div class="container position-absolute top-50 start-50 translate-middle">
       
            <div class="card-body">
                <div class="row justify-content-center">
                      <!-- <div class="row">
                      <div class="container col-xl-4 col-lg-4 col-xm-3 col-xs-12 col-sm-12 col-md-5">
                          <div class="row justify-content-center">
                              <img src="../on_images/travelers.svg" class="image" > 
                          </div>
                       </div>
                      </div>
                      <div class="row"> -->
                      <div class="container mt-1 back_app col-xl-4 col-lg-4 col-xm-3 col-xs-12 col-sm-12 col-md-5">
                                    <form method="POST" action="">   
                                    <h2 class="card-title text-center mt-2 ">Traveler App</h2>
                                    <h6 class="card-subtitle mb-2 text-center">Travell with us </h6>
                                     <?php 
                                    //  if(isset($err_msg))
                                    //  {
                                    //     echo '<label class="text-danger">'.$err_msg.'</label>';
                                    //  }
                                     ?>
                                    <div class="form-group ">
                                      <label for="username" class="text-white">Username</label>
                                      <input type="text" class="form-control border-primary" id="username" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                                      <label for="input_Password" class="mt-3 text-white">Password</label>
                                      <input type="password" class="form-control border-primary" id="input_Password" placeholder="Password" name="pswd">
                                    </div>
                                      <button type="submit" class="btn btn-primary btn-sm btn-block mt-3 w-100" name="login">login</button>
                                    <div>
                                      <div class="mb-4 text-center">
                                      <a href="#" class="text-white mb-2">create account</a>
                                      </div>
                                    </div>  
                                    </form>    
                                    </div>
                      <!-- </div>   -->
                                 </div>                           

                  </div>
               
            
            
            </div>
        </div>
    </div>
  <?php
  include('../footers/footer.php');
  ?>
