@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-5">CRUD with Livewire</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-create')
            </div>
        </div>
        <div>
            @livewire('user-table')
        </div>
        <div class="d-flex justify-content-center mt-5">
            <p class="text-center fw-normal">Pijar Karisma Prihanto | 201904560040</p>
        </div>
    </div>
@endsection