@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Create Contact</h6>
                    <x-form method="post" action="{{ route('contact.store') }}" >
                        <x-form-input type="text" class="mb-3" name="subject" label="{{ __('Subject') }}" />
                        <x-form-input type="text" class="mb-3" name="email" label="{{ __('Email') }}" />
                        <x-form-textarea class="mb-3" name="message" label="{{ __('Message') }}" />
                        <x-form-submit class="mt-3 btn-success"><i class="bi bi-plus-circle"></i> <span> {{ __('Add') }}</span></x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection


