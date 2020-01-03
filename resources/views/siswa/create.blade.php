<form action="{{Route('siswa.store')}}" method="post">
    @csrf
    <input type="text" name="nama" placeholder="nama siswa">
    <input type="submit" name="submit">
</form>