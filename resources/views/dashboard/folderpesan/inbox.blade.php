@extends('dashboard.messages')
@section('card','Pesan masuk')
@section('berkaspesan')
<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search Mail">
                    <div class="input-group-append">
                        <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-controls">
                <!-- Check all button -->
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                    {{$messages->links()}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i
                                class="fas fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                    <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
            </div>
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                    <tbody>
                        @foreach ($messages as $msg)
                        <tr>

                            <td><a href="/messages/read/{{$msg->message_id}}" class="btn btn-default btn-sm"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                            <td class="mailbox-name"><a href="/messages/read/{{$msg->message_id}}"
                                    class="linkpesan">{{$msg->nama}}</a></td>
                            <td class="mailbox-subject"><b><a href="/messages/read/{{$msg->message_id}}"
                                        class="linkpesan">{{$msg->subject}}</a></b> -
                                <a href="/messages/read/{{$msg->message_id}}"
                                    class="linkpesan">{{str_limit($msg->messages, $limit=30)}}</a>
                            </td>
                            <td class="mailbox-date">{{$msg->created_at}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer p-0">
            <div class="mailbox-controls">

                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                    {{$messages->links()}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i
                                class="fas fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                    <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>
@endsection
