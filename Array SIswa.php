<!DOCTYPE html>
<html lang=id>
    <head>
        <meta charset="UTF-8">
        <title>Praktikum 1</title>
    </head>
    <body>
    <?php
    $ns1 = ['id'=>1,'nim'=>'0110121316','uts'=>90,'uas'=>84,'tugas'=>88];
    $ns2 = ['id'=>2,'nim'=>'011316772','uts'=>78,'uas'=>78,'tugas'=>98];
    $ns3 = ['id'=>3,'nim'=>'01130345333','uts'=>90,'uas'=>86,'tugas'=>77];
    $ns4 = ['id'=>4,'nim'=>'011342213','uts'=>40,'uas'=>97,'tugas'=>82];
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    ?>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
    <thead>
    <tr>
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
    </tbody> 
    </table>
</body>
</html>