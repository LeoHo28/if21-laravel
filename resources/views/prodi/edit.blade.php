@extends('main')

@section('title', 'Prodi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Prodi</h3>
            <div class="card-tools">
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse"
                >
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove"
                >
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Fakultas</th>
                            <th>Singkatan</th>
                            <th>Dekan</th>
                            <th>Wakil Dekan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->singkatan }}</td>
                            <td>{{ $item->nama_dekan }}</td>
                            <td>{{ $item->nama_wadek }}</td>
                            <td>
                               <a href="{{ route('prodi.edit',$item->id) }}"class="btn btn-sm btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                <form method="POST" action="{{ route('prodi.destroy', $item->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                    data-toggle="tooltip" title='Delete'
                                    data-nama='{{ $item->nama }}'>Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        </div>
    </div>
    <!--end::Row-->
@endsection