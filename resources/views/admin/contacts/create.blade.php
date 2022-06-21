@extends('layouts.app')
@section('content')
    <h1>Create Contact</h1>

    <x-form method="post" action="{{ route('contact.store') }}" >
        <x-form-input type="text" class="mb-3" name="subject" label="{{ __('Subject') }}" />
        <x-form-input type="text" class="mb-3" name="email" label="{{ __('Email') }}" />
        <x-form-textarea class="mb-3" name="message" label="{{ __('Message') }}" />
        <x-form-submit class="mt-3">{{ __('Create') }}</x-form-submit>
    </x-form>
@endsection


