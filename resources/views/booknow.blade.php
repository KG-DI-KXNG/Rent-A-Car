@extends('layouts.rentcar')
@section('title','Reservation')

@section('content')

    <book-now cardetails="{{$CarDetail}}" />

@endsection