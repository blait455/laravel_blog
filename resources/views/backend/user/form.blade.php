<div class="col-xs-9">
    <div class="box">
        <div class="box-body">

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if($errors->has('name')) <span class="help-block">{{$errors->first('name')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                @if($errors->has('slug')) <span class="help-block">{{$errors->first('slug')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password') !!}
                {!! Form::password('password',  ['class' => 'form-control']) !!}
                @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('password_confirmation') !!}
                {!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}
                @if($errors->has('password_confirmation')) <span class="help-block">{{$errors->first('password_confirmation')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                {!! Form::label('bio') !!}
                {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                @if($errors->has('bio')) <span class="help-block">{{$errors->first('bio')}}</span> @endif
            </div>

        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary" name="submit">{{ $user->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('user.index') }}" type="submit" class="btn btn-default">Cancel</a>

        </div>
    </div>
</div>

