<!DOCTYPE html>
<html lang="fr">
<?php include '../templates/head.php'?>
<script >
<?php include '../assets/script.js'?>
</script>
<body>
<!--
    <a href="#eng" data-reload>English</a>
    <a href="#fr" data-reload>Francais</a>

-->
    <div id="creation">
    <?php include '../templates/header.php' ?>
    <?php include '../templates/nav.php' ?>
    <script type='text/javascript'>
    <?php include '../assets/required.js'?>
    </script>


<h1 id="remplir"> Remplir</h1>

<style type="text/css">
			.reqError{
				color: #ff0000; /*Red Color*/
				font-weight: bold;
			}
		</style>

<form onsubmit="return required()">

    <b>Email: </b><br>
		<input type="email" id="mail"/>
		<span id="reqEmail" class="reqError"></span><br>
	<br>
    <b>Titre: </b><br>
		<input type="text" id="Titre"/>
		<span id="reqTxtTitre" class="reqError"></span><br>
	<br>

    <b>Description: </b><br>
		
        <textarea rows="30" cols="40" name="desc" id="desc"></textarea>
		<span id="reqTxtdesc" class="reqError"></span><br>
	<br>
    
<!--
    <br>
    <br>

    <label for="file-select">Image:= </label>
    <input type="file" name="upload" id="file-select">-->

    <input type="submit" value="Submit">

</form>

<?php include '../templates/footer.php'; ?>

<!--<script src="../assets/lang.js"> </script>-->
</div>

</body>

</html>