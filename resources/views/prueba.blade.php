@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}" charset="UTF-8"></script>
@endsection
@section('block')
<input type="text" id="datepicker">
@endsection

@section('script')
    <script>
        $("#datepicker").datepicker();
    </script>
@endsection