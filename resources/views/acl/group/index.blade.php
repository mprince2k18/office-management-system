@extends('layout.master')

@section('content')
    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">@translate(Group List)</h2>
            </div>
            <div class="float-right">
                <a href="{{  route("groups.create") }}" class="btn btn-primary">
                    <i class="la la-plus"></i>
                    @translate(Create A Group)
                </a>
            </div>
        </div>
        <div class="card-body">
            <!-- there are the main content-->
            <table class="table table-striped- table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>@translate(Name)</th>
                    <th>@translate(Permission)</th>
                    <th>@translate(Action)</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groups as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>@translate(Name) : {{$item->name}} <br> @translate(Slug) : {{$item->slug}}</td>
                        <td>
                            @foreach($item->permissions as $items)
                                <span class="badge badge-success">{{$items->name}}</span>,
                            @endforeach
                        </td>
                        <td>
                            <div class="kanban-menu">
                                <div class="dropdown">
                                    <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right action-btn" aria-labelledby="KanbanBoardButton1" x-placement="bottom-end">
                                        <a class="dropdown-item" href="{{ route('groups.show', $item->id) }}">
                                            <i class="feather icon-eye mr-2"></i>@translate(Show)</a>
                                        <a class="dropdown-item" href="{{ route('groups.edit', $item->id) }}">
                                            <i class="feather icon-edit-2 mr-2"></i>@translate(Edit)</a>
                                        <a class="dropdown-item" onclick="confirm_modal('{{ route('groups.destroy', $item->id) }}')" href="javascript:void()">
                                            <i class="feather icon-trash mr-2"></i>@translate(Delete)</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
