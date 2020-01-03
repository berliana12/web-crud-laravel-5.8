<form action="{{Route('siswa.update',$siswa->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nama" value="{{$siswa->nama}}">
        <input type="submit" name="submit">
</form>