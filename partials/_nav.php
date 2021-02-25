<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="Homepage.php">GAMING GREEKS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link" href="Homepage.php">Home</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">SERVICES</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="About.php">About Our Website</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contactus.php">Contact Details</a>
            </li>
        </ul>
        <div class="dropdown mr-4 " id="user">
            <a href="#" class="dropdown-toggle text-decoration-none" data-toggle="dropdown"><i class="fa fa-user"
                    aria-hidden="true"></i>&nbsp;&nbsp;<?php  echo $_SESSION['username'];?>&nbsp;&nbsp;</a>
            <div class="dropdown-menu ">
                <a class="dropdown-item" href="Logout.php"><span><button class="btn btn-danger btn-lg">Log Out</button></span></a>
            </div>
        </div>
        </form>
    </div>
</nav>