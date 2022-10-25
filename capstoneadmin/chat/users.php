<?php 
  session_start();
  include_once "../admin/config/dbcon.php";
  if (!isset($_SESSION['unique_id'])) {
    header("location: ../login.php");
  }
?>
<?php
  include_once "header.php";
?>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
            if ($_SESSION['role_as'] === '1') {
              $query = " SELECT u.fname, u.lname, u.unique_id, shop.name as shopname FROM user u
              join tattooshops shop on shop.id=u.shopid
              WHERE unique_id= '".$_SESSION['unique_id']."' ";
            } else {
              $query = " SELECT fname, lname, unique_id FROM user WHERE unique_id= '".$_SESSION['unique_id']."' ";
            }

            $query_run = mysqli_query($con, $query);
            $check_user = mysqli_num_rows($query_run) > 0;

            if ($check_user) {
              while ($row = mysqli_fetch_array($query_run)) {
                if ($_SESSION['role_as'] === '1') {
                  $userName = $row['shopname'];
                } else {
                  $userName = $row['fname'] ." ". $row['lname'];
                }
                echo '<div class="details">';
                  echo '<span>' . "Messages for " . $userName .'</span>';
                echo '</div>';
              }
            }
          ?>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">

      </div>
    </section>
  </div>


  <script src="javascript/users.js"></script>
