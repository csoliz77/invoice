@extends('layouts.master')

@section ('content')
<table class="table table-striped">
<tr>
<th>Invoice ID</th>
<th>Date Due</th>
<th>Client</th>

<th>View</th>
<th>Delete</th>



</tr>
@foreach($invoices as $i)

<tr>
<td>{{$i->id}}</td>
<td>{{$i->date_due}}</td>
<td>{{$i->client_id}}</td>

<td><a href="invoice/{{$i->id }}">View</a></td>

<td><button class="btn btn-danger">Delete</button></td>
</tr>

@endforeach


</table>

@stop