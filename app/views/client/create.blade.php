@extends('layouts.master')
@section('content')
<h1>Create a new Client</h1>

{{Former::framework('TwitterBootstrap')}}
{{Former::horizontal_open()->method('POST')->route('client.store')->class('form-group')->role('form')}}
{{Former::text('firstname')->class('form-group')->label('First Name')->placeholder('john.smith')}}
{{Former::text('lastname')->class('form-group')->label('Last Name')->placeholder('password')}}
{{Former::submit('Create Client')->class('btn btn-default')}}

{{Former::close()}}



@stop