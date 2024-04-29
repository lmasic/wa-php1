<?php 
if (isset($_POST["jm"]))
    print_r($_POST);
    
if (isset($_GET["x"])) echo $_GET["x"];    
?>
<h1>Kontakt</h1>
<section> 
<div class="left"><h2>Provozovatel...</h2> 
<p>Lorem ipsum dolor sit amet consectetuer tellus leo consequat nunc.</p>
<p>In justo consectetuer eget pretium ligula sociis vestibulum congue sed gravida. Aenean condimentum Vestibulum vitae id.</p>

</div>
<div class="right">
<form method="post" action="send.php"> 
<label for="jm">Jméno:</label><input type="text" name="jm" id="jm">
<textarea name="zprava"></textarea>
<input type="submit" value="odeslat">
</form>
</div>
</section>