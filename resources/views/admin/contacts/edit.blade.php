@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Update Contact</h6>
                    <x-form method="put" action="{{ route('contact.update', $contact) }}" >
                        @csrf
                        @bind($contact)
                        <x-form-input type="text" class="mb-3" name="subject" label="{{ __('Subject') }}" />
                        <x-form-input type="text" class="mb-3" name="email" label="{{ __('E-mail') }}" />
                        <x-form-textarea class="mb-3" name="message" label="{{ __('Message') }}" />
                        @endbind
                        <x-form-submit class="mt-3 btn-success">{{ __('Update') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
