<!DOCTYPE html>
<html lang="fr">
<?php include '../templates/head.php'?>
<body>
<div id="login">
    <?php include '../templates/header.php' ?>
    <?php include '../templates/nav.php' ?>
    <script type='text/javascript'>
        <?php include '../assets/required.js'?>
    </script>

<form action="../templates/creation.php" onsubmit="return requiredAdmin()">
    <!--<div class="imgcontainer">
        <img src="../assets/img/avatar.png" alt="Avatar" class="avatar">
    </div>
    -->
<b>Utilisateur : </b><br>
        <input type="text" if="usr"/>
        <span id="reqUsr" class="reqError"></span><br>
<br>

<b>Mot de Passe : </b><br>
        <input type="password" id="mdp"/>
        <span id="reqTxtMDP" class="reqError"></span><br>
<br>

<input type="submit" value="Submit">


<?php
function fetchAdmins($nom, $mdp){
$db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$statement = $db->prepare('SELECT * FROM "admins" WHERE "name" = :name and "password" = :password');
$statement->bindValue(':name', $nom);
$statement->bindValue(':password',$mdp);
$result = $statement->execute();
$result->finalize();
$db->close();
}
 
// Calling function
getSum(10, 20);
?>


</form>
</div>


<?php include '../templates/footer.php'; ?>
</body>

</html>