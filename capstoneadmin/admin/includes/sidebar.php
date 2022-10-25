<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body
    {
        font-family: 'Poppins', sans-serif;
    }
</style>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading" id="sideMenu">MENU</div>
                <?php if($_SESSION['auth_role'] == '2') :  ?>
                <a class="nav-link" href="dashboard.php" style="color:white">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-bar" ></i></div>
                    Dashboard
                </a>
                <?php endif; ?>
                <?php if($_SESSION['auth_role'] != '2') :  ?>
                <a class="nav-link" style="color:white" href="../tattooindex.php">
                    <div class="sb-nav-link-icon" id="navLink"><i class="fas fa-home"></i></div>
                    Home
                </a>
                <?php endif; ?>
                <?php if($_SESSION['auth_role'] != '2') :  ?>
                <a class="nav-link" style="color:white" href="index.php">
                    <div class="sb-nav-link-icon" id="navLink"><i class="fas fa-calendar-alt"></i></div>
                    Schedules
                </a>
                <?php endif; ?>
                <?php if($_SESSION['auth_role'] == '2') :  ?>
                <a class="nav-link" href="pendingreq.php" style="color:white">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus" ></i></div>
                    Pending Account Request
                </a>
                <?php endif; ?>
                <?php if($_SESSION['auth_role'] == '2') :  ?>
                <a class="nav-link" style="color:white" href="registereduser.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Registered Users 
                </a>
                <?php endif; ?>
                <?php if($_SESSION['auth_role'] == '2') :  ?>
                <a class="nav-link" style="color:white" href="tattooshop1.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-store-slash"></i></div>
                    Tattoo Shops
                </a>
                <a class="nav-link" style="color:white" href="announce1.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                    Announcements
                </a>
                <a class="nav-link" style="color:white" href="ratings_view1.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                    Reviews and Feedback
                </a>
                <li class="nav-item">
                <a href="chat/users.php"style="color: white"><i class='fas fa-comments' style='font-size:24px; padding: 8px'></i></a>
                </li>
                <?php endif; ?>
                <?php
                        if($_SESSION['auth_role'] == "1" || $_SESSION['auth_role'] == "3") {
                    echo '<a class="nav-link" style="color:white" href="announce.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></fa-thin></div>
                            Announcements
                        </a>
                        <a class="nav-link" style="color:white" href="appointment.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></fa-thin></div>
                            Appointments
                        </a>
                        <a class="nav-link" style="color:white" href="ratings_view.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-star"></i></fa-thin></div>
                            Ratings
                        </a>';
                }
                ?>
            <?php
                if($_SESSION['auth_role'] == "1" || $_SESSION['auth_role'] == "3") {
                echo '<a class="nav-link" style="color:white" href="services_.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></fa-thin></div>
                        Services
                </a>
                <a class="nav-link" style="color:white" href="inventories.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></fa-thin></div>
                    Products /  Equipment
                </a>
                <a class="nav-link" style="color:white" href="../chat/users.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-message"></i></fa-thin></div>
                    Messages
                </a>
                ';
                }
                ?>
                <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                <!-- <a class="nav-link collapsed" style="color:white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Tables
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> -->
                <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" style="color:white" href="tattooshops.php">Tattoo Shops</a>
                        <a class="nav-link" style="color:white" href="prices.php">Prices</a>
                        <a class="nav-link" style="color:white" href="services.php">Services</a>
                        <a class="nav-link" style="color:white" href="works.php">Works</a>
                        
                    </nav>
                </div> -->
                
                
                
                
        </div>

    </nav>
</div>

<style>
    #sidenavAccordion
    {
        background-color: #826F66;
        color: white;
    }
   a
   {
    color: white;
   }
    #layoutSidenav_nav
    {
        color:white;
    }
    a:hover{
        background: #FFB200;
        color: black;
        animation-duration: 3s;
    }
</style>