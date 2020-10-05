
<!doctype html>
<html>
<head>
    <title> Kapittel 10 </title>
    <!-- UTF-8 gjør at vi kan bruke æ, ø og å -->
    <meta charset="UTF-8">
 
</head>
<body>
    <h1> Felicias php-dokument </h1>

<?php
// her angis variablene $tall. Den får verdien 23.
$tall = 23;
echo "<p>Tallet er $tall. </p>"; 

//Her blir verdien i variabelen $tall endret til 42.
$tall = 42;
echo "<p> Nå er tallet $tall. </p>;
?>

<p> Fordi denne teksten ikke er omsluttet av php-taggene, kan jeg skrive som om jeg jobber i et vanligt HTML-dokument, </p>

<?php
echo "<p> Her er vi tilbake i PHP, da må jeg bruke echo for å skrive HTML-kode. </p>";
echo "<p> Variabelen jeg definerte i starten av dokumentet, finnes fremledes, tallet er $tall. </p>";
?>

</body>
</html>
