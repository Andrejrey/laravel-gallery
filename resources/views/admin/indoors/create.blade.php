@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Add Intdoor Image</h6>
                    <x-form method="post" action="{{ route('indoor.store') }}" enctype="multipart/form-data">
                        <x-form-input type="file" class="mb-3" name="filename" label="{{ __('Imagedatei') }}:" />
                        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
                        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
                        <x-form-submit class="mt-3 btn-success"><i class="bi bi-plus-circle"></i> <span> {{ __('Add') }}</span></x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection



