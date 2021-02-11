<h1>------------------------------------1.--------------------------------------</h1>
<?php
$string = str_repeat('*', 400);
echo "<span style='word-wrap: break-word;'>$string<span>";
echo '<br><br>';
$newStrings = ceil(mb_strlen($string) / 50);
for ($i = 0; $i < $newStrings; $i++) {
    echo substr($string, ($i * 50), 50);
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
<h1>------------------------------------8.--------------------------------------</h1>
<h1>------------------------------------9.--------------------------------------</h1>
<h1>------------------------------------10.--------------------------------------</h1>
<h1>------------------------------------11.--------------------------------------</h1>