<table class="table table-bordered table-condesed">
    <thead>
    <tr>
        <th>Action</th>
        <th>Site Name</th>
        <th>Number of Posts</th>
    </tr>
    </thead>
    <tbody>

    @foreach($addresses as $address)
        <tr>
            <td width="70">
                {!! Form::open([ 'method' => 'DELETE',  'route' => ['site-address.destroy', $address->id]]) !!}
                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('site-address.edit',  $address->id) }}">
                    <i class="fa fa-edit"></i>
                </a>
                <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger delete-row">
                    <i class="fa fa-times"></i>
                </button>
                {!! Form::close() !!}
            </td>
            <td>{{ $address->name }}</td>
            <td>{{ $address->posts->count() }}</td>
        </tr>
    @endforeach

    </tbody>
</table>