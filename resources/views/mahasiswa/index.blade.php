<h1>Mahasiswa</h1>
@foreach ($mahasiswa as $item )
{{ $item->npm }}
{{ $item->nama }}
<br/>
@endforeach