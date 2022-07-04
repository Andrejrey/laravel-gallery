@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Update Indoor Image</h6>
                    <x-form method="put" action="{{ route('indoor.update', $indoor) }}" enctype="multipart/form-data">
                        @csrf
                        @bind($indoor)
                        <div class="edit-img mb-3 mt-3">
                        <img height="240" src="/storage/indoor/{{$indoor->filename}}">
                        </div>
                        <x-form-input type="file" class="mb-3" name="filename" label="{{ __('Imagedatei') }}:" />
                        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
                        <x-form-textarea class="mb-3" name="description" label="{{ __('Description') }}" />
                        @endbind
                        <x-form-submit class="mt-3 btn-success"><i class="bi bi-box-arrow-in-up"></i> <span> {{ __('Update') }}</span></x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
