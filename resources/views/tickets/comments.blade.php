<div class="container">
<div class="comments">
    @foreach($ticket->comments as $comment)
        <div class="panel panel-@if($ticket->user->id === $comment->user_id){{"default"}}@else{{"success"}}@endif">
            <div class="panel panel-heading">

                <b>User</b>: {{ $comment->user->name }}
            </div>

            <div class="panel panel-body">
                <div class="pull-right">{{ $comment->created_at->format('Y-m-d') }}</div>
                {{ $comment->comment }}
            </div>
        </div>
    @endforeach
</div>
</div>