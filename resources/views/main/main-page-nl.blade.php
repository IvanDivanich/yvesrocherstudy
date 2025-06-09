@extends('layouts.app')

@section('title', "Главная")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection


@section('content')
    <livewire:header/>
    <livewire:main-page/>
    <livewire:footer/>
@endsection

@section('script')

@endsection