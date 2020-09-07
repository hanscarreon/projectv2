<div class="container-fluid">
        	<div class="row">
	        		<div class=" col-12 card shadow mb-4">
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary">Meeting info</h6>
	                </div>
	                <div class="card-body">
	                	<h5 class="text-dark">Sentiment Text: </h5><p><?php echo $meeting[0]['case_text']; ?></p>
	                	<h5 class="text-dark">Case Result: </h5><p><?php echo $meeting[0]['case_study']; ?></p>
	                	<h5 class="text-dark">Meeting date: </h5><p><?php echo date("F j, Y, g:i a",strtotime($meeting[0]['meet_date'])) ?></p>
	                	<h5 class="text-dark">Meeting room link: </h5><p><?php echo !empty($meeting[0]['meet_link'])? $meeting[0]['meet_link']: 'No link available' ?></p>

	                  
	                </div>
	              </div>
        	</div>
</div>		