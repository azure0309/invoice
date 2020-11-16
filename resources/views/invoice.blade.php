<h1>Numbers</h1>


<table border=1>
  <tr>
    <td>PROD_NO</td>
    <td>BILL_MONTH</td>
    <td>TOT_BILL_AMT</td>
    <td>OVER_PYM</td>
    <td>PYM_AMT</td>
    <td>UPAID_AMT</td>
    <td>BILL_STATUS</td>
  </tr>
  @foreach($unpaid_numbers as $number)
  <tr>
    <td>{{$number['PROD_NO']}}</td>
    <td>{{$number['BILL_MONTH']}}</td>
    <td>{{$number['TOT_BILL_AMT']}}</td>
    <td>{{$number['OVER_PYM']}}</td>
    <td>{{$number['PYM_AMT']}}</td>
    <td>{{$number['UPAID_AMT']}}</td>
    <td>{{$number['BILL_STATUS']}}</td>
  </tr>
  @endforeach
</table>
