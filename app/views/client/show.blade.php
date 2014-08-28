@extends('layouts.master')

@section('content')
<h1>Client Description</h1>


<p>{{$client->firstname.' '.$client->lastname}}</p>

@stop