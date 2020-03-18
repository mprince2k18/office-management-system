@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->

    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">@translate(Group Show)</h2>
            </div>
            <div class="float-right">
                <a href="{{  route("groups.index") }}" class="btn btn-primary">
                    <i class="la la-plus"></i>
                    @translate(Show All Group)
                </a>
            </div>
        </div>

        <div class="card-body">
            <form>
                <div class="">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@translate(Name)</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $group->name }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">@translate(Slug)</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $group->slug }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">@translate(Description)</label>
                        <div class="mb-3 col-md-6">
                            {!! $group->description !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">@translate(Permission List)</label>
                        <div class="mb-3 col-md-6">
                            @foreach($group->permissions as $item)
                                <span class="badge badge-success">{{$item->name}}</span>,
                            @endforeach
                        </div>
                    </div>


                </div>
            </form>
        </div>

    </div>

@endsection
