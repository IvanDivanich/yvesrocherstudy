@extends('layouts.app')

@section('title', "Авторизация")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection


@section('content')
    <livewire:header/>
    <livewire:login/>
    <livewire:footer/>
@endsection

@section('script')

@endsection