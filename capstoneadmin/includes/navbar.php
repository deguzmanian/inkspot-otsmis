<style>


.navbar
{
  position:fixed;
  z-index: 12;
  background: #826F66;
  width: 100%;
  height: 60px;
  color: white;
  font-size: 15px;
}
.nav-item a:hover
{

  color: white;
}
.nav-item a:hover ul
{
  background: white;
  color: #534340;
}

</style>

<!--<link rel="stylesheet" href=""> -->
<div class="navbar">
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <a class="nav-link" aria-current="page" href="userindex.php" style="color: white; float:left;font-size: 30px"><strong style="color: black">INK</strong>SPOT</a> 
    <br />
    <h6>Let's get Inked</h6>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item" style="font-family: 'Poppins', sans-serif;">
          <a class="nav-link active" aria-current="page" href="userindex.php"  style="color: white" > HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tattooshop.php" style="color: white">TATTOO SHOPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="designs.php" style="color: white">DESIGNS  / SERVICES</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="maps.php"style="color: white">LOCATE SHOPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.php"style="color: white">ABOUT US</a>
          
        <?php if(isset($_SESSION['auth_user'])) : ?>
          </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="chat/users.php" target="_blank" style="color: white">MESSAGES</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
            <h7>Welcome! <?=$_SESSION['auth_user']['user_name']; ?></h7>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <?php if($_SESSION['auth_role'] == '1' || $_SESSION['auth_role'] == '3') :  ?>
            <a href="admin/index.php"><button type="submit" name="logout_btn" class="dropdown-item">My Dashboard</button></a>
            <?php endif; ?>
            <?php if($_SESSION['auth_role'] == '0') :  ?>
            <a href="#"><button type="submit" name="logout_btn" class="dropdown-item">My Profile</button></a>
            <?php endif; ?>
            <form action="allcode.php" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
            </form>
            </li>
          </ul>
        </li>

        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>
</div>
