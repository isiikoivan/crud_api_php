<?php
                                require ('../headers/header.php');
                                $id=$_GET['company_id'];
                                $access->locate($pdo,$id,'companies');
                                $dataling=$access->locate($pdo,$id,'companies');
                               
                                $cl_name=$_POST['cl_name'];
                                $cl_contact=$_POST['cl_number'];
                                $cl_gender=$_POST['cl_gender'];
                                $cl_nin=$_POST['cl_nin'];
                                $cl_email=$_POST['cl_email'];
                                $cl_username=$_POST['cl_username'];

                                $co_name=$_POST['co_name'];
                                $co_contact=$_POST['co_number'];
                                $co_email=$_POST['co_email'];
                                $co_address=$_POST['co_address'];
                                $route_chart=$_POST['co_route'];
                                $psv=$_FILES['licence'];

                                $cl_password=md5('admin');
                                $s_cat="user";
                                
                                $d=[
                                  'companies','client_name','client_contact','client_gender','client_nin','client_email','client_username'
                                  ,'company_name','company_contact','company_email','company_address','route_chart','psv_licence','client_password','client_cat'
                                  , $cl_name,$cl_contact,$cl_gender,$cl_nin,$cl_email,$cl_username,$co_name,$co_contact,$co_email,$co_address,$route_chart,$psv,$cl_password,$s_cat
                                ];
                              
                                $access->updating($pdo,$d,$id,'update','dash_board.php')

                                ?>
                                                                
                                                                      <!-- <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Content</button> -->
                                         
                                                                  <div  class="modal fade modal-large" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                                                      <div class="modal-dialog" >
                                                                          <div class="modal-content">
                                                                                  <div class="modal-header">
                                                                                
                                                                                  <h3 class="text-center text-success modal-title" id="exampleModalLabel">Registering Company</h3>
                                                                              
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="close"><span arial-hidden="true">&times</span></button>
                                                                                  </div>
                                                                                                                                    <div class="modal-body"> 
                                                                                                                                   
                                                                                                                                      <form action="" method="POST" enctype="multipart/form-data">
                                                                                                                                           <div class="row">
                                                                                                                                              <div class="col-6">
                                                                                                                                                  
                                                                                                                                                    <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_name" class="text_secondary">Clients Name </label>
                                                                                                                                                        <input value="<?= $dataling->client_name;?>" type="text" name="cl_name" autocomplete="on" class="form-control" placeholder="Clients Name / Shareholder">

                                                                                                                                                      </div>
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_number" class="text_secondary">Clients Contact</label>
                                                                                                                                                        <input type="text" name="cl_number"  max="11" min="10" autocomplete="on" class="form-control" placeholder="Clients Contact">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_gender" class="text_secondary">Gender</label>
                                                                                                                                                        <select class="form-control">
                                                                                                                                                          <option value="selected" name="cl_gender">Choose gender </option>
                                                                                                                                                          <option value="M">Male</option>
                                                                                                                                                          <option value="F">Female</option>
                                                                                                                                                          <option value="O">Others</option>
                                                                                                                                                        </select>

                                                                                                                                                      </div> 

                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                          <label for="cl_nin" class="text_secondary">NIN Number </label>
                                                                                                                                                          <input type="text" name="cl_nin" autocomplete="on" class="form-control" placeholder="NIN number">

                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group mb-3 ">
                                                                                                                                                          <label for="cl_email" class="text_secondary">Clients Email</label></label>
                                                                                                                                                          <input type="email" name="cl_email" autocomplete="on" class="form-control" placeholder="Company Email">

                                                                                                                                                        </div>
                                                                                                                                                        
                                                                                                                                                        <div class="form-group mb-3 ">
                                                                                                                                                          <label for="cl_username" class="text_secondary">Username</label>
                                                                                                                                                          <input type="text" name="cl_username"  class="form-control">

                                                                                                                                                        </div> 
                                                                                                                                                  </div>                                                                                                                                                    
                                                                                                                                                                      <!-- button row -->


                                                                                                                                           
                                                                                                                                                  <div class="col-6 ">
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="co_name" class="text_secondary">Company Name</label>
                                                                                                                                                        <input type="text" name="co_name" autocomplete="on" class="form-control" placeholder="Company Name">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="co_number" class="text_secondary">Company Contact</label>
                                                                                                                                                        <input type="text" max="11" min="10" name="co_number" autocomplete="on" class="form-control" placeholder="Company Contact">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="co_email" class="text_secondary">Company Email</label></label>
                                                                                                                                                        <input type="email" name="co_email" autocomplete="on" class="form-control" placeholder="Company Email">

                                                                                                                                                      </div> 

                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="co_address" class="text_secondary">Company Office Address</label>
                                                                                                                                                        <input type="text" name="co_address" autocomplete="on" class="form-control" placeholder="Company Office Address">

                                                                                                                                                      </div> 

                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="co_route" class="text_secondary">Route Chart</label>
                                                                                                                                                        <input type="text" name="co_route" autocomplete="on" class="form-control" placeholder="Route chart">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="licence" class="text_secondary">Upload PSV Licence</label>
                                                                                                                                                        <input type="file" name="licence"  class="form-control">

                                                                                                                                                      </div> 
                                                                                                                              

                                                                                                                                                     <!-- button row -->
        
                                                                                                                                        </div>
                                                                                                                                        <div class="btn-group col-6">
                                                                                                                                            
                                                                                                                                            <!-- <button type="button" class="btn btn-primary">save changes</button> -->
                                                                                                                                       
                                                                                                                                           <button type="submit" class="btn btn-success" name="submit">save</button>
                                                                                                                                        
                                                                        
                                                                                                                                          </div>
                                                                                                                                <div class=" btn-group col-6">
                                                                                                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button> -->
                                                                                                                                    
                                                                                                                                        <button type="cancel" class="btn btn-danger" name="submit" data-dismiss="modal" style="width:100px;" >cancel</button>
                                                                        
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                      </form>                                             
                                                                                                                                   </div>
                                                                                                                                  <div class="modal-footer">

                                                                                                  </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                            </div>
                                                                                     </div>
                                                                            </div>
                                                                     </div>


                                                                                                    
                                            
                                                                  
                                            <!--</div>   end form -->
                                          <!-- </div>
                                        </div>
                                              test/display row 
                                  
                                </div>
                              </div> -->

                                                                            