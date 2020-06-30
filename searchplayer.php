<?php
include ('fifaHelper.class.php');
include('Fifa.class.php');

$postName = $_POST['name'];
$newName = fifaHelper::ReplaceTitle($postName);


$fifaObj = new Fifa($newName);

$fifaObj->setFifaProperties();

echo '	<h1>	' . $fifaObj->name() . '</h1>		';
echo "<button>toevoegen aan mijn team </button>";

?>
