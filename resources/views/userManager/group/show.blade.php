@extends('layout.master')
@section('content')
    <!-- Content Header (Page header) -->

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Group Show
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <!--We Can Add There button -->
                    <a href="{{ route("groups.index") }}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-list"></i>
                        Show All Group
                    </a>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body">
            <form>
                <div class="">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $group->name }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Slug</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $group->slug }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Description</label>
                        <div class="mb-3 col-md-6">
                            {!! $group->description !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Permission List</label>
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
