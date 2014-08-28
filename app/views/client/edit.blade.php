@extends('layouts.master')

@section('content')
<h1>Edit Client Information</h1>

{{Former::horizontal_open()->method('PUT')->route('client.update', $client->id) }}

{{Former::text('firstname')->placeholder($client->firstname)}}
{{Former::text('lastname')->placeholder($client->lastname)}}

{{Former::submit()->class('btn btn-default')}}
{{Former::close()}}