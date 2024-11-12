<?php
$enilai = 88;
if ($enilai > 90) {
    $grade = "A";
}elseif($enilai > 80){
    $grade = "B";
}elseif($enilai > 60){
    $grade = "C";
}elseif($enilai > 40){
    $grade = "D";
}elseif($enilai > 30){
    $grade = "E";
}else {
    $grade = "F"
}
echo "Nilai Anda: $enilai<br>";
echo "Grade:$grade";

?>
