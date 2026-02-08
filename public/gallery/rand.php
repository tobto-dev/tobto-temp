<?php
// $num = rand(1,5);
// 1
 
$set = array (

array (
    'Online Abstract Art Gallery - Ukrainian Abstract Works',
    'Contemporary Ukrainian Artist Y.Polchenko: acrylic, oil, ink, watercolor, vector - the Original Art Paintings for collectors and Art lovers.',
    'Online Art Gallery Ukraine',
    'The Contemporary Abstract: the Spontaneous and Intuitive Vision'
),
 
//2
array (
    'Online Contemporary Abstract Art - YU POLCH',
    'Exploring the Unknown: Y. Polchenko Contemporary Abstract Art',
    'Online Art Gallery',
    'YU POLCH: innuendo, Minimalism, and the Beauty of Uncertainty'
    ),

//3
array (
    'Online Contemporary Abstract Art Ukraine',
    'Exploring the Unknown: Yu Polch Contemporary Abstraction Artworks',
    'Online Art Gallery',
    'Spontaneity, Random, Minimalism, and the Beauty of Uncertainty'
),

//4
array (
    'Ukraine Art Online - Intuitive Abstraction - Yu Polch',
    'Yu Polch Art',
    'Online Art Gallery',
    'innuendo / minimalism / uncertainty / elusion / untold / hidden beauty / nuances / subtle / illusion'
),

//5
array (
    'Online Spontaneous Intuitive Abstraction - Yu Polch',
    'Abstract Art: Spontaneous Intuitive Minimalism by Y. Polchenko',
    'The Art of Yu Polch',
    'innuendo / minimalism / uncertainty / elusion / untold / hidden beauty / nuances / subtle / illusion'
),

//6
array (
    'Інтуїтивна Абстракція Онлайн - Ю Польч',
  'Абстракціонізм: спонтанний інтуїтивний мінімалізм Ю. Польченка',
 'Мистецтво Ю Полча',
 'натяк / мінімалізм / невизначеність / ухиляння / невимовне / прихована краса / нюанс / тонке / ілюзія'
)

);

$t = array_rand($set,1);
$title = $set[$t][0];
$desc = $set[$t][1];
$h1 = $set[$t][2];
$h2 = $set[$t][3];

$titleu = $set[$t][0];
?>

