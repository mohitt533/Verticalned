

<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark" style="height:70px; width:100%; margin-top:0px;">
    <div class="container">
        
        <a class="navbar-brand" href="index.php?page=announcement">
            <strong>VerticalNed</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1" Style="margin-left:70%;">

            <ul class="navbar-nav pull-xs-right" >
				 <?php if(is_logged_in()){ ?>
				 <li class="nav-item">
                    <a href="index.php?page=announcement"class="nav-link">Announcement</a>
                </li>
				 <?php } ?>
                <li class="nav-item">
                    <a href="index.php?page=team"class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=contactus" class="nav-link">Contact</a>
                </li>
                <?php if(is_logged_in()){ ?>
              <li class="nav-item">
                    <a class="nav-link" href="logout.php" Style="width:100px;">log out</a>
                </li>
                <?php } ?>
            </ul>

        </div>
		
    </div>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</nav>
