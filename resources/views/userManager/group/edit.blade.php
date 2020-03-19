@extends('layout.master')
@section('title', 'Group Create')
@section('parentPageTitle', 'Admin Area')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>

<link rel="stylesheet" href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/nouislider/nouislider.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>

@stop


@section('content')
    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Group Update
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
            <form action="{{route('groups.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$group->id}}"/>
                <div class="">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

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
                        <label class="col-md-4 col-form-label text-md-right">Slug</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $group->slug }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Description</label>
                        <div class="mb-3 col-md-6">
                            <textarea class="summernote" id="kt_summernote_1" name="description"
                                      placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $group->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Select Permission</label>
                        <div class="col-md-6">
                            <select class="form-control kt-select2" id="kt_select2_3" style="width: 100%;"
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
                    <button class="btn btn-primary m-2" type="submit">Update</button>
                </div>

            </form>
        </div>

    </div>


    @stop
    @section('page-script')
    <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/form-validation.js')}}"></script>

    <script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('assets/plugins/nouislider/nouislider.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script type="text/javascript">


    @stop
