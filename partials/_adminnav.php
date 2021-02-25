<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
    </button>&nbsp;&nbsp;
    <a class="navbar-brand" href="admin_panel.php">GAMING GREEKS</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
               
            </li>
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
                
            </li>
        </ul>
        <div class="dropdown mr-4 p-3" id="user">
            <a href="#" class="dropdown-toggle text-decoration-none" data-toggle="dropdown"><i class="fa fa-user"
                    aria-hidden="true"></i>&nbsp;&nbsp;<?php  echo $_SESSION['username'];?>&nbsp;&nbsp;</a>
            <div class="dropdown-menu ">
                <a class="dropdown-item" href="Logout.php"><span><button class="btn btn-danger btn-lg">Log Out</button></span></a>
            </div>
        </div>
        </form>
    </div>
</nav>