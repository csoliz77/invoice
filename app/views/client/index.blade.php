@extends('layouts.master')

@section('content')
 <h1>List of Clients</h1>

<table class="table table-striped">

<tr>
<th>First Name</th>
<th>Last Name</th>
<th>ID</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>
 @foreach($clients as $c)
<tr>
<td>{{$c->firstname }}</td>
<td>{{$c->lastname}}</td>
<td>{{$c->id}}</td>
<td><a href="client/{{$c->id}}">View</a></td>

<td>{{HTML::link('client/'.$c->id .'/edit', 'Edit')}}</td>
<td>
{{Former::open()->route('client.destroy', $c->id) }}
<button type="submit" class="btn btn-danger">Delete</button>
{{Former::close()}}
</td>
</tr>
 @endforeach

 </table>
 @stop