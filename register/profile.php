<?php
                                
                                $cl_name=$_POST['cl_name'];
                                $cl_phone=$_POST['cl_number'];
                                $c_name=$_POST['c_name'];
                                $c_number=$_POST['c_number'];
                                $c_email=$_POST['c_email'];
                                $psv=$_FILES['licence'];
                                $d=['companies','client_name','client_contact','company_name','company_contact','company_email','psv_licence',  $cl_name,$cl_phone,$c_name,$c_number,$c_email,$psv];
                                $access->universal_insert($pdo,$d,'submit');

                                ?>
                                                                
                                                                      <!-- <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Content</button> -->
                                         
                                                                  <div  class="modal fade modal-large" id="profile_view" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                                                      <div class="modal-dialog" >
                                                                          <div class="modal-content">
                                                                                  <div class="modal-header">
                                                                                
                                                                                  <h3 class="text-center text-success modal-title" id="exampleModalLabel">clients</h3>
                                                                              
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="close"><span arial-hidden="true">&times</span></button>
                                                                                  </div>
                                                                                                                                    <div class="modal-body"> 
                                                                                                                                   
                                                                                                                                      <form action="" method="POST" enctype="multipart/form-data">
                                                                                                                                           <div class="row">
                                                                                                                                              <div class="col-6">
                                                                                                                                                  
                                                                                                                                                    <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_name" class="text_secondary">Clients Name </label>
                                                                                                                                                        <input type="text" name="cl_name" autocomplete="on" class="form-control" placeholder="Clients Name / Shareholder">

                                                                                                                                                      </div>
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_number" class="text_secondary">Clients Contact</label>
                                                                                                                                                        <input type="number" name="cl_number" autocomplete="on" class="form-control" placeholder="Clients Contact">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="cl_sex" class="text_secondary">Gender</label>
                                                                                                                                                        <select class="form-control">
                                                                                                                                                          <option value="selected">Choose gender </option>
                                                                                                                                                          <option value="m">Male</option>
                                                                                                                                                          <option value="f">Female</option>
                                                                                                                                                          <option value="o">Others</option>
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
                                                                                                                                                          <label for="c_photo" class="text_secondary">Upload Clients Photo</label>
                                                                                                                                                          <input type="file" name="c_photo"  class="form-control">

                                                                                                                                                        </div> 
                                                                                                                                                  </div>                                                                                                                                                    
                                                                                                                                                                      <!-- button row -->


                                                                                                                                           
                                                                                                                                                  <div class="col-6 ">
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="c_name" class="text_secondary">Company Name</label>
                                                                                                                                                        <input type="text" name="c_name" autocomplete="on" class="form-control" placeholder="Company Name">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="c_contact" class="text_secondary">Company Contact</label>
                                                                                                                                                        <input type="number" name="c_number" autocomplete="on" class="form-control" placeholder="Company Contact">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="c_email" class="text_secondary">Company Email</label></label>
                                                                                                                                                        <input type="email" name="c_email" autocomplete="on" class="form-control" placeholder="Company Email">

                                                                                                                                                      </div> 

                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="c_office" class="text_secondary">Company Office Address</label>
                                                                                                                                                        <input type="text" name="c_office" autocomplete="on" class="form-control" placeholder="Company Office Address">

                                                                                                                                                      </div> 

                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="c_route" class="text_secondary">Route Chart</label>
                                                                                                                                                        <input type="number" name="c_route" autocomplete="on" class="form-control" placeholder="Route chart">

                                                                                                                                                      </div> 
                                                                                                                                                      <div class="form-group mb-3 ">
                                                                                                                                                        <label for="license" class="text_secondary">Upload PSV Licence</label>
                                                                                                                                                        <input type="file" name="license"  class="form-control">

                                                                                                                                                      </div> 
                                                                                                                              

                                                                                                                                                     <!-- button row -->
        
                                                                                                                                        </div>
                                                                                                                                         
                                                                                                                                        
                                                                                                                                      </form>                                             
                                                                                                                                   </div>
                                                                                                                                  <div class="modal-footer">
                                                                                                                                  <div class="row">
                                                                                                                                    <div class="btn-group col-6">
                                                                                                                                            
                                                                                                                                        <!-- <button type="button" class="btn btn-primary">save changes</button> -->
                                                                                                                                   
                                                                                                                                       <button type="submit" class="btn btn-success" name="submit">save</button>
                                                                                                                                    
                                                                    
                                                                                                                                      </div>
                                                                                                                            <div class=" btn-group col-6">
                                                                                                                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button> -->
                                                                                                                                
                                                                                                                                    <button type="cancel" class="btn btn-danger" name="submit" data-dismiss="modal" style="width:100px;" >cancel</button>
                                                                    
                                                                                                                                    </div>
                                                                                                      </div>
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

                                                                            