@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>EDIT NILAI</h2>
    <form method="POST" action="/nilai/update/{{ $nilai->id }}">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">GURU DAN MAPEL</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $me)
                        @if ($nilai->mengajar_id == $me->id)
                           <option value="{{ $me->id }}" selected>{{ $me->guru->nama_guru }} {{ $me->mapel->nama_mapel }}</option>                            
                        @else
                           <option value="{{ $me->id }}">{{ $me->guru->nama_guru }} {{ $me->mapel->nama_mapel }}</option> 
                        @endif                            
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
                        @if ($nilai->siswa_id == $s->id)
                           <option value="{{ $s->id }}" selected>{{ $s->nama_siswa }}</option>                            
                        @else
                           <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option> 
                        @endif                            
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bar">UH</td>
                <td class="bar"><input type="text" name="uh" value="{{ $nilai->uh }}"></td>
            </tr>
            <tr>
                <td class="bar">UAS</td>
                <td class="bar"><input type="text" name="uas" value="{{ $nilai->uas }}"></td>
            </tr>
            <tr>
                <td class="bar">UTS</td>
                <td class="bar"><input type="text" name="uts" value="{{ $nilai->uts }}"></td>
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