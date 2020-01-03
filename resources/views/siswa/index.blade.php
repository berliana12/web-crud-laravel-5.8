<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{Route('siswa.create')}}">Tambah Siswa</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td><a href="{{Route('siswa.show', ['id'=>$item->id])}}">Show</a></td>
                    <td><a href="{{Route('siswa.edit', ['id'=>$item->id])}}">Edit</a></td>
                    <td>
                        <form action="{{Route('siswa.destroy', ['id'=>$item->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>