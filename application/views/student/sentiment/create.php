<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Create Sentiment</h6>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">
	           		 	 <div class="form-group row">
                          <label for="case_text" class="col-sm-2 col-form-label">Case Text *</label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <textarea  rows="4" cols="50" class="form-control" id="case_text" name="case_text" placeholder="Enter text yo analyze"></textarea> <!-- type="text"  value=""> -->
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. case text -->
                         <div class="card-footer text-right">
	                        <button type="submit" value="create_account" name="create_account" class="btn btn-info ">Submit</button>
	                     </div>
	                      <!-- /.card-footer -->
	            	</div>
	      		  </form>
	            <!-- /. card body -->
	          </div>
	          <!-- /. card shadow -->
	        </div> 
	        <!-- /. row -->
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
	
 $(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function (form) {
 	var case_val = $("#case_text").val()
    rapid(case_val);
    // 	 $.ajax({
		  //   type: "POST",
		  //   url: '<?php echo base_url() ?>api/sentiment/create',
		   
		  //   // data: JSON.stringify(data_arr),
		  //   data: JSON.stringify({
		  //     case_text: case_val,
		  //   user_id: <?php echo $this->session->userdata('user_id'); ?>,
		  //   }),
		  //   success:function(res)
		  //       {
		         
		  //         toastr.success('Success!',"Sentiment Created!");
		  //         setTimeout(function(){ window.location.replace("<?php echo base_url(); ?>student/dashboard/index/study/con"); }, 1500);
		  //       },
		  //   fail:function(err){
		  //     console.log(err);
		  //     console.log("wew");
		  //   }
		  // });
		  // sende chat
      
    }
  });
  $('#case-form').validate({
    rules: {
      case_text: {
        required: true,
        minlength: 2,
      },
    },
    messages: {
      case_text: {
        required: "Please enter a sentiment text ",
        minlength:'Your username must be at least 2 characters long'
      },
     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.err').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });


  function rapid(sentiment){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "https://text-sentiment.p.rapidapi.com/analyze",
      "method": "POST",
      "headers": {
        "x-rapidapi-host": "text-sentiment.p.rapidapi.com",
        "x-rapidapi-key": "02c3f30502msh33401f4eaac2e5ep146922jsn081be928bb38",
        "content-type": "application/x-www-form-urlencoded"
      },
      "data": {
        "text": sentiment
      }
    }

    $.ajax(settings).done(function (response) {
      var data = JSON.parse(response);
      var study = '';
      if(parseInt(data.neg) > parseInt(data.pos) && parseInt(data.neg) > parseInt(data.mid) ){
        study = 'negative';
      }else if (parseInt(data.pos) > parseInt(data.neg) && parseInt(data.pos) > parseInt(data.mid)){
        study = 'positive';
      }else{
        study = 'neutral';
      }
      console.log(study);
      $.ajax({
        type: 'post',
        url:'<?php echo base_url() ?>student/sentiment/insert_sentiment',
        data:{
          case_text: data.text, // text
          case_study: study,    // mood result
          case_mid:data.mid,    // neutral score
          case_mid_percent:data.mid_percent, // neutral percentage
          case_neg:data.neg,    // negative score
          case_neg_percent:data.neg_percent, // negative percentage
          case_pos:data.pos,    // positive score
          case_pos_percent:data.pos_percent, // positive percentage
          case_total_lines:data.totalLines, // total lines count
          user_id:<?php echo $this->session->userdata('user_id'); ?> // session

        },
        success:function(res)
        {
         
          toastr.success('Success!',"Sentiment Created!");
          setTimeout(function(){ window.location.replace("<?php echo base_url(); ?>student/dashboard/index/study/con"); }, 1500);
        },
        fail:function(err){
          toastr.success('Success!',err);
        }
      })
      // ajax sentiment
    });
  }
});

</script>