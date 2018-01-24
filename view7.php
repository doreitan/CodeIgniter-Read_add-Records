<!DOCTYPE HTML>

<HTML>
	<Head>
		<meta charset="utf-8">
		<title> Adding Records to customers_tbl </title>
		<link rel = "stylesheet" href ="<?php echo base_url();?>css/style7.css" media= "screen">
	</Head>
	
	<Body>
	
	<div class="Maatefet">
	
		<!--"----passing two segments the controller/its function-----"-->
		<div class="Header"> 
		</div>
		
		<div class="baemtza">
		
		
			<?php echo form_open("controller7/create"); ?>
				
				<div class="row">
					
					<!--"----lbl for name------"-->
					<div class="col-25">
						<label for ="FirstName"> First Name: </label>
					</div>
					
					<!--"----txt box for name------"-->
					<div class="col-75">
						<input type = "text" name="FirstName" id="FirstName">
					</div>
				</div>
				
				<div class="row">
					
					<!--"----lbl for Email------"-->
					<div class="col-25">
						<label for ="email"> Email: </label>
					</div>
					
					<!--"----txt box for Email------"-->
					<div class="col-75">
						<input type = "text" name="Email" id="Email">
					</div>
				</div>
				
					<p>
				
						<!--"----button for submit------"-->			
						<input type = "submit" value = "submit"> 
					</p> 
	
		<?php echo form_close(); ?>	
		</div>
		
		<div class ="footer">
		<hr/>
		<h2> Read</h2>
		<!--"if there are records..."-->
		<?php if (isset($records)): foreach($records as $row):?>
					<h2> <?php echo $row->FirstName;?></h2>
					<h2> <?php echo $row->Email;?></h2>
					<?php endforeach; ?>
			
					<?php else:?>
						<h3> לא נמצאו רשומות </h3>
		<?php endif; ?>
		</div>
		
			
			
		
		
		
		
		
	</Body>
	
	
</HTML>




