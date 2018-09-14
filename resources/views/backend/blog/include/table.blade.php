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
                {!! Form::open([ 'method' => 'DELETE',  'route' => ['article.destroy', $post->id]]) !!}
                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('article.edit',  $post->id) }}">
                    <i class="fa fa-edit"></i>
                </a>
                <button type="submit" class="btn btn-xs btn-danger delete-row">
                    <i class="fa fa-times"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author->name }}</td>
            <td>{{ $post->category->title }}</td>
            <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | {!! $post->publicationLable() !!} </td>
        </tr>
    @endforeach

    </tbody>
</table>