<?php
	require 'models/Form.php';

	$form = new Form($_POST);

?>

<form action="#" method="post">
	<?php
	echo $form->input("text", "username");
	echo $form->input("text", "usermail");
	echo $form->submit();
	?>
</form>

