<div class="col-xs-9">
    <div class="box">
        <div class="box-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
                <div class="info">Please name the platform name.</div>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                @if($errors->has('slug')) <span class="help-block">{{$errors->first('slug')}}</span> @endif
            </div>
            <div class="form-group">
                {!! Form::label('social_url') !!}
                {!! Form::text('social_url', null, ['class' => 'form-control']) !!}
                @if($errors->has('social_url')) <span class="help-block">{{$errors->first('social_url')}}</span> @endif
            </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="submit">{{ $social->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('category.index') }}" type="submit" class="btn btn-default">Cancel</a>
        </div>

    </div>
</div>