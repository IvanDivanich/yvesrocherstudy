@extends('layouts.app')

@section('title', "Регистрация")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection


@section('content')
    <livewire:header/>
    <livewire:register/>
    <livewire:footer/>
@endsection

@section('script')

@endsection