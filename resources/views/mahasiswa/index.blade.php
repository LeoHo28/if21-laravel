<h1>Mahasiswa</h1>

@foreach ($mahasiswa as $item)
    {{ $item->npm }}
    {{ $item->nama }} <br/>
    {{ $item->jk }} <br/>
    {{ $item->tanggal_lajir }} <br/>
    {{ $item->tempat_lahir }} <br/>
    {{ $item->asal_sma }} <br/>
    {{ $item->foto }} <br/>
    {{ $item->prodi_id }} <br/>
@endforeach