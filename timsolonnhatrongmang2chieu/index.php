<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai3</title>
</head>
<body>
<?php
$array = [[1, 2, 3, 4, 5], [1, 2, 3, 4, 5, 6]];
$max = $array[0];
$index = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        /*         echo $array[$i][$j]."<br>";*/
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
            $index = $i;
            $index2 = $j;
        }
    }
}
echo $j;

?>
<!--<script>
    let array = [1, 2, 3, 4, 5, 6]; // mảng 1 chiều.
    let array2 = [[1, 2, 3], [4, 5, 6]];// mảng 2 chiều.
    for (let i = 0; i < array2.length; i++) { //duyệt mảng 1
        for (let j = 0; j < array2[i].length; j++) { // duyệt mảng 2
            document.write(array2[i][j]); //in ra các phần tử mảng 2 chiều trong đó i,j là vị trí các phần tử của mảng
        }
    }
</script>-->
</body>
</html>