<?php

$arr = [
    [
        'name' => 'Nguyễn Văn A',
        'age' => '18',
        'email' => 'emailgiongnhau11111111@gmail.com',
        'address' => 'Hà Nội'
    ],
    [
        'name' => 'Nguyễn Văn B',
        'age' => '19',
        'email' => 'emailgiongnhau22222222@gmail.com',
        'address' => 'Ninh Bình'
    ],
    [
        'name' => 'Nguyễn Văn C',
        'age' => '20',
        'email' => 'emailgiongnhau11111111@gmail.com',
        'address' => 'Nam Định'
    ],
    [
        'name' => 'Nguyễn Văn D',
        'age' => '22',
        'email' => 'nguyenvand@gmail.com',
        'address' => 'Hà Nội'
    ],
    [
        'name' => 'Nguyễn Văn E',
        'age' => '28',
        'email' => 'emailgiongnhau22222222@gmail.com',
        'address' => 'Hà Nội'
    ],
    [
        'name' => 'Nguyễn Văn F',
        'age' => '38',
        'email' => 'nguyenvanf@gmail.com',
        'address' => 'Phú Thọ'
    ],
];

$stringTable = '';

foreach ($arr as $index => $arrs) {
    $index++;
    $infoTables = "<tr><td>$index</td>";
    foreach ($arrs as $i => $arrsElement) {
        $infoTable = "<td>$arrs[$i]</td>";
        $infoTables .= $infoTable;
    }
    $infoTables .= '</tr>';
    $stringTable .= $infoTables;
}

echo "<table>
<tr>
  <th>STT</th>
  <th>Name</th>
  <th>Age</th>
  <th>Email</th>
  <th>Address</th>
</tr>
$stringTable
</table>";

echo "<h2>Những người có email trùng</h2>";

$emailTrung = '';
$mailDaTrung = [];
$count = 0;

foreach ($arr as $index1 => $arr1) {
    foreach ($arr as $index2 => $arr2) {
        if ($index1 !== $index2) {
            if ($arr1['email'] === $arr2['email']) {
                if (!in_array($arr1['email'], $mailDaTrung)) {

                    $mailDaTrung[] = $arr1['email'];
                    $count++;
                    $emailTrung .= "<tr><td>$count</td>";
                    foreach ($arr[$index1] as $keyChildArr1 => $childArr1) {
                        $stringInfo = $arr[$index1][$keyChildArr1];
                        $emailTrung .= "<td>$stringInfo</td>";
                    }
                    $emailTrung .= '</tr>';
                    $count++;
                    $emailTrung .= "<tr><td>$count</td>";
                    foreach ($arr[$index2] as $keyChildArr2 => $childArr2) {
                        $stringInfo = $arr[$index2][$keyChildArr2];
                        $emailTrung .= "<td>$stringInfo</td>";
                    }
                    $emailTrung .= '</tr>';
                }
            }
        }
    }
}

echo "<table>
<tr>
  <th>STT</th>
  <th>Name</th>
  <th>Age</th>
  <th>Email</th>
  <th>Address</th>
</tr>
$emailTrung
</table>";
