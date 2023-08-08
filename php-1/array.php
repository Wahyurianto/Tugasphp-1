<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";

// SOAL NO 1
// Kelompokkan nama-nama ke dalam Array.
$kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
$adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");

echo "Kids: ";
print_r($kids);
echo "<br>";

echo "Adults: ";
print_r($adults);   
echo "<br>";

echo "<h3> Soal 2</h3>";

// SOAL NO 2
// Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
echo "Cast Stranger Things: ";
echo "<br>";
echo "Total Kids: " . count($kids) . "<br>";
echo "<ol>";
echo "<li> $kids[0]</li>";
echo "<li> $kids[1]</li>";
echo "<li> $kids[2]</li>";
echo "<li> $kids[3]</li>";
echo "<li> $kids[4]</li>";
echo "<li> $kids[5]</li>";
echo "</ol>";

echo "Total Adults: " . count($adults) . "<br>";
echo "<ol>";
echo "<li> $adults[0]</li>";
echo "<li> $adults[1]</li>";
echo "<li> $adults[2]</li>";
echo "<li> $adults[3]</li>";
echo "<li> $adults[4]</li>";
echo "</ol>";

echo "<h3> Soal 3 </h3>";

// SOAL NO 3
// Susun data-data ke dalam bentuk Asosiatif Array dalam Array Multidimensi
$characters = array(
    array(
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
        
    ),
    array(
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ),
    array(
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ),
    array(
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    )
);
 
    foreach ($characters as $character) {
        echo "<tr>";
        echo "<td> Name :" . $character["Name"] . "</td> <br>";
        echo "<td> Age :" . $character["Age"] . "</td><br>";
        echo "<td> Aliases :" . $character["Aliases"] . "</td><br>";
        echo "<td> Status :" . $character["Status"] . "</td><br><br>";
        echo "</tr>";
    }
?>
</body>
</html>
