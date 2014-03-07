<section id="page-title">
    <div class="container">
            <div class="row">
            <h2><?php echo $client->first_name. " ". $client->last_name; ?></h2>
            <p>Client</p>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Client Details <a href="<?php echo base_url(); ?>clients/" class="btn btn-primary pull-right">Back</a></h4></div>
					<div class="panel-body">
						<div class="row mbottom20">
							<div class="col-lg-2 col-md-3">
								<strong>Name:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php echo $client->first_name. " ". $client->last_name; ?>
							</div>
							<div class="col-lg-2 col-lg-offset-1 col-md-3">
								<strong>Address:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php echo nl2br($client->address); ?>
							</div>
						</div>
						
						<div class="row mbottom20">
							<div class="col-lg-2 col-md-3">
								<strong>Date of Birth:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php 
								$dob = floor((time() - strtotime($client->dob)) / 31556926); ?>
								<?php echo date("d/m/Y", strtotime($client->dob)); ?> <br />(<?php echo $dob; ?> years old)
							</div>
							<div class="col-lg-2 col-lg-offset-1 col-md-3">
								<strong>Telephone:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php echo $client->telephone; ?>
							</div>
						</div>
						
						<div class="row mbottom20">
							<div class="col-lg-2 col-md-3">
								<strong>Gender:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php echo $client->gender; ?>
							</div>
							<div class="col-lg-2 col-lg-offset-1 col-md-3">
								<strong>Mobile:</strong>
							</div>
							<div class="col-lg-3 col-md-3">
								<?php echo $client->mobile; ?>
							</div>
						</div>
						
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading"><h4>Services History</h4></div>
					<div class="panel-body">
						<p>Show list of services taken</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading"><h4>Client Notes</h4></div>
					<div class="panel-body">
						<?php if($client_notes) {
							echo "<div id='the-notes'>";
							foreach($client_notes as $cn) {
								$staff = $this->Staff_model->getStaffMember($cn['staff_id'], $this->session->userdata('user_id'));
								echo "<div class='the-note'>";
								echo "<p>".nl2br($cn['note'])."</p>";
								echo "<small>Added by: ".$staff->first_name. " ".$staff->last_name." on ". date('d/m/Y H:i A', strtotime($cn['created_at']))." <a id='del-note' rel2='".$cn['client_id']."' rel='".$cn['id']."' class='btn btn-xs btn-danger'>Delete</a></small>";
								echo "</div>";
							}
							echo "</div>";
						} else { ?>
							<div id='the-notes'>
								<p>The client has no notes to view.</p>
							</div>
						<?php } ?>

						<h6>Add New Note</h6>
						<form id="add-note" method="post">
							<div class="form-group">
							<textarea name="client_note" id="client_note" class="form-control" rows="5"></textarea>
							<input type="hidden" name="client_id" id="client_id" value="<?php echo $client->id; ?>" />
							</div>
							<button type="submit" class="btn btn-success">Add Note</button>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

<script type="text/javascript">
	$(function(){
		$('#add-note').submit(function(){
			var cid = $('#client_id').val();
			var note = $("#add-note").serialize();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>clients/add_note",
				data: note,

				success: function(data) {
					document.getElementById('client_note').value = "";
					$('#the-notes').fadeOut('slow', function() {
						$(this).load('<?php echo base_url(); ?>clients/get_notes/'+cid, function(){
							$(this).fadeIn('slow');
							$('.the-note:gt(4)').hide().last().after(
							    $('<a />').attr('href','#').text('Show more').click(function(){
							        var a = this;
							        $('.the-note:not(:visible):lt(5)').fadeIn(function(){
							         if ($('.the-note:not(:visible)').length == 0) $(a).remove();   
							        }); 
							    })
							);

						});
					});

				}
			});
			return false;
		});


	$('.the-note:gt(4)').hide().last().after(
	    $('<a />').attr('href','#').text('Show more').click(function(){
	        var a = this;
	        $('.the-note:not(:visible):lt(5)').fadeIn(function(){
	         if ($('.the-note:not(:visible)').length == 0) $(a).remove();   
	        });
	    })
	);

	
		$(document).on("click", "#del-note", function(){
			var cid = $(this).attr('rel2');
			var nid = $(this).attr('rel');
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>clients/delete_note/"+nid,
				data: nid,

				success: function(data) {
					document.getElementById('client_note').value = "";
					$('#the-notes').fadeOut('slow', function() {
						$(this).load('<?php echo base_url(); ?>clients/get_notes/'+cid, function(){
							$(this).fadeIn('slow');
							$('.the-note:gt(4)').hide().last().after(
							    $('<a />').attr('href','#').text('Show more').click(function(){
							        var a = this;
							        $('.the-note:not(:visible):lt(5)').fadeIn(function(){
							         if ($('.the-note:not(:visible)').length == 0) $(a).remove();   
							        }); 
							    })
							);						
						});
					});
				}
			});
			return true;
		});

		
	});

	
	

</script>