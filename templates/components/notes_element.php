

 <div class="col-md-6" Style="margin-top:4%;">
 <?php 

		foreach( $result as $card)
		{
			?>
			
		<div class="list-group" Style="margin-bottom:5%;">
		  <a href="#" class="list-group-item disabled" Style="background-color:#262626;color:white;">
				<Strong><?php echo $card->subcode; ?> </Strong>&nbsp  - &nbsp ---</a>
				
	<?php		
			
			$stmt  = $dbh->prepare("SELECT * FROM notedb");
             $stmt->execute();
              $res = $stmt->fetchALL(PDO::FETCH_OBJ);
			  

	foreach( $res as $deck)
		{  if(($card->subcode)===($deck->subcode)){?>
          <a href="#" class="list-group-item justify-content-between"><?php echo $deck->filename; ?>  <span class="badge badge-danger badge-pill">x</span></a>
		<?php } }?>
</div>
  
		<?php } ?>


</div>

<div class="col-md-3">


<!--Form with header-->
<div class="card" Style="width:auto; margin:10%;">
    <div class="card-block">


	<form action="index.php?page=notes" method="post" enctype="multipart/form-data" >
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-upload"></i> Upload Notes</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-book prefix"></i>
            <input type="text" id="form3" id='fileToUpload' name="subject" class="form-control">
            <label for="form3">Subject code</label>
        </div>
         <div class="md-form">
            <i class="fa fa-file-text prefix"></i>
            <input type="text" id="form3" id="description" name="description" class="form-control">
            <label for="form3">Description(Topic)</label>
        </div>
			<div class="form-inline" Style="margin:5%">

				<fieldset class="form-group"Style="margin:5%" >
					<input name="group1" type="radio" value="1" id="radio11" checked="checked">
					<label for="radio11">1st year</label>
				</fieldset>

				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="2" id="radio21">
					<label for="radio21">2nd year</label>
				</fieldset>

				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="3" id="radio31">
					<label for="radio31">3rd year</label>
				</fieldset>
				<fieldset class="form-group" Style="margin:5%">
					<input name="group1" type="radio" value="4" id="radio41">
					<label for="radio31">4th year</label>
				</fieldset>
			</div>

       <div class="text-center">
      <div class="file-field">
        <div class="btn btn-primary btn-sm">
            <span >Choose file</span>
            <input type="file" name="fileToUpload"  id="fileToUpload" multiple >
        </div>
           <button class="btn btn-indigo mb-1" type="submit" name="submit" ><span><i class="fa fa-upload"></i></span>&nbsp Upload</button>
          </div>
       </div>
         </form>


    </div>
</div>
</div>
</div>
</div>
