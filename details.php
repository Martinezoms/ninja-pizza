<?php

// connect db
include('./config/db_connect.php');


// check POST request
if (isset($_POST['delete'])) {
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  echo $id_to_delete;

  $sql = "DELETE FROM pizza WHERE id = $id_to_delete";


  if (mysqli_query($conn, $sql)) {
    // success
    header('location: index.php');
  } else {
    // failure
    echo 'query error: ' . mysqli_error($conn);
  }
}

// check GET request id params
if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // make query
  $sql = "SELECT * FROM pizza WHERE id = $id";

  // get query results
  $result = mysqli_query($conn, $sql);

  // fetch result in array format
  $pizza = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./templates/header.php') ?>

<div class="container center grey-text">
  <?php if ($pizza) : ?>
    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
    <p> Created by : <?php echo htmlspecialchars($pizza['email']) ?></p>
    <p><?php echo date($pizza['created_at']) ?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients']) ?>

      <!-- Delete form -->
    <form action="details.php" method="POST">
      <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>" />
      <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0" />
    </form>
  <?php else : ?>
    <h5 class="red-text">No such pizza exist</h5>
  <?php endif; ?>
</div>

<?php include('./templates/footer.php') ?>

</html>