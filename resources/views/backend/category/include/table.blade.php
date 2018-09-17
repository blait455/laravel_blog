<table class="table table-bordered table-condesed">
    <thead>
    <tr>
        <th>Action</th>
        <th>Category Title</th>
        <th>Number of Posts</th>
    </tr>
    </thead>
    <tbody>

    @foreach($categories as $category)
        <tr>
            <td width="70">
                {!! Form::open([ 'method' => 'DELETE',  'route' => ['category.destroy', $category->id]]) !!}
                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('category.edit',  $category->id) }}">
                    <i class="fa fa-edit"></i>
                </a>
                <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger delete-row">
                    <i class="fa fa-times"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->posts->count() }}</td>
        </tr>
    @endforeach

    </tbody>
</table>