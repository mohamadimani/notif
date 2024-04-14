@extends('layouts.layout')

@section('title' , 'send email')

@section('content')
<form action="" class="form-control m-2" method="POST">
    <label for="email" class="m-2">Email:</label>
    <input type="email" id="email" class="d-block  m-2">
    <input type="submit" value="send email" class="btn btn-info m-2">
</form>
@endsection

