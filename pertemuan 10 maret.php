<?php

    $array=[
        [
            'nama'=>'Albert',
            'nim'=>192410101,
            'asal'=>'bojonegoro'
        ],
        [
            'nama'=>'Bejo',
            'nim'=>1924101010,
            'asal'=>'surakarta'
        ],
    ]; //pembuatanvariabel(array)


    foreach($array as $orang){
    echo $orang['nama']; // dengan echo
    echo '<table> 
        <thead>
            <tr>
            <th>Nama</th>
            <th>nim</th>
            <th>asal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>' .$orang['nama']; '</td>
            <td>' .$orang['nim']; '</td>
            <td>' .$orang['asal'];'</td>
        </tbody>
        </table>'; //menampilkan dengan tag html
            
    }

    
?>