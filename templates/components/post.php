<!--Section: Blog v.1-->
<div class="col-md-6">
<section class="section extra-margins">

    <!--Section heading-->
    <center><h1 class="section-heading" Style="margin:0px;">Announcements</h1></center>
	<hr/>
  
  <?php foreach ($result as $card) { ?>  

   <div class="container"> 
	  <div class="row">
		   <div class="col-md-2"><i class="fa fa-spinner fa-5x" aria-hidden="true" Style="color:blue;"></i>
		   </div>
		   <div class="col-md-10">
            <h4 class="amber-text"><?php echo $card->subject; ?></h4>
			
            <p><?php echo $card->description; ?></p>
            
			<p>by <a><strong><?php echo $card->staff; ?></strong></a>, <?php echo $card->time; ?></p>
			
            <a class="btn btn-cyan" href="<?php echo $card-> links; ?>">Know more</a>
        </div>
		
     </div>

  </div>

    <hr  Style="margin-left:30%;margin-right:30%; margin-top:5%;"/>
	
	<?php } ?>
	
   
	
	</section>
	
	
	</div>