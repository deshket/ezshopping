<html>
		<head>
	<title>Find a Contact</title>
      <meta> name="viewport" content="width=device-width, initial-scale=1"</meta>
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>
	<body>
    <div> id="page" data-role="page" data-theme="b" </div>
	<div data-role="header" data-theme="b">
<h1>
	Find your contact
		</h1>	</div>
    <div> data-role="content"</div>


					<?php
					include 'config.php';
					include 'opendb.php';

					$sql= "SELECT Id, name, lastname
					FROM test1";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
									echo "ID: " . $row["Id"]. "<br>";
					        echo "First Name: " . $row["name"]. "<br>";
					        echo "Last Name: " . $row["lastname"]. "<br><hr>";
					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);

					?>

				<div data-role="footer" data-theme="b">
	  <h4>Darice Corey-Gilbert &copy; 2016</h4>
	</div>
	</body>
</html>