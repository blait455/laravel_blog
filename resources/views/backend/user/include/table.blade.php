<table class="table table-bordered table-condesed">
    <thead>
    <tr>
        <th>Action</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Number of Posts</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>

    @foreach($users as $user)
        <tr>
            <td width="70">
                {!! Form::open([ 'method' => 'DELETE',  'route' => ['user.destroy', $user->id]]) !!}
                {{-- check if the user is currently active or the default user --}}
                @if($user->id != \Illuminate\Support\Facades\Auth::id() && $user->id != config('cms.default_user_id'))
                    <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('user.edit',  $user->id) }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger delete-row">
                        <i class="fa fa-times"></i>
                    </button>
                @endif
                {!! Form::close() !!}
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->posts->count() }}</td>
            <td>-</td>
        </tr>
    @endforeach

    </tbody>
</table>