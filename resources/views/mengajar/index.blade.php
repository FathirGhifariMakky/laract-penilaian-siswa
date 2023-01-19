@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST GURU MENGAJAR </h2>
        <a href="/mengajar/create" class="button-primary"> TAMBAH DATA </a>
        <table calPadding="10" border="1">
            <tr>
                <th>NO</th>
                <th>GURU</th>
                <th>MAPEL</th>
                <th>KELAS</th>
                <th>ACTION</th>
            </tr>
            @foreach ($mengajar as $me)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $me->guru->nama_guru }}</td>
                    <td>{{ $me->mapel->nama_mapel }}</td>
                    <td>{{ $me->kelas->nama_kelas }}</td>
                    <td>
                        <a href="/mengajar/edit/{{ $me->id }}" class="button-warning">EDIT</a>
                        <a href="/mengajar/destroy/{{ $me->id }}" class="button-danger" onclick="return confirm('Yakin Hapus ?')">HAPUS</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection