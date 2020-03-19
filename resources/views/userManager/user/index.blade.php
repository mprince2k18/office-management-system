@extends('layout.master')
{{ error_reporting(0) }}
@section('content')
<!-- Content Header (Page header) -->

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                User List
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">

                    <a href="{{ route("users.create") }}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                       Add New User
                    </a>
                    <div class="dropdown dropdown-inline">
                        <button type="button"
                                class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="la la-download"></i> Export
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                                                    <span class="kt-nav__section-text">Choose an
                                                                        option</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i
                                            class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i
                                            class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i
                                            class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Groups </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $a = 1 ?>
            @foreach($users as $item)
                <tr>
                    <td>{{$a++}}</td>
                    <td>Name : {{$item->name}} <br> Email : {{$item->email}}</td>
                    <td>
                        @foreach($item->groups as $items)
                            <span class="badge badge-success">{{$items->name}}</span>,
                        @endforeach
                    </td>
                    <td>
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a href="{{ route('users.edit', $item->id) }}" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-edit"></i>
                                            <span class="kt-nav__link-text">Edit</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="{{ route('users.show', $item->id) }}" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-eye"></i>
                                            <span class="kt-nav__link-text">Show</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a  onclick="confirm_modal('{{ route('users.destroy', $item->id) }}')" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon-delete"></i>
                                            <span class="kt-nav__link-text">Delete</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Groups</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
        <!--end: Datatable -->
    </div>
</div>

@endsection
