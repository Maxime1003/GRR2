<?php
if (!grr_resumeSession())
{
	if ((getSettingValue("authentification_obli") == 1) || ((getSettingValue("authentification_obli") == 0) && (isset($_SESSION['login']))))
	{
		header("Location: ./logout.php?auto=1&url=$url");
		die();
	}
};
?>
