<?php
require("index.php");
?>

<form method="POST" action="spoje.php">
    <label for="odkud" id="odkud_label"></label>
    <input id="odkud" type="text" value="Rektorát VŠB" />
    <label for="kam" id="kam_label"></label>
    <input id="kam" type="text" value="Svinov mosty, h. z." />
</form>

<?php
require("footer.php");