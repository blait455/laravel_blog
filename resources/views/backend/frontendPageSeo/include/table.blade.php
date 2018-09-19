<table class="table table-bordered table-condesed">
    <thead>
    <tr>
        <th>Action</th>
        <th>Page Title</th>
        <th>Page Slug</th>
    </tr>
    </thead>
    <tbody>

    @foreach($seos as $seo)
        <tr>
            <td width="70">
                {{--{!! Form::open([ 'method' => 'DELETE',  'route' => ['seo.destroy', $seo->id]]) !!}--}}
                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('seo.edit',  $seo->id) }}">
                    <i class="fa fa-edit"></i>
                </a>
                {{--<button type="submit" class="btn btn-xs btn-danger delete-row">--}}
                    {{--<i class="fa fa-times"></i>--}}
                {{--</button>--}}
                {{--{!! Form::close() !!}--}}
            </td>
            <td>{{ $seo->title }}</td>
            <td>{{ $seo->slug }}</td>
        </tr>
    @endforeach

    </tbody>
</table>