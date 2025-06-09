@extends('layouts.app')

@section('title', "Главная")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection


@section('content')
    <livewire:main-page/>
@endsection

@section('script')

@endsection