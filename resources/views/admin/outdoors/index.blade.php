@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Outdoor Images</h6>
                    <div class="col-md-12 mt-4" style="margin-bottom: 10px;">
                        <a class="btn btn-success" href="{{route('outdoor.create')}}">
                            {{ __('Add Outdoor Image') }}
                        </a>
                    </div>
                    {{ $outdoors->links() }}
                        <table class="table table-striped">
                                <tr class="bg-dark bg-gradient">
                                    <td class="text-white">Image:</td>
                                    <td class="text-white">Title:</td>
                                    <td></td>
                                </tr>
                            @foreach($outdoors as $outdoor)
                                <tr class="align-middle">
                                    <td><img height="100" src="/storage/outdoor/{{$outdoor->filename}}"></td>
                                    <td>{{$outdoor->title}}</td>
                                    <td>
                                        <x-form class="text-end" action="{{route('outdoor.destroy', $outdoor)}}" method="post">
                                            <a class="btn btn-primary" href="{{ route('outdoor.edit', $outdoor)}}"><i class="bi bi-pencil-square"></i> <span>{{ __('Edit') }}</span></a>
                                            @csrf
                                            @method('delete')
                                            <x-form-submit type="submit" class="btn btn-danger delsoft">{{ __('Delete') }}</x-form-submit>
                                        </x-form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        {{ $outdoors->links() }}
        </div>
    </div>

@endsection

