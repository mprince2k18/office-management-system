@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) -->

    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">@translate(Group Update)</h2>
            </div>
            <div class="float-right">
                <a href="{{  route("groups.index") }}" class="btn btn-primary">
                    <i class="la la-plus"></i>
                    @translate(Show All Groups)
                </a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{route('groups.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$group->id}}"/>
                <div class="">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@translate(Name)</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $group->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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
                            <textarea class="summernote" id="kt_summernote_1" name="description"
                                      placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $group->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">@translate(Select Permission)</label>
                        <div class="col-md-6">
                            <select class="form-control kt-select2 w-100" id=""
                                    name="permission_id[]" multiple required>
                                @foreach($permissions as $item)
                                    <option value="{{$item->id}}"
                                    @foreach($group->permissions as $item1)
                                        {{$item1->id == $item->id ? 'selected' : null}}
                                        @endforeach
                                    >{{$item->name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <button class="btn btn-primary m-2" type="submit">@translate(Update)</button>
                </div>

            </form>
        </div>

    </div>

@endsection
