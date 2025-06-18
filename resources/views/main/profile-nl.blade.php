@extends('layouts.app')

@section('title', "Профиль")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection


@section('content')
    <livewire:header/>
    <livewire:profile/>
    <livewire:footer/>
@endsection

@section('script')

@endsection