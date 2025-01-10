<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@foreach($barang as $data)
    <table border=0 >
        <tr>
            <td><li>{{ $data->id }}</li></td>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->merk }}</td>
            <td>{{ $data->harga }}</td>
        </tr>
    </table>
    <hr>
@endforeach  

</body>
</html> 