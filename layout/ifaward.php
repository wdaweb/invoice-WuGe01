<?php
$years=$_POST['years'];
$period=$_POST['period'];
$sql1="select `id`, `code`, `number` from `invoices` where `period` = '$period' AND `years` = '$years' ";
$sql2="select * from `award` where `period` = '$period' AND `years` = '$years' ";
$row1=$pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
$row2=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);
$Special_award=strrev($row2['Special_award']);
$S_award=strrev($row2['S_award']);
$h1_award=strrev($row2['h1_award']);
$h2_award=strrev($row2['h2_award']);
$h3_award=strrev($row2['h3_award']);
$six_award=strrev($row2['six_award']);
$six2_award=strrev($row2['six2_award']);
$six3_award=strrev($row2['six3_award']);



echo "<table class='table'>";

foreach($row1 as $r){
echo "<tr>";
// echo $r['number']."<br>"; 
$number=strrev($r['number']);

if($number == $Special_award){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "特別獎獎金1,000萬元";
    echo "</td>";
}else if($number == $S_award){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "特獎獎金200萬元";
    echo "</td>";
    // 頭獎1
}else if(substr($number, 0,7) == substr($h1_award, 0,7)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4萬元";
    echo "</td>";
    
}else if(substr($number, 0,6) == substr($h1_award, 0,6)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1萬元";
    echo "</td>";
    
}else if(substr($number, 0,5) == substr($h1_award, 0,5)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4千元";
    echo "</td>";
    
}else if(substr($number, 0,4) == substr($h1_award, 0,4)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1千元";
    echo "</td>";
    
}else if(substr($number, 0,3) == substr($h1_award, 0,3)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金2百元";
    echo "</td>";
    

    // 頭獎2
}else if(substr($number, 0,7) == substr($h2_award, 0,7)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4萬元";
    echo "</td>";
    
}else if(substr($number, 0,6) == substr($h2_award, 0,6)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1萬元";
    echo "</td>";
    
}else if(substr($number, 0,5) == substr($h2_award, 0,5)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4千元";
    echo "</td>";
    
}else if(substr($number, 0,4) == substr($h2_award, 0,4)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1千元";
    echo "</td>";
    
}else if(substr($number, 0,3) == substr($h2_award, 0,3)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金2百元";
    echo "</td>";
    

    // 頭獎3
}else if(substr($number, 0,7) == substr($h3_award, 0,7)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4萬元";
    echo "</td>";
    
}else if(substr($number, 0,6) == substr($h3_award, 0,6)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1萬元";
    echo "</td>";
    
}else if(substr($number, 0,5) == substr($h3_award, 0,5)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金4千元";
    echo "</td>";
    
}else if(substr($number, 0,4) == substr($h3_award, 0,4)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金1千元";
    echo "</td>";
    
}else if(substr($number, 0,3) == substr($h3_award, 0,3)){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "獎金2百元";
    echo "</td>";
    

    // 六獎
}else if(substr($number, 0,3) == $six_award){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "六獎獎金2百元";  
    echo "</td>";
    
}else if(substr($number, 0,3) == $six2_award){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "六獎獎金2百元";  
    echo "</td>";
    
}else if(substr($number, 0,3) == $six3_award){
    echo "<td>";
    echo $r['code'] . "-" . $r['number'];
    echo "</td><td>";
    echo "六獎獎金2百元";  
    echo "</td>";
    
}
echo "</tr>";
};
echo "</table>";
?>