<?php
session_start();
if (isset($_POST["logout"])) {
    session_destroy();
    ?><script>window.location.href="registration.php"</script>
<?php}

// include "header.php";
echo "<h2>Welcome " . $_SESSION["username"] . "</h2>";
?>
<form method="post" action=""><button type="submit" name="logout">
        Log Out
    </button>
</form>
<button></button>