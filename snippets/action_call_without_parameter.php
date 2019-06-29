$actionCall = ~cat_facts()['all'];
$listOfMessages = array();
for($i = 0; $i <= sizeof($actionCall); $i++){
	$message = $actionCall[$i]['text'];
	$listOfMessages[] = $message;
}
