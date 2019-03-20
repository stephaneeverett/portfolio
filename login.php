<?php $auth = 0; ?>
<?php include 'lib/includes.php';?>
<?php include 'partials/header.php';?>

<?php
var_dump($_POST);
?>

<form action="#" method="post">
  <div class="form-group">
    <label for="username">Nom d'utilisateur</label>
    <?php echo input('username');?>
  </div>
  <div class="form-group">
    <label for="username">Password</label>
    <input type="password" class="form-control" id="username" name="password">
  </div>
  <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<?php include 'partials/footer.php';?>
