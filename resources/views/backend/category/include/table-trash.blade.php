<table class="table table-bordered table-condesed">
    <thead>
    <tr>
        <th>Action</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>

    @foreach($posts as $post)
        <tr>
            <td width="70">
                {!! Form::open([ 'style' => 'display:inline-block;', 'method' => 'PUT',  'route' => ['admin.article.restore', $post->id]]) !!}
                <button title="Restore" class="btn btn-xs btn-default edit-row" href="{{ route('admin.article.restore',  $post->id) }}">
                    <i class="fa fa-refresh"></i>
                </button>
                {!! Form::close() !!}

                {!! Form::open([ 'style' => 'display:inline-block;', 'method' => 'DELETE',  'route' => ['admin.article.force-destroy', $post->id]]) !!}
                <button title="Delete Permanently" onclick="return confirm('You are about to delete post permanently. Are you sure?')"
                        type="submit" class="btn btn-xs btn-danger delete-row">
                    <i class="fa fa-trash"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author->name }}</td>
            <td>{{ $post->category->title }}</td>
            <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr></td>
        </tr>
    @endforeach

    </tbody>
</table>