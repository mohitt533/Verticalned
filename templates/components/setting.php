<script>function myFunction1() {
    document.getElementById('myDIV1').style.display ='block';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction2() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='block';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction3() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='block';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction4() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='block';
	document.getElementById('myDIV5').style.display ='none';
    
}

function myFunction5() {
    document.getElementById('myDIV1').style.display ='none';
	document.getElementById('myDIV2').style.display ='none';
	document.getElementById('myDIV3').style.display ='none';
	document.getElementById('myDIV4').style.display ='none';
	document.getElementById('myDIV5').style.display ='block';
    
}
</script>

<br/><br/><br/><div class="container-fluid" Style="background-color:white">
<center><h1 Style="color:green;">Account Settings</h1></center><hr/>
<div class="row">
  <div class="col-md-3">
   <div class="mycontent-left">
<ul Style="margin:50px;color:grey;font-family:sans-serif; border-right: 1px solid #ccc;margin-right:60px;">
<li Style="margin:30px"><a href="#" onclick="myFunction1()">Profile picture</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction2()">Change Username</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction3()">Change Password</a></li>
<li Style="margin:30px;"><a href="#" onclick="myFunction4()">Deactivate Account</a></li>
<li Style="margin:30px;"><a  href="#" onclick="myFunction5()">Have a query? We are here for you.</a></li>
   </div>
  </div>
  <div class="col-md-9" Style="padding:50px;">
 
	
	<div id="myDIV1" style="display: block;">
  
 <center><img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(15).jpg" alt="Card image cap" Style="border-radius:50%;height:25%;width:25%;margin-top:5px;"></center>
<center><div class="file-field">
       
          
            <input type="file" class="btn btn-primary btn-sm" name="fileToUpload"  id="fileToUpload" multiple >
     
           <button class="btn btn-indigo mb-1" type="submit" name="submit"  ><span><i class="fa fa-upload"></i></span>&nbsp Upload</button>
          </div></center>
</div>

            
   
	
	<div id="myDIV2" style="display: none;">
  

 
  <!--Form with header-->

    <div class="card-block">

        <!--Header-->
        <div class="darken-4">
            <center><h3><i class="fa fa-user" Style="color:grey"></i> Change Username</h3></center>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-user-plus prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">New Username</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-success">Change</button>
        </div>

    </div>

    <!--Footer-->
    

	
    </div>
	
	<div id="myDIV3" style="display: none;">
   

 
  <!--Form with header-->

    <div class="card-block">

        <!--Header-->
        <div class="darken-4">
            <center><h3><i class="fa fa-unlock" Style="color:grey"></i> Change Password</h3></center>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-key prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Old Password</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">New password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-success">Change</button>
        </div>

    </div>

    <!--Footer-->
    

	
    </div>
	
	<div id="myDIV4" style="display: none;">
			  
			  <p>Do you really want to de-activate your account permanently? If yes provide us with the reason for your decision.</p>
			  <fieldset class="form-group">
				<input type="checkbox" id="checkbox1">
				<label for="checkbox1">Yes de-activate my account permanently.</label>
			</fieldset>
			  <div class="md-form">
				<i class="fa fa-pencil prefix"></i>
				<textarea type="text" id="form8" class="md-textarea"></textarea>
				<label for="form8">Reason for de-activation</label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-danger">Deactivate</button>
			 </div>
       
    </div>
	
	<div id="myDIV5" style="display: none;">
  

  <p>Tell us how may we can help you out in revolutionizing our education system or give us some feedback about our service.</p>
			 
			  <div class="md-form">
				<i class="fa fa-pencil prefix"></i>
				<textarea type="text" id="form8" class="md-textarea"></textarea>
				<label for="form8">Query or feedback</label>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-yellow">Submit</button>
			 </div>
       

	   
    </div>
	

</div>
</div>
</div>

