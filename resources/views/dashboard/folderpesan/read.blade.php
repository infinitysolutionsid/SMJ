@extends('dashboard.messages')
@section('card','Baca pesan')
@section('berkaspesan')
<div class="col-md-9">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Read Mail</h3>

            <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i
                        class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i
                        class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5>{{$pesanmasuk->subject}}</h5>
                <h6>From: {{$pesanmasuk->email}}<br>
                    No HP: {{$pesanmasuk->nohp}}<br>
                    Nama: {{$pesanmasuk->nama}}
                    <span class="mailbox-read-time float-right">{{$pesanmasuk->created_at}}</span></h6>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                    <a href="/messages/trash/{{$pesanmasuk->message_id}}" class="btn btn-default btn-sm"
                        data-container="body"><i class="far fa-trash-alt"></i></a>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body"
                        title="Reply">
                        <i class="fas fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body"
                        title="Forward">
                        <i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fas fa-print"></i></button>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p>@if($pesanmasuk->messages==NULL)Tidak ada catatan pesan dilampirkan.
                    @else {{$pesanmasuk->messages}} @endif</p>
            </div>
        </div>
    </div>
</div>
@endsection
