@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST NAMA KELAS </h2>
        <a href="/kelas/create" class="button-primary"> TAMBAH DATA </a>
        <table calPadding="10" border="1">
            <tr>
                <th>NO</th>
                <th>NAMA KELAS</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>
            @foreach ($kelas as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan->nama_jurusan }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $k->id }}" class="button-warning">EDIT</a>
                        <a href="/kelas/destroy/{{ $k->id }}" class="button-danger" onclick="return confirm('Yakin Hapus ?')">HAPUS</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection