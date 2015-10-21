@extends('views::layouts.layout')
@section('content')
  <p>Hello world</p>
  
  <a href="{{ asset('admin/auth/logout') }}">Выйти</a>
@stop