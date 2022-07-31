<script>
	jQuery(document).ready(function(){
		$('#suc_msg').hide();
    $('#err_msg').hide();
						jQuery("#pos_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=position",
									data: formData,
									success: function(html){
										$('#retCode1').html(html);
									var delay = 2000;
										setTimeout(function(){	window.location = 'index.php?page=position';   }, delay);  
									
									}
								});
									return false;
						});
						});
</script>


<script>
        $(function() {
            $("#emp").dataTable(
        { "aaSorting": [[ 2, "asc" ]] }
      );
        });
    </script>
     <script>
  jQuery(document).ready(function(){


             jQuery("#emp_form").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/add_forms.php?action=employee",
                  data: formData,
                  success: function(html){
                  $('#retCode2').append(html);
                   
                 
                  }
                });
                  return false;
            });


            });
</script>