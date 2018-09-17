{{--session message--}}
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @elseif(session('trash-message'))
    <div class="alert alert-info">
        <?php list($message, $postID) = session('trash-message') ?>
        {!! Form::open(['method' => 'PUT', 'route' => ['admin.article.restore', $postID]]) !!}
            {{ $message }}
            <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-undo"></i> Undo</button>
        {!! Form::close() !!}
    </div>
    @elseif(session('restore-message'))
    <div class="alert alert-warning">
        {{ session('restore-message') }}
    </div>
    @elseif(session('warning-message'))
    <div class="alert alert-danger">
        {{ session('warning-message') }}
    </div>
@endif