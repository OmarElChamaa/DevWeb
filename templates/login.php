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


</form>
</div>


<?php include '../templates/footer.php'; ?>
</body>

</html>