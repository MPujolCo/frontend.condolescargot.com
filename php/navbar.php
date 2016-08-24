<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle navbar-brand-shadow" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand navbar-brand-shadow" href="#intro">              
                <h1><img src="img/logo.png">Condo L'Escargot</h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#price">Price</a></li>
                <li><a href="#comforts">Comforts</a></li>
                <li><a href="#gallery">Gallery</a></li>
            	<li><a href="#Area">Area</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li>
                    <?php
                        require 'translator.php';
                    ?>
                </li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Example menu</a></li>
                    <li><a href="#">Example menu</a></li>
                    <li><a href="#">Example menu</a></li>
                  </ul>
                </li>-->
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>