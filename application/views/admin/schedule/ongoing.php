<div class="container-fluid">

  <div class="row">

      <?php
        foreach ($messenger_usernames as $messenger_username):
    

     echo '<a href="http://m.me/'.$messenger_username['user_messenger_link'].'" style="position:fixed; bottom:10px; right:25px;"  target="_blank"><img src="'.base_url('resources/img/messenger.png').'"></a>';
    

       ?>
    <?php endforeach;?>
      <!--/.col-chat -->
<div class="col-md-12 col-sm-12 col-12">
    
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Meeting  </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

         
     <!-- /.card-sentiment -->

    
      <div class="card-body">
        <div class="row info-sentiment">
            <div class="col-12">
              <h5>
              <span class="text-dark"><?php echo ucfirst($student[0]['user_fname']).' '.ucfirst($student[0]['user_mname']).'. '.ucfirst($student[0]['user_lname']); ?> </span>
                <span class="text-muted float-right"><?php echo date("F j, Y, g:i a",strtotime($case[0]['case_created'])) ?></span>
              </h5>
              <h6>
              <span class="text-dark"> Reason : </span><?php  echo !empty($case[0]['case_cause'])? $case[0]['case_cause']: 'none' ?>
              </h6>
              <h6>
               <span class="text-dark"> Prepared Contact  :</span><?php  echo !empty($case[0]['case_res'])? $case[0]['case_res']: 'none' ?>
              </h6>
              <?php  echo $case[0]['case_text']; ?>
              
            </div>
        </div>
      
      <form class="form-horizontal" method="post" >
        <div class="form-group row">
          <label for="user_name" class="col-sm-2 col-form-label">Note</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="inter_note" name="meet_note" rows="5" placeholder="Counseling note"></textarea>
          </div>
         
        </div>
         <div class="form-group row">
            <label for="user_role" class="col-sm-2 col-form-label">Case</label>
            <div class="col-sm-10">
              <select class="form-control select2 select2-hidden-accessible" name="case_con" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option selected="selected" value="">Select Case</option>
                <option value="closed">Close case</option>
                <option value="recommended">Recommended to SDO or Pyschologist</option>
                <option value="plan">Intervention plan</option>
              </select>
            </div>
          </div>
          <!-- /. select  -->
          <div class="hidden-inputs">
           <input type="hidden" class="form-control"  id="stud_id" name="stud_id"  value="<?php echo $meeting[0]['stud_id'] ?>">
           <input type="hidden" class="form-control" id="case_id" name="case_id" value="<?php echo $meeting[0]['case_id'] ?>">
           <input type="hidden" class="form-control" id="meet_id" name="meet_id"  value="<?php echo $meeting[0]['meet_id'] ?>">
           </div>
      </div>
     
      <!-- /.card-body -->
      <div class="card-footer ">
        <button type="submit" value="case_review" name="case_review" class="btn btn-info float-right">Submit</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>

</div>
<!-- /. col note -->

</div>

</div>
<!-- /.container fluid -->
<!-- chat ajax code -->
<script>
var meet_id = <?php echo $this->uri->segment("4"); ?>;
var reciever_id =  <?php echo $student[0]['user_id'] ?>;

//   $("#send_chat").click(function(event){
// // alert(reciever_id);

//   event.preventDefault();
//   // console.log(meet_id);
//   var msg = $("#chat_text").val()
//   if(isBlank(msg) == true){
//     return;

//   }
//   // console.log('pek')
//   $.ajax({
//     type: "POST",
//     url: '<?php echo base_url() ?>admin/schedule/send_link',
   
//     // data: JSON.stringify(data_arr),
//     data: {
//     meet_id: meet_id,
//     meet_link: msg
//     },
//     success:function(res)
//         {
//           console.log(res);
//           $("#chat_text").val("");
//           $("#meet_link").attr("href",msg);
//           $("#meet_link").text(msg);


//         },
//     fail:function(err){
//     }
//   });


// });

function get_chat(myid,id){
  // get chat
  $.ajax({
        url:"<?php echo base_url() ?>chats/reciever",
        method:"get",
        data:{
        sender_id :myid, reciever_id: id 
        },
        cache: false,
        success:function(data)
        {
         console.log(data)
          
        }
      })

 }

function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}
// send chat to selected student

function send_chat(){
  var sender_id =  <?php echo $this->session->userdata('user_id'); ?>;
var reciever_id =  <?php echo $student[0]['user_id'] ?>;

$("#send_chat").click(function(event){

  event.preventDefault();
  // $('.chatting').html('');
  var msg = $("#chat_text").val()
  if(isBlank(msg) == true){
    return;
  }
  // var chatdata = "";
  $.ajax({
    type: "POST",
    url: '<?php echo base_url() ?>api/chat/send',
   
    // data: JSON.stringify(data_arr),
    data: JSON.stringify({
      sender_id: sender_id,
    reciever_id: reciever_id,
    chat_text: msg
    }),
    success:function(res)
        {
          console.log(res);
          var msgs = "<div class='usr-msg'><i class='fa fa-user-circle-o' aria-hidden='true'></i> <span><p>" + msg + "</p></span></div>";
          $('.usr-name').append(msgs);
          $('#chat_text').val('');
          console.log(msgs)

                    
         


          // $("#meet_link").attr("href",msg);
          // var msgs = "<div class=' direct-chat-msg text-right alert alert-primary'>";
          // msgs += "<span><p>" + msg +"</p></span></div>"; 

          // $('#meet_link').each(function(){
          //   // msg += $(this).text();
          // //  var msg = "<div class=' direct-chat-msg text-right alert alert-primary'>";
          // // msg +=  "<span>"+ msg +"</span></div>"; 


          // });

          // $('.chatting').append("<div class=' direct-chat-msg text-right alert alert-primary'>" +msg+"</div>");

         

        },
    fail:function(err){
      console.log(err);
      console.log("wew");
    }
  });
  // send chat


});
}

$(document).ready(function(){
  send_chat()
     
});
// get msg
</script>






