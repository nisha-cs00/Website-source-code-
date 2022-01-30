<?php
session_start();
if(session_destroy())
{
	?>
	<script>
		alert("Logged out.");
        location.replace("login.php");
	</script>
	<?php
}
?>