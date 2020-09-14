
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-3">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">

          <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>resources/img/stud.png" alt="User profile picture">
          </div>
            <!-- /.img div -->
            <h3 class="profile-username text-center"><?php echo ucfirst($student[0]['user_fname']); ?> <?php echo ucfirst($student[0]['user_mname']); ?> <?php echo ucfirst($student[0]['user_lname']); ?></h3>
            <p class="text-muted text-center"><?php echo ucfirst($student[0]['user_role']); ?></p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Sentiment</b> <a class="float-right">1,322</a>
              </li>
              <!-- /.li -->
              <li class="list-group-item">
                <b>Meetings</b> <a class="float-right">543</a>
              </li>
              <!-- /.li -->
            </ul>
            <!-- /. ul -->
        </div>
        <!-- /. card body -->

      </div>
      <!-- /.card -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">About Me</h3>
                <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>
            </div>
            <!-- /.card body -->

        </div>
        <!-- /. card header -->
      </div>
      <!-- /. card -->
    </div>
    <!-- /. col -->
    <div class="col-md-9">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Timeline</h3>
        </div>
        <div class="card-body box-profile">

          <div class="text-center">
          </div>
            <!-- /.img div -->
            <h3 class="profile-username text-center"><?php echo ucfirst($student[0]['user_fname']); ?> <?php echo ucfirst($student[0]['user_mname']); ?> <?php echo ucfirst($student[0]['user_lname']); ?></h3>
            <p class="text-muted text-center"><?php echo ucfirst($student[0]['user_role']); ?></p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Sentiment</b> <a class="float-right">1,322</a>
              </li>
              <!-- /.li -->
              <li class="list-group-item">
                <b>Meetings</b> <a class="float-right">543</a>
              </li>
              <!-- /.li -->
            </ul>
            <!-- /. ul -->
        </div>
        <!-- /. card body -->

      </div>



    </div>
    <!-- /.col -->

  </div>
  <!-- /. row -->
</div>
<!-- /.container-fluid -->
