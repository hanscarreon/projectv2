    <link href="<?php echo base_url('v2/') ?>css/styles.css" rel="stylesheet">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Calendar</h1>
    </div>

    <!-- Content Row -->
<!-- /. card header -->
<!-- <style>
  .button.fc-prev-button.fc-button.fc-state-default.fc-corner-left,button.fc-next-button.fc-button.fc-state-default.fc-corner-right{
    background-color: #b1d583;
    background-image: none;
}
</style> -->
<div class="row">
		  <div class="col-md-12">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						<div class="col-md-2">
		  							<div id='external-events'>
	                                    <h4>Draggable Events</h4>
	                                    <div class='external-event'>My Dayoff</div>
	                                    <div class='external-event'>Work Time</div>
	                                    <div class='external-event'>Me Time</div>
	                                    <div class='external-event'>Exercise</div>
	                                    <div class='external-event'>Payday</div>
	                                    <p>
	                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
	                                    </p>
                                    </div>
		  						</div>
		  						<div class="col-md-10">
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>