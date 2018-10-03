<div class="col-xs-9">
    <div class="box">
        <div class="box-body">

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
                <span class="help-block">The given name will be shown in the site-address selection in the posts from</span>
            </div>

            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                {!! Form::label('address') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                @if($errors->has('address')) <span class="help-block">{{$errors->first('address')}}</span> @endif
                <span class="help-block">enter the web address of the site eg: http://gunstar.co.uk</span>
            </div>

        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary" name="submit">{{ $address->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('category.index') }}" type="submit" class="btn btn-default">Cancel</a>

        </div>

    </div>
</div>


