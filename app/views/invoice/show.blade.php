@extends('layouts.master')

@section ('content')
<h1>Invoice Details: </h1>
<table class="table table-bordered">
<tr>
<th>Invoice Number</th>
<th>Date Due</th>
<th>Client</th>
<th>Amount</th>

</tr>

<tr>
<td>{{$invoice->id}}</td>
<td>{{$invoice->date_due}}</td>
<td>{{$invoice->client_id}}</td>
<td>Amount</td>
</tr>


</table>

@stop