<!--Section: Contact v.1-->
<div class="container" Style="padding-top:15px;">
<section class="section mb-4">

    <!--Section heading-->
    <center><h1 class="section-heading" Style="margin:0px;color:green;">Contact</h1><center>
	<hr/>
    <!--Section sescription-->
    <p class="section-description mb-5">We try to look into every issue brought in our notice and solve it with our full capacity. We aim at providing 100% user satisfaction with our constant endeavours.</p>

    <div class="row">

        <!--First column-->
        <div class="col-md-5">

            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <!--Header-->
                    <div class="form-header mdb-color">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                    </div>

                    <p>We'll write rarely, but only the best content.</p>
                    <br>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix" Style="color:grey;"></i>
                        <input type="text" id="form3" class="form-control" />
                        <label for="form3">Your name</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix" Style="color:grey;" ></i>
                        <input type="text" id="form2" class="form-control" />
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix" Style="color:grey;"></i>
                        <input type="text" id="form32" class="form-control" />
                        <label for="form32">Subject</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix" Style="color:green;"> </i>
                        <textarea type="text" id="form8" class="md-textarea"></textarea>
                        <label for="form8">Icon Prefix</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-ins yellow">Submit</button>
                    </div>

                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-7">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" style="height: 400px"></div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating btn-large "><i class="fa fa-map-marker"  Style="padding-top:15px;width:50px; height:50px;color:white; background-color:red; border-radius:50%;"></i></a>
                    <p>SRM University,</p>
                    <p>Chennai-603203 ,India</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small "><i class="fa fa-phone" Style="padding-top:16px;width:50px; height:50px; color:white;background-color:blue; border-radius:50%;"></i></a>
                    <p>+ 91 9092364728</p>
                    <p>Mon - Fri, 8:00-22:00</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small "><i class="fa fa-envelope" Style="padding-top:16px;width:50px; height:50px; color:white;background-color:brown; border-radius:50%;"></i></a>
                    <p>info@mail.com</p>
                    <p>sale@gmail.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>
<!--/Section: Contact v.1--></div>

<script>

function init_map() {
    
    var var_location = new google.maps.LatLng(40.725118, -73.997699);

    var var_mapoptions = {
        center: var_location,
    
        zoom: 14
    };

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
    });

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var_marker.setMap(var_map);

}

google.maps.event.addDomListener(window, 'load', init_map);
</script>