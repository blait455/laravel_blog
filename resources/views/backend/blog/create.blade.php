@extends('backend.layout.main')

@section('title', 'Admin Blog | Add NEw Post')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Blog
                <small>Add new post</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}"><i class="fa fa-list"></i> Blog </a>
                </li>
                <li class="active">
                    Add New Post
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($post, [
                          'method' => 'POST',
                          'route'  => 'post.store',
                          'files'  => true,
                          'id'     => 'post-form'
                      ]) !!}

                <div class="col-xs-9">
                    <div class="box">
                        <div class="box-body">

                            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                {!! Form::label('title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                {!! Form::label('slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                                @if($errors->has('slug')) <span class="help-block">{{$errors->first('slug')}}</span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                                {!! Form::label('excerpt') !!}
                                {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                                @if($errors->has('excerpt')) <span class="help-block">{{$errors->first('excerpt')}}</span> @endif
                            </div>
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('body') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control my-editor']) !!}
                                @if($errors->has('body')) <span class="help-block">{{$errors->first('body')}}</span> @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('image_alt', 'Image Alt') !!}
                                {!! Form::text('image_alt', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('featured', 'Featured Post') !!}
                                {!! Form::checkbox('featured', null, false) !!}
                                <span class="help-block">If chosen it will be under featured image</span>
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
                                {!! Form::checkbox('no_index', null, false) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('no_follow') !!}
                                {!! Form::checkbox('no_follow', null, false) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('top_content') !!}
                                {!! Form::checkbox('top_content', null, false) !!}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-3">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Publish</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('published_at', 'Publish Date') !!}
                                <div class='input-group date' id='datetimepicker1'>
                                    {!! Form::text('published_at', null, ['class' => 'form-control']) !!}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                <a id="draft-btn" href="#" class="btn btn-default">Save Draft</a>
                            </div>
                            <div class="pull-right">
                                {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Category</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                {!! Form::select('category_id', \App\Models\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                                @if($errors->has('category_id')) <span class="help-block">{{$errors->first('category_id')}}</span> @endif
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Featured Image</h3>
                        </div>
                        <div class="box-body text-center">
                            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://placehold.it/200x150text=No+Image" alt="...">
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
                    </div>

                </div>

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $('#title').on('blur', function(){
             var theTitle = this.value.toLowerCase().trim(),
                 slugInput = $('#slug'),
                 theSlug = theTitle.replace(/&/g, '-and-')
                     .replace(/[^a-z0-9-]+/g, '-')
                     .replace(/\-\-+/g, '-')
                     .replace(/^-+|-+$/g, '');

             slugInput.val(theSlug);
        });

        // var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        //var simplemde = new SimpleMDE({ element: $("#body")[0] });
        //tinymce.init({ selector:'textarea' });

        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });

        $('#draft-btn').click(function (e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        })

    </script>
    <script type="text/javascript">
        var editor_config = {
            path_absolute : "/",
            selector: "#body.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
