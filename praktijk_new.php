<?php include("includes/header.php"); ?>
<div class="span-24"><h1>Nieuwe praktijk</h1></div>
<form action="controller/praktijk.php" method="post">
<p>Praktijknaam: <input name="praktijk" type="text" /></p>
<p>Straat: <input name="straat" type="text" /></p>
<p>Nummer: <input name="huisnummer" type="text" /></p>
<p>Postcode: <input name="postcode" type="text" /></p>
<p>Stad: <input name="stad" type="text" /></p>
<p>Zorgeenheden: <input name="zorgeenheden" type="text" /></p>
<input type="submit" value="Opslaan" />
</form>
<?php include("includes/footer.php"); ?>