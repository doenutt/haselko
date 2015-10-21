<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>

<div id="d1">
naglowek
</div>

<div id="d2">
<dl>
<dt>MENU</dt>
<dd><a href="index.php">Strona główna</a></dd>
<dd><a href="tabela.php">Tabela</a></dd>
<dd><a href="tablice.php">Tablice asocjacyjne</a></dd>
<dd><a href="haslo.php">Hasło</a></dd>
<dd><a href="kontakt.html">Kontakt</a></dd>
</dl>
</div>

<div id="d3">
ZALOGUJ SIĘ:
<form action="haslo.php" method="POST">
Login:<input type="text" name="form" /><br/>
Hasło:<input type="password" name="form2" />
<input type="submit" name="wysyla_na_serwer" value="Wyslij!" />
</form>

<?php
if(isset($_POST['wysyla_na_serwer'])){
@$a=$_POST['form2'];
@$b='haslo';
if($a==$b)
{
echo 'Możesz się zalogować!';
}
else
if ($a!=$b)
{
echo 'Błędne hasło! :(';
}
?>

</div>

<div id="d4">
Dzisiaj jest:	
	
<?php
	$dzien=date('d');
		$dzien_tyg=date('l');
			$miesiac=date('n');
				$rok=date('Y');
				
	$miesiac_pl=array(1=>'stycznia','lutego','marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada','grudnia');
		$dzien_pl=array('Monday'=>'poniedziałek','Tuesday'=>'wtorek','Wednesday'=>'środa','Thursday'=>'czwartek','Friday'=>'piątek','Saturday'=>'sobota','Sunday'=>'niedziela');
	
	echo $dzien_pl[$dzien_tyg].', '.$dzien.' '.$miesiac_pl[$miesiac].' '.$rok.'.';
?>	
</div>

</body>
</html>
