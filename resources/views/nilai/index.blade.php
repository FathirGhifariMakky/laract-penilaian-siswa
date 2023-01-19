@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST NILAI </h2>
        <a href="/nilai/create" class="button-primary"> TAMBAH DATA </a>
        <table calPadding="10" border="1">
            <tr>
                <th>NO</th>
                <th>GURU DAN MAPEL</th>
                <th>SISWA</th>
                <th>UH</th>
                <th>UAS</th>
                <th>UTS</th>
                <th>NA</th>
                <th>ACTION</th>
            </tr>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->mengajar->guru->nama_guru }} {{ $n->mengajar->mapel->nama_mapel }}</td>
                    <td>{{ $n->siswa->nama_siswa }}</td>
                    <td>{{ $n->uh }}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->uts }}</td>
                    <td>{{ $n->na }}</td>
                    <td>
                        <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('Yakin Hapus ?')">HAPUS</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection