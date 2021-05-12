<?php
// session_start();
 include ("../headers/header.php"); 
 $a=[$pdo,'companies'];
$access->retriving($a);


?>
            
            <?php
                                          include ("../register/register_company.php");
                                          include ("../register/clients_view.php");
                                          include ("../register/music.php");
                                          include ("../register/verify.php");
                                        ?>
<div class="container-fluid mt-4">

<?php 
       session_start();

        //    print_r($_SESSION['all_data']);//all data in this array
        //    print_r($_SESSION['all_data']['names']);
    
       
?>
         <div class="row">
            <div class="col-xl-2 col-lg-2 col-sm-12">
                 <!-- <div class="panel "> -->
                    <!-- <div class="panel-heading justify-content-center">
                          <img src="../on_images/Travel_mode.svg" alt="" style="width:50px;"><span><?php //print($_SESSION['all_data']['names'])?></span>
                    </div> -->
                        <!-- <div class="panel-body">
                               <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active panel-width" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">home</div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">proflie</div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">msg</div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">setting</div>
                                    </div>
                              </div> 
                        </div>
                 </div> -->
                 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          comments
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
         not available at the moment
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          requests
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          messages
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

 
                                        <!-- <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ullam, 
                                            nam voluptatem officia repellendus illum nihil officiis similique iste qui
                                            soluta, perspiciatis pariatur alias dicta quam totam asperiores quia suscipit.
                                        </p> -->
                                        <!-- <div class="panel panel-default">
                                                <div class="panel-heading">
                                                        <h3 class="panel-title">Panel title</h3>
                                                </div>
                                                <div class="panel-body">
                                                        Panel content
                                                </div>
                                                <div class="panel-footer">
                                                    am done
                                                </div>
                                    </div> -->
                </div>
  
             <div class=" col-xl-8 col-lg-8 col-xs-12 col-sm-12 col-md-6 ">
                    <div class="card">
                        <div class="card-header">

                            <nav>
                                <div class="nav nav-tabs  card-header-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Companies</button>
                                    <button class="nav-link" id="profile" data-bs-toggle="tab" data-bs-target="#profile_admin" type="button" role="tab" aria-controls="profile_admin" aria-selected="false">Profile</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Verify</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Clients</button>
                                 
                                </div>
                           </nav>
                        </div>
                        
                            <div class="card-body">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <!--modal for btn add company-->



                                        <div class="row mt-3 mb-3">

                                        <div class="card ">
                                                <div class=" card-header text-center text-cyan">
                                                    <h2>Registered Companies</h2>
                                                </div>
                                   
                                                <div class="card-body">
                                                        <button type="button" class="btn btn-primary float-end" style="width:150px;">
                                                        Companies<span class="badge badge-light"><?php print_r($_SESSION['amount']);?>6</span>
                                                    
                                                        </button>
                                                    <table class="table tabordered">
                                                        <tr>
                                                        <th>Company Name</th>
                                                        <th>Phone</th>
                                                        <th>Emails</th>
                                                        <th>Address</th>
                                                        <th>Route</th>
                                                        <th>Licence</th>
                                                        </tr>
                                                        <?php foreach($GLOBALS['dat'] as $dat):?>
                                                        <tr>
                                                            <td><?=$dat->company_name;?></td>
                                                            <td><?=$dat->company_contact;?></td>
                                                            <td><?=$dat->company_email;?></td>
                                                            <td><?=$dat->company_address;?></td>
                                                            <td><?=$dat->route_chart;?></td>
                                                            <td><?=$dat->psv_licence;?></td>

                                                            <td> 
                                                            
                                                                <a href="dash_board.php?id=<?=$dat->company_id?>" class="btn btn-primary">Edit</a>
                                                                <a href="../crud-api/deleting.php?id=<?=$dat->company_id?>" class="btn btn-danger" name="delete"> Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach;?>
                                                    </table>
                                                    <div>
                                                </div>
                                                    
                                            </div>
                                            </div>
                                        
                                        </div>
                                        <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Add Company</button>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">managers
                                    kjhjkhjkhjh
                                    
                                 
                                    </div>
                                    <!-- clients-->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">clients
                                    
                               not available at the moment!!
                                  <?php 
                                    // print_r($_SESSION['all_data']['articles']);
                                  ?>
                                    </div>

                                    <div class="tab-pane fade" id="profile_admin" role="tabpanel" aria-labelledby="profile">Profile
                                    not available at the moment!!
                                     <button class="btn btn-primary"  data-toggle="modal" data-target="#profile_view">Edit profile</button>
                                  
                                    </div>
                           

                                    </div>

                            </div>
                          </div>
                 </div>
                <div class="col-lg-2  col-xl-2  col-xs-12 col-sm-12 col-md-2 ">
                <a href='../login/traveller_app_login.php'class="btn btn-info "style="width:150px;" name="logout">Logout</a>
                </div>


    </div>     

<nav>


</div>

 
<?php
 include ("../footers/footer.php");

?>