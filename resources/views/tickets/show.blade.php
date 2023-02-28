@extends('layouts.app')

@section('title', $ticket->title)

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Title</b>: {{ $ticket->title }}
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="ticket-info">
                        <h5>Messages</h5>
                        <hr>
                        <p>{{ $ticket->message }}</p>
                        <p><b>Category</b>: {{ $ticket->category->name }}</p>
                        <p>
                            @if ($ticket->status === 'Open')
                                <b>Status</b>: <span class="label label-success">{{ $ticket->status }}</span>
                            @else
                                <b> Status</b>: <span class="label label-danger">{{ $ticket->status }}</span>
                            @endif

                        </p>
                        <p><b>Created on</b>: {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>

                </div>
            </div>

            <div>
            <h5>Comments</h5>
                <hr>
            @include('tickets.comments')
                <hr>
            </div>
            <div>
                <h5>Reply</h5>
                <hr>
            @include('tickets.reply')
            </div>

        </div>
    </div>
   </div>

@endsection