@extends('layouts.master')

@section('content')
<h1>Invoice</h1>
{{Former::open()->method('POST')->route('invoice.store') }}
<div class="form-group">
<select name="client_id" multiple class="form-control">
@foreach($clients as $c)
<option value="{{$c->id}}">{{$c->firstname.' '.$c->lastname}}</option>
@endforeach
</select>
</div>


<div class="form-group">
{{Former::text('date_created')->id('datepicker')}}
</div>


<div class="form-group">
{{Former::text('date_due')->id('datedue')}}
</div>


<div class="form-group">
<button type="submit" class="btn btn-default">Create Invoice</button>
{{Former::close()}}
</div>
<a href="{{URL::to('client/create')}}">New Client?</a>

 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
   <script>
    $(function() {
      $( "#datedue" ).datepicker();
    });
    </script>
@stop