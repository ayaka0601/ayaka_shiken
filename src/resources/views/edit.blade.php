@section('content')
<form action="/edit" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        user_id
      </th>
      <td>
        <input type="text" name="id" value="{{$form->user_id}}">
      </td>
    </tr>
    <tr>
      <th>
        date
      </th>
      <td>
        <input type="text" name="date" value="{{$form->date}}">
      </td>
    </tr>
    <tr>
      <th>
        weight
      </th>
      <td>
        <input type="text" name="weight" value="{{$form->weight}}">
      </td>
    </tr>
    <tr>
      <th>
        calories
      </th>
      <td>
        <input type="text" name="calories" value="{{$form->calories}}">
      </td>
    </tr>
    <tr>
      <th>
        exercise_time
      </th>
      <td>
        <input type="text" name="exercise_time" value="{{$form->exercise_time}}">
      </td>
    </tr>
    <tr>
      <th>
        exercise_content
      </th>
      <td>
        <input type="text" name="exercise_content" value="{{$form->exercise_content}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection
