<?php

include('db_register.php');

if(isset($_POST["id"]))
{
 $data = array(
  ':first_name'  => trim($_POST["first_name"]),
  ':last_name'  => trim($_POST["last_name"])
 );

 $query = "
 INSERT INTO user
 (first_name, last_name) 
 VALUES (:first_name, :last_name)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 echo 'done';
 
}

?>

<div class="form-group" id="process" style="display:none;">
    <div class="progress">
       <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
       </div>
	</div>
</div>

<script>
 
 $(document).ready(function(){
  
  $('#sample_form').on('submit', function(event){
   event.preventDefault();
   var count_error = 0;

   if($('#first_name').val() == '')
   {
    $('#first_name_error').text('First Name is required');
    count_error++;
   }
   else
   {
    $('#first_name_error').text('');
   }

   if($('#last_name').val() == '')
   {
    $('#last_name_error').text('Last Name is required');
    count_error++;
   }
   else
   {
    $('#last_name_error').text('');
   }

   if(count_error == 0)
   {
    $.ajax({
     url:"process.php",
     method:"POST",
     data:$(this).serialize(),
     beforeSend:function()
     {
      $('#save').attr('disabled', 'disabled');
      $('#process').css('display', 'block');
     },
     success:function(data)
     {
      var percentage = 0;

      var timer = setInterval(function(){
       percentage = percentage + 20;
       progress_bar_process(percentage, timer);
      }, 1000);
     }
    })
   }
   else
   {
    return false;
   }
  });

  function progress_bar_process(percentage, timer)
  {
   $('.progress-bar').css('width', percentage + '%');
   if(percentage > 100)
   {
    clearInterval(timer);
    $('#sample_form')[0].reset();
    $('#process').css('display', 'none');
    $('.progress-bar').css('width', '0%');
    $('#save').attr('disabled', false);
    $('#success_message').html("<div class='alert alert-success'>Data Saved</div>");
    setTimeout(function(){
     $('#success_message').html('');
    }, 5000);
   }
  }

 });
</script>
