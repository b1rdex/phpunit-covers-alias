<!DOCTYPE html>
<html>
<head>
	<title>Recuserive functions</title>
</head>
<body>
<H2>See Console Log</H2>

<script >

const dragonEvents = [
	{type: 'attack', value: 12, target: 'dorkman'},
	{type: 'yawn', value: 40},
	{type: 'eat', target: 'horse'},
	{type: 'attack', value: 23, target: 'fluffy'},
	{type: 'attack', value: 12, target: 'dorkman'},
	{type: 'attack', value: 3, target: 'dorkman'},
	{type: 'attack', value: 10, target: 'dorkman'}
]

const totalDamageToDorkman = dragonEvents
	.filter(event => event.type === 'attack')
	.filter(event => event.target === 'dorkman')
	.map(event => event.value)
	.reduce((prev, value) => (prev || 0) + value)

const targets = dragonEvents
	.filter(event => event.target)
	.map(event => event.target)

const findFluffy = dragonEvents
	.filter(event => event.target === 'fluffy')

const totalAttackPoints = dragonEvents
	.filter(event => event.value) // Filter out null or undefined event.value
	.map(event => event.value) // Push to the new array only event.value
	.reduce((total, event) => (total | 0)  + event)	// Sum the array
	// .reduce((total, event) => { return total  + event}, 0) //Does the dame thing but specifies starting value
	
	console.log('Total:\n' + totalDamageToDorkman);
	console.log(JSON.stringify(targets, null, 2));
	console.log(findFluffy);
	console.log(totalAttackPoints);

/**
 * Other methods include
 * .split('\n')
 */	



let categories = [
			{id: 'animals', parent: null},
			{id: 'mammals', parent: 'animals'},
			{id: 'cats', parent: 'mammals'},
			{id: 'dogs', parent: 'mammals'},
			{id: 'chihuahua', parent: 'dogs'},
			{id: 'labrador', parent: 'dogs'},
			{id: 'persian', parent: 'cats'},
			{id: 'siamese', parent: 'cats'},
			{id: 'cars', parent:null },
			{id: 'ford', parent: 'cars' },
			{id: 'focus', parent: 'ford' },
			{id: 'fish', parent: 'animals' },
			]

let makeTree = (categories, parent) => {
	let node = {}
	categories
		.filter(c => c.parent === parent)
		.forEach(c => node[c.id] =
		 makeTree(categories, c.id)) 

	return node;
}

console.log(
	JSON.stringify( makeTree(categories, null), null, 2)
		)




















</script>

</body>
</html>