<?php


if (isset($_POST['submit'])) {
  // echo htmlspecialchars($_POST['email'] . '<br/>');
  // echo htmlspecialchars($_POST['title'] . '<br/>');
  // echo htmlspecialchars($_POST['ingredients'] . '<br/>');

  // check email
  if (empty($_POST['email'])) {
    echo 'An email is required' . '<br/>';
  } else {
    echo htmlspecialchars($_POST['email'] . '<br/>');
  }
  // check title
  if (empty($_POST['title'])) {
    echo 'A title is required'  . '<br/>';
  } else {
    echo htmlspecialchars($_POST['title'] . '<br/>');
  }
  // check ingredients
  if (empty($_POST['ingredients'])) {
    echo 'At least one ingredient is required ' . '<br/>';
  } else {
    echo htmlspecialchars($_POST['ingredients'] . '<br/>');
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php') ?>

<section class="container grey-text">
  <h4 class="center">Add a Pizza</h4>
  <form class="white" action="add.php" method="POST">
    <!-- email -->
    <label>Your Email:</label>
    <input type="email" name='email' />
    <!-- title -->
    <label>Pizza Title:</label>
    <input type="text" name='title' />
    <!-- ingredients -->
    <label>Ingredients (comma seperated):</label>
    <input type="text" name='ingredients' />

    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn brand z-depth-0" />
    </div>

  </form>
</section>

<?php include('./templates/footer.php') ?>

</html>