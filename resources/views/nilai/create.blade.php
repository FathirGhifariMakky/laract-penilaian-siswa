@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH NILAI</h2>
    <form method="POST" action="/nilai/store">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">GURU DAN MAPEL</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $me)
                            <option value="{{ $me->id }}">{{ $me->guru->nama_guru }} {{ $me->mapel->nama_mapel }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bar">SISWA</td>
                <td class="bar">
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>       
            <tr>
                <td class="bar">UH</td>
                <td class="bar">
                    <input type="text" name="uh">
                </td>
            </tr>
            <tr>
                <td class="bar">UAS</td>
                <td class="bar">
                    <input type="text" name="uas">
                </td>
            </tr>
            <tr>
                <td class="bar">UTS</td>
                <td class="bar">
                    <input type="text" name="uts">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit" method="POST">SUBMIT</button></center>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection