<div class="col-md-3">
<!--Card-->
    <div class="author-box z-depth-1" style="height:auto; width:auto;background-color:white;margin:15%;">

     <div class="pull-right" style="margin:10px" >   <?php if($_SESSION['type']==="faculty"){ ?> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalContactForm"><i class="fa fa-edit" aria-hidden="true">Edit events</i></button>
		
	
				
		<!--Modal: Contact form-->
<div class="modal hide fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <button type="button" class="close waves-effect waves-light" style="left:200px;" id="closemodel" data-dismiss="modal"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-pencil"></i> Add events</h4>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">
                <div class="md-form form-sm">
                   <i class="fa fa-graduation-cap prefix" aria-hidden="true"></i>
                    <input type="text" id="form19" class="form-control">
                    <label for="form19">Event name</label>
                </div>

               
                   
						<fieldset class="form-group">
								<input name="group1" type="radio" id="radio1">
								<label for="radio1">College event</label><br/>
						</fieldset>

							<fieldset class="form-group">
								<input name="group1" type="radio" id="radio2">
								<label for="radio2">Department event</label>
							</fieldset>

						
                

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="form21" class="form-control">
                    <label for="form21">Link</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea mb-0" maxlength="40" ></textarea>
                    <label for="form8">News feed</label>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn btn-info mb-2">Create <i class="fa fa-send ml-1"></i></button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div><?php } ?>
<!--Modal: Contact form-->

</div><br/> 
		
<!--/.Card image-->

        <!--Card content-->
        <div class="card-block text-center" style="padding-bottom:0px;" >
            <!--Title-->
            <h4 class="card-title" ><strong>Recent Events</strong></h4>
          
            </div>
								<div id="MainMenu" style="height:80px">
					  <div class="list-group panel">
						<a href="#demo3" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu" >College events</a>
						<div class="collapse" id="demo3">
						  <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 </a>
						 
						  <a href="#" class="list-group-item">Subitem 2</a>
						  <a href="#" class="list-group-item">Subitem 3</a>
						</div>
						<a href="#demo4" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Department events</a>
						<div class="collapse" id="demo4">
						  <a href="" class="list-group-item">Subitem 1</a>
						  <a href="" class="list-group-item">Subitem 2</a>
						  <a href="" class="list-group-item">Subitem 3</a>
						   <a href="" class="list-group-item">Subitem 3</a>
						    <a href="" class="list-group-item">Subitem 3</a>
							 <a href="" class="list-group-item">Subitem 3</a>
						</div>
						
						<div class="latest-blog-posts" style="background-color:white;padding:15px;">

				<h3><i class="fa fa-rss" style="margin-right:15px;"></i>News feed</h3>
 <!---------------------------------load only top 6 news------------------------------------------------------------------------>
				
				<ul style="height:auto;padding:1px;" >
					<li ><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px;"></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Pellentesque quis eros dignis. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Nam tempus turpis viverra, mattis diam ac, malesuada mi. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>

				</ul>

			</div>
					  </div>
					</div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->
	</div>
	
</div>
</div>