<!DOCTYPE html>
<html>
<head>

	<title></title>

</head>
<body>
	<?php 
	require_once(__DIR__ . "/controller/login-verify.php");
	//--------------------------------------------------------------------------------------------------------------------------------------------
	// Searches for Header
	//--------------------------------------------------------------------------------------------------------------------------------------------

		require_once(__DIR__ . "/view/header.php");

	//--------------------------------------------------------------------------------------------------------------------------------------------
	// Searches for Navagation
	//--------------------------------------------------------------------------------------------------------------------------------------------
		if(authenticatedUser()){
			require_once(__DIR__ . "/view/navagation.php");
		}
	//--------------------------------------------------------------------------------------------------------------------------------------------
	// Searches for Controller
	//--------------------------------------------------------------------------------------------------------------------------------------------


		require_once(__DIR__ . "/controller/create-db.php");

	//--------------------------------------------------------------------------------------------------------------------------------------------
	// Searches for Footer
	// -------------------------------------------------------------------------------------------------------------------------------------------

		require_once(__DIR__ . "/view/footer.php");
	
	//--------------------------------------------------------------------------------------------------------------------------------------------
	// Creates Post
	// -------------------------------------------------------------------------------------------------------------------------------------------
		require_once(__DIR__ . "/controller/read-posts.php");

	 ?>
</body>
</html>