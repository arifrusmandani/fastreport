<form method="POST" action="{{ url('laporan') }}">
@csrf
<input type="text" name="cover">
<input type="text" name="daftarisi">
<input type="text" name="bab">
<input type="text" name="lampiran">
<input type="submit" name="submit">
</form>