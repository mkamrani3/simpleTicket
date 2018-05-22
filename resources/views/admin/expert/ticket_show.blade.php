@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">مشاهده درخواست</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>عنوان</th>
                                <td>{{ $ticket->title }}</td>
                                <th>وضعیت</th>
                                <td>{{ $ticket->getStatusDesc() }}</td>
                            </tr>
                            <tr>
                                <th>تاریخ ایجاد</th>
                                <td>{{ convertToJalaliDate($ticket->created_at) }}</td>
                                <th>اخرین ویرایش</th>
                                <td>{{ convertToJalaliDate($ticket->updated_at) }}</td>
                            </tr>
                        </table>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                {{ $ticket->owner->name }}
                                <span>در</span>
                                {{ convertToJalaliDate($ticket->created_at) }}
                            </div>
                            <div class="panel-body">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">{{ $ticket->description }}</div>
                            </div>
                        </div>
                        @foreach($ticket->threads as $thread)
                            @if($thread->type == 0)
                            <div class=" mb-20 panel @if($thread->user->id != auth()->user()->id) panel-success @else panel-warning @endif">
                                <div class="panel-heading">
                                    {{ $thread->user->name }}
                                    <span>در</span>
                                    {{ convertToJalaliDate($thread->created_at) }}
                                </div>
                                <div class="panel-body">
                                    @if($thread->user->id != auth()->user()->id)
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">{{ $thread->description }}</div>
                                    @else
                                        <div class="col-md-10">{{ $thread->description }}</div>
                                        <div class="col-md-1"></div>
                                    @endif

                                </div>
                            </div>
                            @else
                                <div class=" mb-20 row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        {{ $thread->user->name }} {{ $thread->description }}
                                        <span>{{ convertToJalaliDate($thread->created_at) }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <div class="panel panel-default mb-20">
                            <div class="panel-heading">پاسخ به درخواست</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="{{ route('expert.ticket.reply', $ticket) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">توضیح </label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="description" title="description">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">وضعیت درخواست</label>
                                        <div class="col-md-6">
                                            <select name="status" class="form-control">
                                                <option value="OPEN" @if($ticket->status == 'OPEN') selected @endif>باز</option>
                                                <option value="DOING" @if($ticket->status == 'DOING') selected @endif>درحال انجام</option>
                                                <option value="CLOSE" @if($ticket->status == 'CLOSE') selected @endif>بسته</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4 text-center">
                                            <button type="submit" class="btn btn-primary">ثبت</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
