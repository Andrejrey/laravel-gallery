@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h6 class="card-header bg-dark bg-gradient text-white">Indoor Images</h6>
                    <div  class="col-md-12 mt-4" style="margin-bottom: 10px;">
                        <a class="btn btn-success" href="{{route('indoor.create')}}">
                            <i class="bi bi-plus-circle"></i> <span> {{ __('Add Intdoor Image') }}</span>
                        </a>
                    </div>
                    {{ $indoors->links() }}
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
                                        <a class="btn btn-primary" href="{{ route('indoor.edit', $indoor) }}"><i class="bi bi-pencil-square"></i> <span>{{ __('Edit') }}</span></a>
                                        @csrf
                                        @method('delete')
                                        <x-form-submit type="submit" class="btn btn-danger delsoft"><i class="bi bi-trash-fill"></i> <span>{{ __('Delete') }}</span></x-form-submit>
                                    </x-form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        {{ $indoors->links() }}
        </div>
    </div>
@endsection

