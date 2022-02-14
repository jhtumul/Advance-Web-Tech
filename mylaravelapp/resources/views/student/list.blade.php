<table>
    @foreach ($students as $s)
    <tr>
    <td>Name: <a href="/student/get/{{$s->id}}/{{$s->name}}/{{$s->dob}}" target="_blank">{{$s->name}}</a></td>
    <td>Name: <a href="{{route('student.details', ['id' => $s->id, 'dob' => $s->dob, 'name' => $s->name])}}" target="_blank">{{$s->name}}</a></td>
    </tr>
    @endforeach
</table>