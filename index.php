<h1>------------------------------------1.--------------------------------------</h1>
<?php
$string = str_repeat('*', 400);
echo "<span style='word-wrap: break-word;'>$string<span>";
echo '<br><br>';
$newStrings = ceil(mb_strlen($string) / 50);
for ($i = 0; $i < $newStrings; $i++) {
    echo substr($string, ($i * 50), 50);
    echo '<br>';
}
?>
<h1>------------------------------------2.--------------------------------------</h1>
<?php
$numberCount = 0;
for ($i = 0; $i < 300; $i++) {
    $numbers = rand(0, 300);
    echo $numbers > 275 ? "<span style='color: red;'>$numbers</span>" . " " : $numbers . " ";
    if ($numbers > 150) {
        $numberCount++;
    }
}
echo '<br>';
echo "There are $numberCount numbers which are less than 150.";
?>
<h1>------------------------------------3.--------------------------------------</h1>
<?php
$randomNumber = rand(3000, 4000);
$string = '';
for ($i = 1; $i < $randomNumber; $i++) {
    if ($i % 77 === 0) {
        $string .= ($i . ', ');
    }
}
echo substr($string, 0, -2) . ".";
?>
<h1>------------------------------------4.--------------------------------------</h1>
<h1>------------------------------------5.--------------------------------------</h1>
<div style="margin-left: 180px;">
<?php
$n = 25;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i === $j || (($i + $j) === ($n + 1))) {
            echo "<span style='margin:5px; line-height:18px; color:red;'>*</span>";
        } else {
            echo "<span style='margin:5px; line-height:18px;'>*</span>";
        }
    }
    echo '<br>';
}
?>
</div>
<h1>------------------------------------6.--------------------------------------</h1>
<?php
$hCount = 0;
while ($hCount !== 1) {
    $coin = rand(0, 1);
    if ($coin === 0) {
        echo 'H';
        $hCount++;
    } else {
        echo 'S';
    }
}
echo '<br>';
$hCount = 0;
while ($hCount !== 3) {
    $coin = rand(0, 1);
    if ($coin === 0) {
        echo 'H';
        $hCount++;
    } else {
        echo 'S';
    }
}
echo '<br>';
$rez = '';
do {
    $coin = rand(0, 1);
    if ($coin === 0) {
        $rez .= 'H';
        echo 'H';
    } else {
        $rez .= 'S';
        echo 'S';
    }
} while (!str_contains($rez, 'HHH'));
?>
<h1>------------------------------------7.--------------------------------------</h1>
<?php
$scoreKazysSum = 0;
$scorePetrasSum = 0;
while ($scoreKazysSum <= 222 && $scorePetrasSum <= 222) {
    $scoreKazys = rand(5, 25);
    $scoreKazysSum += $scoreKazys;
    $scorePetras = rand(10, 20);
    $scorePetrasSum += $scorePetras;
}
$winner = ($scoreKazysSum > $scorePetrasSum) ? 'Kazys' : 'Petras';
echo "Kazys has $scoreKazysSum scores, Petras has $scorePetrasSum scores. The winner is $winner.";
?>
<h1>------------------------------------8.--------------------------------------</h1>
<div style="margin-left: 300px;">
<?php
 for($i=0;$i<=10;$i++){
    for ($d=11-$i; $d > 0; $d--)  {
 
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
 
        echo "&nbsp;"."<span style='color:rgb(". rand(0,255) . ', ' . rand(0,255) . ', ' . rand(0,255) . ")'>*</span>"."&nbsp;";
    }
    echo "<br>";
}
 for($i=11;$i>=1;$i--){
    for ($d=1; $d <= 11-$i; $d++)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;"."<span style='color:rgb(". rand(0,255) . ', ' . rand(0,255) . ', ' . rand(0,255) . ")'>*</span>"."&nbsp;";
    }
    echo "<br>";
}
?>
</div>
<h1>------------------------------------9.--------------------------------------</h1>
<?php
$startTime = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$endTime = microtime(true);
$result = $endTime - $startTime;
echo "\"10 bezdzioniu \n suvalge 20 bananu.\" time is $result ms.";
echo '<br>';
$startTime = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$endTime = microtime(true);
$result = $endTime - $startTime;
echo "'10 bezdzioniu \n suvalge 20 bananu.' time is $result ms.";
?>
<h1>------------------------------------10.--------------------------------------</h1>
<h2>a)</h2>
<?php
$nailQuantity = 5;
$nailLength = 85;
$hitTimes = 0;
$hitLength = 0;
while ($hitLength <= ($nailQuantity * $nailLength)) {
    $hit = rand(5, 20);
    $hitLength += $hit;
    $hitTimes++;
    echo "$hit" . ' mm ';
}
echo '<br><br>';
echo "We need $hitTimes hits (5 - 20 mm) for $nailQuantity nails."
?>
<h2>b)</h2>
<?php
$nailQuantity = 5;
$nailLength = 85;
$hitTimes = 0;
$hitLength = 0;
while ($hitLength <= ($nailQuantity * $nailLength)) {
    $hit = rand(20, 30);
    $posibility = rand(1, 2);
    if ($posibility === 1) {
        $hitLength += $hit;
        $hitTimes++;
    } else {
        $hitTimes++;
        echo "$hit" . ' mm ';
    }
}
echo '<br><br>';
echo "We need $hitTimes hits (20 - 30 mm ) for $nailQuantity nails."
?>
<h1>------------------------------------11.--------------------------------------</h1>
<?php
$string = '';
for ($i = 0; $i < 50; $i++) {
    $randomNumber = rand(1, 200);
    if (str_contains($string, $randomNumber)) {
        $randomNumber = rand(1, 200);
    } else {
        $string .= $randomNumber . ' ';
    }
}
echo $string;
echo '<br>';
$stringSplit =  explode(' ', $string);
$string2 = '';
$stringSplitLength = count($stringSplit);
for ($i = 0; $i < $stringSplitLength; $i++) {
    $isPrime = true;
    for ($j = 2; $j < $stringSplit[$i]; $j++) {
        if ($stringSplit[$i] % $j == 0) {
            $isPrime = false;
        } else {
            $isPrime == true;
        }
    }
    if ($isPrime == true) {
        $string2 .= $stringSplit[$i] . ' ';
    }
}
echo $string2;
echo '<br>';
$string3 = '';
$string2Split =  explode(' ', $string2);
$string2SplitLength = count($string2Split);
sort($string2Split);
for ($x = 0; $x < $string2SplitLength; $x++) {
    if ($x == $string2SplitLength - 1) {
        echo $string2Split[$x];
    } else {
        echo $string2Split[$x] . ' ';
    }
}
?>
