<h1>Numbers</h1>


<table border=1>
  <tr>
    <td>Operator</td>
  </tr>
  @foreach($getOperator as $number)
  <tr>
    <td>{{$number['NAME']}}</td>
  </tr>
  @endforeach
</table>

