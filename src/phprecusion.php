<!DOCTYPE html>
<html>
<head>
	<title>PHP Recursion</title>
</head>
<body>
<?php

$categories = [
			[ 'id' =>  'animals', 'parent' =>  null],
			[ 'id' =>  'mammals', 'parent' =>  'animals'],
			[ 'id' =>  'cats', 'parent' =>  'mammals'],
			[ 'id' =>  'dogs', 'parent' =>  'mammals'],
			[ 'id' =>  'chihuahua', 'parent' =>  'dogs'],
			[ 'id' =>  'labrador', 'parent' =>  'dogs'],
			[ 'id' =>  'persian', 'parent' =>  'cats'],
			[ 'id' =>  'siamese', 'parent' =>  'cats'],
			[ 'id' =>  'cars', 'parent' => null ],
			[ 'id' =>  'ford', 'parent' =>  'cars' ],
			[ 'id' =>  'focus', 'parent' =>  'ford' ],
			[ 'id' =>  'fish', 'parent' =>  'animals' ],
			];



$nodes = [];

function nodeTree($categories,  $parent = null){

	$nodes = [];

	foreach($categories as $cat)
	{
		if($cat['parent'] == $parent)
		{
			$nodes[$parent] = (!is_array($cat) ? $cat['id'] : nodeTree($cat, $cat['parent']));
		}
	}
}

echo '<hr />';
var_dump($nodes);
echo '<hr />';


$tree = [
		
		'core' => [
				'init.php'
			],
		'classes' => [ 'user.php', 'has.php,', 'session.php'],
		'functions' => ['security.php'],
		'template' => ['index.template.php', 'includes' => ['header', 'footer']],
		'index.php',
		'login.php',
		'register.php',
		
		];
$treeArray = [];

function treeOut($tree, &$treeArray)
{
	$markup = '';
	$markup .= '';
	$treeArray = [];

	foreach($tree as $branch => $twig)
	{
		$markup .= '<li>'. (is_array($twig) ? $branch .treeOut($twig, $treeArray) : $twig) .'</li>';

		$treeArray[(is_array($twig) ? $branch .treeOut($twig, $treeArray) : $twig)] = $twig;
	}

	return '<ul>'. $markup .'</ul>';
}

echo treeOut($tree, $treeOut);

var_dump($treeArray);

?>

</body>
</html>