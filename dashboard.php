<?php
  /*
   * File: dashboard.php
   * Title: Dashboard page for brainiac page
   */
  require_once 'includes/session.php';
  $title = "Brainiac Dashboard Page";
  confirm_logged_in();
  include 'includes/header.php';

  if (isset($_GET['action']) && $_GET['action'] == "done") {
    print "<p class='success'>" . 'Your account has been edited successfully!' . "</p>";
  }

?>

  <div id="container">
    <h2>Brainiac Platform</h2>
    <p>Welcome to the Geek's lounge, <strong><?php print $_SESSION['lastname']; ?></strong>!</p>
    <ul>
      <li><a href="chat.php" class="ci">Chat Room</a></li>
      <li><a href="settings.php">Edit Account</a></li>
      <li><a href="logout.php" name="logout">Logout</a></li>
    </ul>
  </div>
		
<?php include 'includes/footer.php'; ?>	