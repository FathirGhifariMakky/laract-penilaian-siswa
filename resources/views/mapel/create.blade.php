@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH MATA PELAJARAN</h2>
    <form method="POST" action="/mapel/store">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">NAMA MAPEL</td>
                <td class="bar">
                    <input type="text" name="nama_mapel">
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