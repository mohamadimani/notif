@extends('layouts.layout')

@section('title' , 'send email')

@section('content')
<h3>{{ __('notification.send_email') }}</h3>

<ul>@if ($errors->any())
    @foreach ($errors->all() as $error)
       <li class="text-danger">{{$error}}</li>
     @endforeach
    @endif
</ul>

@if (session('success_email'))
    <li class="text-success">{{session('success_email')}}</li>
@else
    <li class="text-danger">{{session('danger_email')}}</li>
@endif
<form action="{{route('notification.send.email')}}" class="form-control m-2" method="POST">
    @csrf
    <label for="email" class="m-2">Text:</label>
    <input type="text" name="text" value="{{old('text')}}" id="email" class="d-block  m-2">
        <select name="to" id="to">
            @foreach ($users as $item)
            <option value="{{$item->email}}">{{$item->email}}</option>
            @endforeach
        </select>
    <input type="submit" value="send email" class="btn btn-info m-2">
</form>
@endsection

