@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Add User
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Add News</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> News</a></li>
            <li class="active">Add News</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw news" data-name="book-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Add News
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <form id="commentForm" action="{{ route('admin.books.create') }}"
                              method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div id="rootwizard">
                                <!-- <ul>
                                    <li><a href="#tab1" data-toggle="tab">News Params</a></li>
                                </ul> -->
                                <!-- <div class="tab-content">
                                    <div class="tab-pane" id="tab1"> -->
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group {{ $errors->first('title', 'has-error') }}">
                                    <label for="title" class="col-sm-3 control-label">Title *</label>
                                    <div class="col-sm-9">
                                        <input id="title" name="title" type="text"
                                                 placeholder="Title" class="form-control required"
                                                 value="{!! old('title') !!}"/>

                                          {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <div class="text-muted bootstrap-admin-box-title editor-clr">
                                                <i class="livicon" data-name="umbrella" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                TinyMCE Full
                                            </div>
                                        </div>
                                        <div class="bootstrap-admin-panel-content">
                                            <textarea id="tinymce_full"></textarea>
                                        </div>
                                    </div>
                                </div>
                                        
                                         <!--  <h2 class="hidden">&nbsp;</h2>
                                          <div class="form-group {{ $errors->first('title', 'has-error') }}">
                                              <label for="title" class="col-sm-3 control-label">Title *</label>
                                              <div class="col-sm-9">
                                                  <input id="title" name="title" type="text"
                                                         placeholder="Title" class="form-control required"
                                                         value="{!! old('title') !!}"/>

                                                  {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                                              </div>
                                          </div>

                                          <h2 class="hidden">&nbsp;</h2>
                                          <div class="form-group {{ $errors->first('image', 'has-error') }}">
                                              <label for="image" class="col-sm-3 control-label">Image *</label>
                                              <div class="col-sm-9">
                                                  <input id="image" name="image" type="file"
                                                         placeholder="Image" class="form-control required"
                                                         value="{!! old('image') !!}"/>

                                                  {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                                              </div>
                                          </div>

                                           <h2 class="hidden">&nbsp;</h2>
                                          <div class="form-group {{ $errors->first('text', 'has-error') }}">
                                              <label for="text" class="col-sm-3 control-label">Text *</label>
                                              <div class="col-sm-9">
                                                  <input id="text" name="text" type="textarea"
                                                         placeholder="Text" class="form-control required"
                                                         value="{!! old('text') !!}"/>

                                                  {!! $errors->first('text', '<span class="help-block">:message</span>') !!}
                                              </div> -->
                                         <!--  </div>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script>

    <script src="{{asset('assets/vendors/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/ckeditor.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/jquery.js') }}"  type="text/javascript" ></script>
    <script  src="{{ asset('assets/vendors/ckeditor/js/config.js') }}"  type="text/javascript"></script>
    <script  src="{{ asset('assets/js/pages/editor.js') }}"  type="text/javascript"></script>
@stop
