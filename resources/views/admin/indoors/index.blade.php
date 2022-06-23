@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Indoor</h1>
        <div  class="col-md-12 mt-4" style="margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{route('indoor.create')}}">
                {{ __('Add Indoor Image') }}
            </a>
        </div>
        <table class="table table-striped">
            <tr class="bg-dark bg-gradient">
                <td class="text-white">Image:</td>
                <td class="text-white">Title:</td>
                <td></td>
            </tr>
            @foreach($indoors as $indoor)
            <tr  class="align-middle">
                <td><img height="100" src="/storage/indoor/{{$indoor->filename}}"></td>
                <td>{{$indoor->title}}</td>

                <td>
                    <x-form class="text-end" action="{{route('indoor.destroy', $indoor)}}" method="post">
                        <a class="btn btn-primary" href="{{ route('indoor.edit', $indoor) }}">{{ __('Edit') }}</a>
                        @csrf
                        @method('delete')
                        <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                    </x-form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

