@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">درخواست های بدون عامل</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <th class="col-sm-2">کاربر</th>
                                <th class="col-sm-3">عنوان</th>
                                <th>وضعیت</th>
                                <th style="width: 200px">تاریخ ایجاد</th>
                                <th class="col-sm-5">-</th>
                            </tr>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ticket->owner->name }}</td>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->getStatusDesc() }}</td>
                                    <td>{{ convertToJalaliDate($ticket->created_at) }}</td>
                                    <td>
                                        <form method="post" action="{{ route('admin.ticket.assignee', [$ticket]) }}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="btn btn-sm btn-info" type="submit"><i
                                                                class="fa fa-save"></i> اختصاص بده
                                                    </button>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="user">
                                                        @foreach($experts as $expert)
                                                            <option value="{{ $expert->id }}">{{ $expert->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
