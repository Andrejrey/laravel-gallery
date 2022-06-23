@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Update Biography</h6>
                    <x-form action="{{ route('about_me.update', $aboutMe) }}" enctype="multipart/form-data">
                        @method('put')
                        @bind($aboutMe)
                        <x-form-input type="text" class="mb-3" name="title" label="{{ __('Title') }}" />
                        <x-form-input type="text" class="mb-3" name="subtitle" label="{{ __('Subtitle') }}" />
                        <x-form-textarea class="mb-3" name="text" label="{{ __('Text') }}" />
                        <div>
                        <img height="100" src="/storage/about_me/{{$aboutMe->img}}">
                        </div>
                        <x-form-input type="file" class="mb-3" name="img" label="{{ __('Imagedatei') }}:" />
                        @endbind
                        <x-form-submit class="mt-3 btn-success">{{ __('Update') }}</x-form-submit>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
