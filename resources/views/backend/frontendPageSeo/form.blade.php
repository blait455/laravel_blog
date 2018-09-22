<div class="col-xs-9">
    <div class="box">
        <div class="box-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
                <div class="info">Please name the titles based on the frontend pages name. E.g: Category page as category, front page as index.</div>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                @if($errors->has('slug')) <span class="help-block">{{$errors->first('slug')}}</span> @endif
            </div>
            <hr><h3><strong>SEO</strong></h3><br>
            <div class="form-group">
                {!! Form::label('meta_description') !!}
                {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('canonical_url') !!}
                {!! Form::text('canonical_url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('redirect_url') !!}
                {!! Form::text('redirect_url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('no_index') !!}
                {!! Form::checkbox('no_index', null, ($seo->exists) ? $seo->no_index : false) !!}
            </div>
            <div class="form-group">
                {!! Form::label('no_follow') !!}
                {!! Form::checkbox('no_follow', null, ($seo->exists) ? $seo->no_follow : false) !!}
            </div>
            <div class="form-group">
                {!! Form::label('top_content') !!}
                {!! Form::checkbox('top_content', null, ($seo->exists) ? $seo->top_content : false) !!}
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">

                        <img src="{{ ($seo->image) ? asset('images_blog/seo').'/'.$seo->id.'/'.$seo->image : 'http://placehold.it/200x150&text=No+Image'}}" alt="...">

                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>

                @if($errors->has('image')) <span class="help-block">{{$errors->first('image')}}</span> @endif
            </div>

        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary" name="submit">{{ $seo->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('category.index') }}" type="submit" class="btn btn-default">Cancel</a>

        </div>

    </div>
</div>