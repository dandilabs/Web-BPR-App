@extends('layouts.dashboard.index')
@section('title', 'Home')
@section('sub', 'Dashboard')
@section('content')
    <h3>Selamat datang di PT. Bank Perkreditan Rakyat RIzky Barokah</h3>
    <h4>Saya {{ Auth::user()->name }} Sebagai Admin </h4>
@endsection
