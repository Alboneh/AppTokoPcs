<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
    <td>Admin_id</td>
    <td>Nama</td>
    <td>Harga</td>
    <td>Stock</td>
    </tr>
   <?php
    foreach($product as $row){
        echo"
        <tr>
        <td>".$row->admin_id."</td>
        <td>".$row->nama."</td>
        <td>".$row->harga."</td>
        <td>".$row->stok."</td>
        </tr>
        ";
    }
    ?>
    </table>
</body>
</html>