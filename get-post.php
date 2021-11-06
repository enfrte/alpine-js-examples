<?php 

echo '<pre>Results: ';

if (!empty($_POST)) {
	echo "POST\n";
	print_r($_POST);
}
elseif (!empty($_GET)) {
	echo "GET\n";
	print_r($_GET);
}
else {
	echo 'Error';
}

?>