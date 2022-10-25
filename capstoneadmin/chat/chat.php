<?php 
  session_start();
  include_once "../admin/config/dbcon.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>

  <div class="wrapper chat-wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $msgQuery = "SELECT shop.name as shopname, user.unique_id FROM user join tattooshops shop on shop.id=user.shopid WHERE unique_id='".$user_id."'";
          $sql = mysqli_query($con, $msgQuery);
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          } else {
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="details">
          <span><?php echo $row['shopname']?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

