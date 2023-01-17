@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH NAMA KELAS</h2>
    <form method="POST" action="/kelas/update/{{ $kelas->id }}">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">NAMA KELAS</td>
                <td class="bar">
                    <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}">
                </td>
            </tr>
            <tr>
                <td class="bar">JURUSAN</td>
                <td class="bar">
                    <select name="jurusan_id">
                        <option></option>
                        @foreach ($jurusan as $j)
                           <option @if ($j->id == $kelas->jurusan_id) 
                               selected 
                               @endif value="{{ $j->id}}">{{ $j->nama_jurusan }}

                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit" method="POST">UBAH</button></center>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection