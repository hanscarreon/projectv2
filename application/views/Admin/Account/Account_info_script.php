<script>
 $(document).ready(function(){
    $('#info-table').DataTable( {
            pagingType: "full_numbers",
            dom: 'Bfrtip',
            processing: true,
            buttons: [
                'copy',
            {
                extend: 'csv',
                messageTop:function(){
                  var datavalue = $('#user_fname').val();
                  datavalue = datavalue.length >=1 ? datavalue : 'OVERALL';
                  return datavalue.toUpperCase()+" REPORT";
                }
            },
            {
                extend: 'excel',
                messageTop:function(){
                  var datavalue = $('#user_fname').val();
                  datavalue = datavalue.length >=1 ? datavalue : 'OVERALL';
                  return datavalue.toUpperCase()+" REPORT";
                }
            }, 
            {
                extend: 'pdf',
                messageTop:function(){
                  var datavalue = $('#user_fname').val();
                  datavalue = datavalue.length >=1 ? datavalue : 'OVERALL';
                  return datavalue.toUpperCase()+" REPORT";
                }
            },  
                {
                    extend: 'print',
                    messageTop:function(){
                    var datavalue = $('#user_fname').val();
                    datavalue = datavalue.length >=1 ? datavalue : 'OVERALL';
                    return'<h1>'+datavalue.toUpperCase()+' REPORTS</h1>'
                    }
                },
            ]
        } );
 })

       
     

</script>