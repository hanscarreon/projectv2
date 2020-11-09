
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Accounts</h1>
    </div>


    <!-- Content Row -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo ucwords($this->uri->segment(4)) ?> Account</h6>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo ucwords($this->uri->segment(4)) ?> Account
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo base_url('admin/account/index/student/published') ?>">Student</a>
                    <a class="dropdown-item" href="<?php echo base_url('admin/account/index/guidance/published') ?>">Guidance</a>
                  </div>
                </div>
                <!-- <a href="<?php  echo base_url('user/sentiment/create') ?>" class="btn  btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="far fa-plus-square"></i>
                    </span>
                    <span class="text">Sentiment</span>
                </a>
               -->
                <!-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div> -->
            </div>
            <!-- Card Body -->
            <div class="card-body ">
                <div class="table-responsive ">
                    <table class="table table-striped " id="dataTable">
                        <?php if($this->uri->segment(4) == 'student'): ?>
                            <thead>
                                <tr>
                                <!-- <th>Case-ID No.</th> -->
                                <th>Profile</th>
                                <th>Stundet-ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Date joined</th>
                                <th>Division</th>
                                <th>Section</th>
                                <th>Degree</th>
                                <th>SHS</th>
                                <th>Strand</th>
                                <th>Gender</th>
                                <th >Action</th>
                                <th></th>
                                <!-- <th></th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php  if ( isset( $users ) && count($users) >= 1 ):?>
                                <?php $x=1; foreach($users as $user): ?>
                                <tr>
                                    <td><img alt="not found or deleted" class="img-profile rounded-circle  col-lg-4 col-md-12 col-sm-12 col-12" height="auto" width="100%" src="<?php echo !empty($user['user_pic']) ? base_url(). $user['user_pic']: base_url('resources/img/stud.png') ?>" > </td>
                                    <td><?php echo $user['user_name'] ?></td>
                                    <td><?php echo $user['user_fname'] ?></td>
                                    <td><a class="" href="tel:<?php echo $user['user_contact'] ?>"><?php echo $user['user_contact'] ?></a></td>
                                    <td><a class="email-table" href="mailto:<?php echo $user['user_email'] ?>"> <?php echo $user['user_email'] ?> </a></td>
                                    <td><?php echo date("F j, Y, g:i a",strtotime($user['user_bod'])) ?></td>
                                    <td><?php echo date("F j, Y, g:i a",strtotime($user['user_created'])) ?></td>
                                    <td><?php echo $user['user_division'] ?></td>
                                    <td><?php echo $user['user_section'] ?></td>
                                    <td><?php echo $user['user_degree'] ?></td>
                                    <td><?php echo $user['user_shs'] ?></td>
                                    <td><?php echo $user['user_strand'] ?></td>
                                    <td><?php echo $user['user_gender'] ?></td>
                                    <td class="text-right"> <a  href="<?php echo base_url('admin/account/view-student/').$user['user_id'] ?>"><i class="fa fa-eye"></i></a> </td>
                                    <td> <a href="<?php echo base_url('admin/account/edit-student/').$user['user_id'] ?>"><i class="fa fa-edit"></i></a> </td>
                                    <!-- <td> <a href="<?php echo base_url('admin/account/delete-student/').$user['user_id'] ?>"><i class="fa fa-trash"></i></a> </td> -->

                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                <td colspan="16" class="text-center">No data</td>
                                </tr>
                            </tbody>
                            <?php endif;?>
                        <?php elseif($this->uri->segment(4) == 'guidance'): ?>
                            <thead>
                                <tr>
                                <!-- <th>Case-ID No.</th> -->
                                <th>Profile</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Birth Date</th>
                                <th>Date joined</th>
                                <th>Expertise</th>
                                <th>Address</th>
                                <th >Action</th>
                                <th></th>
                                <!-- <th></th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php  if ( isset( $users ) && count($users) >= 1 ):?>
                                <?php $x=1; foreach($users as $user): ?>
                                    <tr>
                                    <td><img alt="not found or deleted" class="img-profile rounded-circle col-lg-4 col-md-12 col-sm-12 col-12" height="auto" width="100%" src="<?php echo  !empty($user['admin_pic']) ? base_url(). $user['admin_pic'] : base_url('resources/img/stud.png') ?>" > </td>
                                    <td><?php echo $user['admin_uname'] ?></td>
                                    <td><?php echo $user['admin_fname'] ?></td>
                                    <td><a class="" href="tel:<?php echo $user['admin_contact'] ?>"><?php echo $user['admin_contact'] ?></a></td>
                                    <td><a class="email-table" href="mailto:<?php echo $user['admin_email'] ?>"> <?php echo $user['admin_email'] ?> </a></td>
                                    <td><?php echo date("F j, Y, g:i a",strtotime($user['admin_bod'])) ?></td>
                                    <td><?php echo date("F j, Y, g:i a",strtotime($user['admin_created'])) ?></td>
                                    <td><?php echo $user['admin_expertise'] ?></td>
                                    <td><?php echo $user['admin_address'] ?></td>
                                    <td class="text-right"> <a  href="<?php echo base_url('admin/account/view-admin/').$user['admin_id'] ?>"><i class="fa fa-eye"></i></a> </td>
                                    <td> <a href="<?php echo base_url('admin/account/edit-admin/').$user['admin_id'] ?>"><i class="fa fa-edit"></i></a> </td>
                                    <!-- <td> <a href="<?php echo base_url('admin/account/delete-admin/').$user['admin_id'] ?>"><i class="fa fa-trash"></i></a> </td> -->

                                    </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <tr>
                                <td colspan="12" class="text-center">No data</td>
                                </tr>
                            </tbody>
                            <?php endif;?>







                        <?php endif; ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    </div>
 

