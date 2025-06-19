@extends('layouts.app')

@section('title', "Главная")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/study.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test-component.css') }}">
@endsection


@section('content')
    <livewire:header/>
    <livewire:study/>
    <livewire:test-component test-id="{{ 1 }}" />
    <livewire:footer/>
@endsection

@section('script')

@endsection