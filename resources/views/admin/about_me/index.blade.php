@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">About Me</h6>
                    <div class="col-md-12 mt-4" style="margin-bottom: 10px;">
                        <a class="btn btn-success" href="{{ route('about_me.create') }}">
                            <i class="bi bi-plus-circle"></i> <span>   {{ __('Add Biography') }}</span>

                        </a>
                    </div>
                    {{ $aboutMe->links() }}
                        <table class="table table-striped">
                            <tr class="bg-dark bg-gradient">
                                <td class="text-white">Image:</td>
                                <td class="text-white">Title:</td>
                                <td></td>
                            </tr>
                            @foreach($aboutMe as $biography)
                                <tr class="align-middle">
                                    <td><img height="100" src="/storage/about_me/{{$biography->img}}"></td>
                                    <td>{{$biography->title}}</td>
                                    <td>
                                        <x-form class="text-end" action="{{route('about_me.destroy', $biography)}}" method="post">
                                            <a class="btn btn-primary" href="{{ route('about_me.edit', $biography) }}"><i class="bi bi-pencil-square"></i> <span class="d-none d-md-inline">{{ __('Edit') }}</span></a>
                                            @csrf
                                            @method('delete')
                                            <x-form-submit type="submit" class="btn btn-danger delsoft"><i class="bi bi-trash-fill"></i> <span class="d-none d-md-inline">{{ __('Delete') }}</span></x-form-submit>
                                        </x-form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        {{ $aboutMe->links() }}
        </div>
    </div>
@endsection

