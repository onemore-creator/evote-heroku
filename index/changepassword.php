<?php
$access = array(0);
$priv = $evote->getPrivilege($_SESSION["user"]);
if(in_array($priv, $access)){
$mg->printUserhandlerPanelMenu(2);
?>
<h3>Ändra lösenord</h3>
<hr>
<div style="max-width: 400px">
    <form action="actions/userhandler.php" method="POST">
    <div class="form-group">
            <label>Användarnamn:</label>
            <input type="text" name="username" class="form-control" style="margin-bottom: 3px" autocomplete="off">
            <label>Nytt lösenord:</label>
            <input type="password" name="psw" class="form-control" style="margin-bottom: 3px" autocomplete="off">
            <button type="submit" class="btn btn-primary" value="change" name="button">Byt Lösenord</button>
    </div>
    </form>
</div>
<?php
} else {
    echo "Du har inte behörighet att visa denna sida.";
}
?>
