@extends('layout')

@section('content')

<h1>DB挿入結果</h1>

<table>
    <tr>
        <td>{{$insertid}}&nbsp;&nbsp;</td>
        <td>{{$insertname}}&nbsp;&nbsp;</td>
        <td>{{$insertage}}&nbsp;&nbsp;</td>
        <td>{{$insertdate}}&nbsp;&nbsp;</td>
    </tr>
</table>



@endsection
