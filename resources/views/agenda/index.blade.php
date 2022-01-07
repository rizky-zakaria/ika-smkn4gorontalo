@extends('master/template')

@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agenda<a href="{{ route('agenda.create') }}" class="btn btn-primary" style="float: right">Tambah Data</a></h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pelaksanaan</th>
                                <th scope="col">Teruntuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ ($key+1) }}</th>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->tgl_agenda }}</td>
                                <td>Angkatan {{ $item->teruntuk }}</td>
                                <td>
                                    <a href="{{ route('agenda.edit', $item->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>

                                    <form action="{{ url('home/agenda', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
