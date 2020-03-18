@extends('layout.master')
@section('content')

    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">@translate(Group Create)</h2>
            </div>
            <div class="float-right">
                <a href="{{  route("groups.index") }}" class="btn btn-primary">
                    <i class="la la-plus"></i>
                    @translate(Show All Groups)
                </a>
            </div>
        </div>

        <div class="card-body">
                <form action="{{route('groups.store')}}" method="post">
                    @csrf
                    <div class="">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">@translate(Name)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">@translate(Description)</label>
                            <div class="mb-3 col-md-6">
                                <textarea class="summernote" id="kt_summernote_1" name="description" placeholder="Place some text here"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">@translate(Select Permission)</label>
                            <div class="col-md-6">
                                <select class="form-control select2 w-100" id=""  name="permission_id[]"  multiple required>
                                    @foreach($permissions as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">@translate(Save)</button>
                    </div>

                </form>
            </div>

        </div>

@endsection
