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
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Add New Book</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Books</a></li>
            <li class="active">Add New Book</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-book" data-name="book-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Add New Book
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
                                <ul>
                                    <li><a href="#tab1" data-toggle="tab">Basic Params</a></li>
                                    <li><a href="#tab2" data-toggle="tab">More Info</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Address</a></li>
                                    <li><a href="#tab4" data-toggle="tab">User Group</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('nom_unité_codicologique', 'has-error') }}">
                                            <label for="nom_unité_codicologique" class="col-sm-3 control-label">Nom Unité codicologique *</label>
                                            <div class="col-sm-7">
                                                <input id="nom_unité_codicologique" name="nom_unité_codicologique" type="text"
                                                       placeholder="Nom Unité codicologique" class="form-control required"
                                                       value="{!! old('nom_unité_codicologique') !!}"/>

                                                {!! $errors->first('nom_unité_codicologique', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('conservation', 'has-error') }}">
                                            <label for="conservation" class="col-sm-3 control-label">Conservation *</label>
                                            <div class="col-sm-7">
                                                <input id="conservation" name="conservation" type="text"
                                                       placeholder="Conservation" class="form-control required"
                                                       value="{!! old('conservation') !!}"/>
                                                <br>
                                                <a  class="btn btn-info show_conservation_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Conservation</a>
                                                {!! $errors->first('conservation', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <!-- default hide border -->
                                        <div class="hide border conservation_sub_inputs">
                                            <hr>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_1', 'has-error') }}">
                                                <label for="cote_1" class="col-sm-3 control-label">Cote 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_1" name="cote_1" type="text"
                                                           placeholder="Cote 1" class="form-control required"
                                                           value="{!! old('cote_1') !!}"/>

                                                    {!! $errors->first('cote_1', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_2', 'has-error') }}">
                                                <label for="cote_2" class="col-sm-3 control-label">Cote 2 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_2" name="cote_2" type="text"
                                                           placeholder="Cote 2" class="form-control required"
                                                           value="{!! old('cote_2') !!}"/>

                                                    {!! $errors->first('cote_2', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_3', 'has-error') }}">
                                                <label for="cote_3" class="col-sm-3 control-label">Cote 3 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_3" name="cote_3" type="text"
                                                           placeholder="Cote 3" class="form-control required"
                                                           value="{!! old('cote_3') !!}"/>

                                                    {!! $errors->first('cote_3', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_4', 'has-error') }}">
                                                <label for="cote_4" class="col-sm-3 control-label">Cote 4 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_4" name="cote_4" type="text"
                                                           placeholder="Cote 4" class="form-control required"
                                                           value="{!! old('cote_4') !!}"/>

                                                    {!! $errors->first('cote_4', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_5', 'has-error') }}">
                                                <label for="cote_5" class="col-sm-3 control-label">Cote 5 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_5" name="cote_5" type="text"
                                                           placeholder="Cote 5" class="form-control required"
                                                           value="{!! old('cote_5') !!}"/>

                                                    {!! $errors->first('cote_5', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_6', 'has-error') }}">
                                                <label for="cote_6" class="col-sm-3 control-label">Cote 6 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_6" name="cote_6" type="text"
                                                           placeholder="Cote 6" class="form-control required"
                                                           value="{!! old('cote_6') !!}"/>

                                                    {!! $errors->first('cote_6', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_7', 'has-error') }}">
                                                <label for="cote_7" class="col-sm-3 control-label">Cote 7 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_7" name="cote_7" type="text"
                                                           placeholder="Cote 7" class="form-control required"
                                                           value="{!! old('cote_7') !!}"/>

                                                    {!! $errors->first('cote_7', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('cote_8', 'has-error') }}">
                                                <label for="cote_8" class="col-sm-3 control-label">Cote 8 *</label>
                                                <div class="col-sm-7">
                                                    <input id="cote_8" name="cote_8" type="text"
                                                           placeholder="Cote 8" class="form-control required"
                                                           value="{!! old('cote_8') !!}"/>

                                                    {!! $errors->first('cote_8', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('vente_enchères_1', 'has-error') }}">
                                                <label for="vente_enchères_1" class="col-sm-3 control-label">Vente enchères 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="vente_enchères_1" name="vente_enchères_1" type="text"
                                                           placeholder="Vente enchères 1" class="form-control required"
                                                           value="{!! old('vente_enchères_1') !!}"/>

                                                    {!! $errors->first('vente_enchères_1', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('vente_enchères_2', 'has-error') }}">
                                                <label for="vente_enchères_2" class="col-sm-3 control-label">Vente enchères 2 *</label>
                                                <div class="col-sm-7">
                                                    <input id="vente_enchères_2" name="vente_enchères_2" type="text"
                                                           placeholder="Vente enchères 2" class="form-control required"
                                                           value="{!! old('vente_enchères_2') !!}"/>

                                                    {!! $errors->first('vente_enchères_2', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('vente_enchères_3', 'has-error') }}">
                                                <label for="vente_enchères_3" class="col-sm-3 control-label">Vente enchères 3 *</label>
                                                <div class="col-sm-7">
                                                    <input id="vente_enchères_3" name="vente_enchères_3" type="text"
                                                           placeholder="Vente enchères 3" class="form-control required"
                                                           value="{!! old('vente_enchères_3') !!}"/>

                                                    {!! $errors->first('vente_enchères_3', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- default hide border end -->
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('provenance', 'has-error') }}">
                                            <label for="provenance" class="col-sm-3 control-label">Provenance</label>
                                            <div class="col-sm-7">
                                                {!! Form::select('provenance', ['provenance',1,2,3,4], null,['class' => 'form-control select2', 'id' => 'provenance']) !!}
                                            </div>
                                            <span class="help-block">{{ $errors->first('provenance', ':message') }}</span>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('nombre_total_folios', 'has-error') }}">
                                            <label for="nombre_total_folios" class="col-sm-3 control-label">Nombre total folios*</label>
                                            <div class="col-sm-7">
                                                <input id="nombre_total_folios" name="nombre_total_folios" type="text"
                                                       placeholder="Nombre total folios" class="form-control required"
                                                       value="{!! old('nombre_total_folios') !!}"/>

                                                {!! $errors->first('nombre_total_folios', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('texte', 'has-error') }}">
                                            <label for="texte" class="col-sm-3 control-label">Texte *</label>
                                            <div class="col-sm-7">
                                                <input id="texte" name="texte" type="text"
                                                       placeholder="Texte" class="form-control required"
                                                       value="{!! old('texte') !!}"/>

                                                {!! $errors->first('texte', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('dimensions_maximales', 'has-error') }}">
                                            <label for="dimensions_maximales" class="col-sm-3 control-label">Dimensions maximales *</label>
                                            <div class="col-sm-7">
                                                <input id="dimensions_maximales" name="dimensions_maximales" type="text"
                                                       placeholder="Dimensions maximales" class="form-control required"
                                                       value="{!! old('dimensions_maximales') !!}"/>

                                                {!! $errors->first('dimensions_maximales', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('surface_écriture', 'has-error') }}">
                                            <label for="surface_écriture" class="col-sm-3 control-label">Surface écriture *</label>
                                            <div class="col-sm-7">
                                                <input id="surface_écriture" name="surface_écriture" type="text"
                                                       placeholder="Dimensions maximales" class="form-control required"
                                                       value="{!! old('surface_écriture') !!}"/>

                                                {!! $errors->first('surface_écriture', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('nombre_de_lignes', 'has-error') }}">
                                            <label for="nombre_de_lignes" class="col-sm-3 control-label">Nombre de lignes/page *</label>
                                            <div class="col-sm-7">
                                                <input id="nombre_de_lignes" name="nombre_de_lignes" type="text"
                                                       placeholder="Nombre de lignes/page" class="form-control required"
                                                       value="{!! old('nombre_de_lignes') !!}"/>
                                                <br>
                                                <a  class="btn btn-info show_nombre_de_lignes_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Nombre de lignes</a>
                                                {!! $errors->first('nombre_de_lignes', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <div class="hide border nombre_de_lignes_sub_inputs">
                                            <hr>
                                           <h2 class="hidden">&nbsp;</h2>
                                           <div class="form-group {{ $errors->first('nombre_fixe', 'has-error') }}">
                                               <label for="nombre_fixe" class="col-sm-3 control-label">nombre fixe *</label>
                                               <div class="col-sm-7">
                                                   <input id="nombre_fixe" name="nombre_fixe" type="text"
                                                          placeholder="nombre fixe" class="form-control required"
                                                          value="{!! old('nombre_fixe') !!}"/>

                                                   {!! $errors->first('nombre_fixe', '<span class="help-block">:message</span>') !!}
                                               </div>
                                               <div class="col-sm-2">
                                                   <label>
                                                       <input type="checkbox" class="minimal-blue"/>
                                                   </label> Show
                                               </div>
                                               <hr>
                                           </div>
                                           <h2 class="hidden">&nbsp;</h2>
                                           <div class="form-group {{ $errors->first('variable', 'has-error') }}">
                                               <label for="variable" class="col-sm-3 control-label">Variable *</label>
                                               <div class="col-sm-7">
                                                   <input id="variable" name="variable" type="text"
                                                          placeholder="Variable" class="form-control required"
                                                          value="{!! old('variable') !!}"/>
                                                   <br>
                                                   <a  class="btn btn-info show_variable_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields Variable</a>
                                                   {!! $errors->first('variable', '<span class="help-block">:message</span>') !!}
                                               </div>
                                               <div class="col-sm-2">
                                                   <label>
                                                       <input type="checkbox" class="minimal-blue"/>
                                                   </label> Show
                                               </div>
                                               
                                           </div>
                                           <div class="hide border variable_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entre', 'has-error') }}">
                                                    <label for="entre" class="col-sm-3 control-label">Entre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entre" name="entre" type="text"
                                                               placeholder="Entre" class="form-control required"
                                                               value="{!! old('entre') !!}"/>
                                                        {!! $errors->first('entre', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                   <div class="col-sm-2">
                                                       <label>
                                                           <input type="checkbox" class="minimal-blue"/>
                                                       </label> Show
                                                   </div>
                                               </div>
                                               <hr>
                                           </div>
                                           <hr>
                                       </div>
                                       <h2 class="hidden">&nbsp;</h2>
                                       <div class="form-group {{ $errors->first('notes_diverses', 'has-error') }}">
                                           <label for="notes_diverses" class="col-sm-3 control-label">Notes diverses *</label>
                                           <div class="col-sm-7">
                                               <input id="notes_diverses" name="notes_diverses" type="text"
                                                      placeholder="Notes diverses" class="form-control required"
                                                      value="{!! old('notes_diverses') !!}"/>

                                               {!! $errors->first('notes_diverses', '<span class="help-block">:message</span>') !!}
                                           </div>
                                           <div class="col-sm-2">
                                               <label>
                                                   <input type="checkbox" class="minimal-blue"/>
                                               </label> Show
                                           </div>
                                       </div>
                                       <h2 class="hidden">&nbsp;</h2>
                                       <div class="form-group {{ $errors->first('datation_c14', 'has-error') }}">
                                           <label for="datation_c14" class="col-sm-3 control-label">Datation C14 *</label>
                                           <div class="col-sm-7">
                                               <input id="datation_c14" name="datation_c14" type="text"
                                                      placeholder="Datation C14" class="form-control required"
                                                      value="{!! old('datation_c14') !!}"/>

                                               {!! $errors->first('datation_c14', '<span class="help-block">:message</span>') !!}
                                           </div>
                                           <div class="col-sm-2">
                                               <label>
                                                   <input type="checkbox" class="minimal-blue"/>
                                               </label> Show
                                           </div>
                                       </div>
                                       <h2 class="hidden">&nbsp;</h2>
                                       <div class="form-group {{ $errors->first('colophon_waqf', 'has-error') }}">
                                           <label for="olophon_waqf" class="col-sm-3 control-label">Colophon/waqf *</label>
                                           <div class="col-sm-7">
                                               <input id="olophon_waqf" name="olophon_waqf" type="text"
                                                      placeholder="Colophon/waqf" class="form-control required"
                                                      value="{!! old('olophon_waqf') !!}"/>

                                               {!! $errors->first('olophon_waqf', '<span class="help-block">:message</span>') !!}
                                           </div>
                                           <div class="col-sm-2">
                                               <label>
                                                   <input type="checkbox" class="minimal-blue"/>
                                               </label> Show
                                           </div>
                                       </div>
                                       <h2 class="hidden">&nbsp;</h2>
                                       <div class="form-group {{ $errors->first('lieu_de_production', 'has-error') }}">
                                           <label for="lieu_de_production" class="col-sm-3 control-label">Lieu de production *</label>
                                           <div class="col-sm-7">
                                               <input id="lieu_de_production" name="lieu_de_production" type="text"
                                                      placeholder="Lieu de production" class="form-control required"
                                                      value="{!! old('lieu_de_production') !!}"/>

                                               {!! $errors->first('lieu_de_production', '<span class="help-block">:message</span>') !!}
                                           </div>
                                           <div class="col-sm-2">
                                               <label>
                                                   <input type="checkbox" class="minimal-blue"/>
                                               </label> Show
                                           </div>
                                       </div>
                                    </div>
                                    
                                    <!-- second tab content -->
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('bibliographie', 'has-error') }}">
                                            <label for="bibliographie" class="col-sm-3 control-label">Bibliographie *</label>
                                            <div class="col-sm-7">
                                                <input id="bibliographie" name="bibliographie" type="text"
                                                       placeholder="Bibliographie" class="form-control required"
                                                       value="{!! old('bibliographie') !!}"/>
                                                <br>
                                                <a  class="btn btn-info show_bibliographie_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Bibliographie</a>
                                                {!! $errors->first('bibliographie', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <div class="hide border bibliographie_sub_inputs">
                                            <hr>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('catalogue_1', 'has-error') }}">
                                                <label for="catalogue_1" class="col-sm-3 control-label">Catalogue 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="catalogue_1" name="catalogue_1" type="text"
                                                           placeholder="Catalogue 1" class="form-control required"
                                                           value="{!! old('catalogue_1') !!}"/>
                                                    {!! $errors->first('catalogue_1', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('catalogue_2', 'has-error') }}">
                                                <label for="catalogue_2" class="col-sm-3 control-label">Catalogue 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="catalogue_2" name="catalogue_2" type="text"
                                                           placeholder="Catalogue 2" class="form-control required"
                                                           value="{!! old('catalogue_2') !!}"/>
                                                    {!! $errors->first('catalogue_2', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('catalogue_3', 'has-error') }}">
                                                <label for="catalogue_3" class="col-sm-3 control-label">Catalogue 3 *</label>
                                                <div class="col-sm-7">
                                                    <input id="catalogue_3" name="catalogue_3" type="text"
                                                           placeholder="Catalogue 3" class="form-control required"
                                                           value="{!! old('catalogue_3') !!}"/>
                                                    {!! $errors->first('catalogue_3', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('catalogue_4', 'has-error') }}">
                                                <label for="catalogue_4" class="col-sm-3 control-label">Catalogue 4 *</label>
                                                <div class="col-sm-7">
                                                    <input id="catalogue_4" name="catalogue_4" type="text"
                                                           placeholder="Catalogue 4" class="form-control required"
                                                           value="{!! old('catalogue_4') !!}"/>
                                                    {!! $errors->first('catalogue_4', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('ouvrage_1', 'has-error') }}">
                                                <label for="ouvrage_1" class="col-sm-3 control-label">Ouvrage 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="ouvrage_1" name="ouvrage_1" type="text"
                                                           placeholder="Ouvrage 1" class="form-control required"
                                                           value="{!! old('ouvrage_1') !!}"/>
                                                    {!! $errors->first('ouvrage_1', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('ouvrage_2', 'has-error') }}">
                                                <label for="ouvrage_2" class="col-sm-3 control-label">Ouvrage 2 *</label>
                                                <div class="col-sm-7">
                                                    <input id="ouvrage_2" name="ouvrage_2" type="text"
                                                           placeholder="Ouvrage 2" class="form-control required"
                                                           value="{!! old('ouvrage_2') !!}"/>
                                                    {!! $errors->first('ouvrage_2', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('ouvrage_3', 'has-error') }}">
                                                <label for="ouvrage_3" class="col-sm-3 control-label">Ouvrage 3 *</label>
                                                <div class="col-sm-7">
                                                    <input id="ouvrage_3" name="ouvrage_3" type="text"
                                                           placeholder="Ouvrage 3" class="form-control required"
                                                           value="{!! old('ouvrage_3') !!}"/>
                                                    {!! $errors->first('ouvrage_3', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('article_1', 'has-error') }}">
                                                <label for="article_1" class="col-sm-3 control-label">Article 1 *</label>
                                                <div class="col-sm-7">
                                                    <input id="article_1" name="article_1" type="text"
                                                           placeholder="Article 1" class="form-control required"
                                                           value="{!! old('article_1') !!}"/>
                                                    {!! $errors->first('article_1', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('article_2', 'has-error') }}">
                                                <label for="article_2" class="col-sm-3 control-label">Article 2 *</label>
                                                <div class="col-sm-7">
                                                    <input id="article_2" name="article_2" type="text"
                                                           placeholder="Article 2" class="form-control required"
                                                           value="{!! old('article_2') !!}"/>
                                                    {!! $errors->first('article_2', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('article_3', 'has-error') }}">
                                                <label for="article_3" class="col-sm-3 control-label">Article 3 *</label>
                                                <div class="col-sm-7">
                                                    <input id="article_3" name="article_3" type="text"
                                                           placeholder="Article 3" class="form-control required"
                                                           value="{!! old('article_3') !!}"/>
                                                    {!! $errors->first('article_3', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('article_4', 'has-error') }}">
                                                <label for="article_4" class="col-sm-3 control-label">Article 4 *</label>
                                                <div class="col-sm-7">
                                                    <input id="article_4" name="article_4" type="text"
                                                           placeholder="Article 4" class="form-control required"
                                                           value="{!! old('article_4') !!}"/>
                                                    {!! $errors->first('article_4', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- first hide border -->
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('classification_paléographique', 'has-error') }}">
                                            <label for="article_4" class="col-sm-3 control-label">Classification paléographique *</label>
                                            <div class="col-sm-7">
                                                <input id="classification_paléographique" name="classification_paléographique" type="text"
                                                       placeholder="Classification paléographique" class="form-control required"
                                                       value="{!! old('article_4') !!}"/>
                                                {!! $errors->first('classification_paléographique', '<span class="help-block">:message</span>') !!}
                                                <br>
                                                <a  class="btn btn-info show_classification_paléographique_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Classification paléographique</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <div class="hide border classification_paléographique_sub_inputs">
                                            <hr>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('menu_déroulant_8_entrées', 'has-error') }}">
                                                <label for="menu_déroulant_8_entrées" class="col-sm-3 control-label">Menu déroulant 8 entrées + Autre *</label>
                                                <div class="col-sm-7">
                                                    <input id="menu_déroulant_8_entrées" name="menu_déroulant_8_entrées" type="text"
                                                           placeholder="Menu déroulant 8 entrées + Autre" class="form-control required"
                                                           value="{!! old('menu_déroulant_8_entrées') !!}"/>
                                                    <br>
                                                    <a  class="btn btn-info show_menu_déroulant_8_entrées_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Menu déroulant 8 entrées</a>
                                                    {!! $errors->first('menu_déroulant_8_entrées', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="hide border all_menu_déroulant_8_entrées_sub_inputs">
                                            <hr>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_1', 'has-error') }}">
                                                    <label for="entrée_1" class="col-sm-3 control-label">Entrée 1 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_1" name="entrée_1" type="text"
                                                               placeholder="Entrée 1" class="form-control required"
                                                               value="{!! old('entrée_1') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_1_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 1</a>
                                                        {!! $errors->first('entrée_1', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_1_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_2', 'has-error') }}">
                                                    <label for="entrée_2" class="col-sm-3 control-label">Entrée 2 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_2" name="entrée_2" type="text"
                                                               placeholder="Entrée 2" class="form-control required"
                                                               value="{!! old('entrée_2') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_2_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 2</a>
                                                        {!! $errors->first('entrée_2', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_2_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_3', 'has-error') }}">
                                                    <label for="entrée_3" class="col-sm-3 control-label">Entrée 3 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_3" name="entrée_3" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_3') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_3_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 3</a>
                                                        {!! $errors->first('entrée_3', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_3_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_4', 'has-error') }}">
                                                    <label for="entrée_4" class="col-sm-3 control-label">Entrée 4 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_4" name="entrée_4" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_4') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_4_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 4</a>
                                                        {!! $errors->first('entrée_4', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_4_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_5', 'has-error') }}">
                                                    <label for="entrée_5" class="col-sm-3 control-label">Entrée 5 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_5" name="entrée_5" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_5') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_5_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 5</a>
                                                        {!! $errors->first('entrée_5', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_5_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_6', 'has-error') }}">
                                                    <label for="entrée_6" class="col-sm-3 control-label">Entrée 6 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_6" name="entrée_6" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_6') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_6_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 6</a>
                                                        {!! $errors->first('entrée_6', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_6_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_7', 'has-error') }}">
                                                    <label for="entrée_7" class="col-sm-3 control-label">Entrée 7 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_7" name="entrée_7" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_7') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_7_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 7</a>
                                                        {!! $errors->first('entrée_7', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_7_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border menu_déroulant_8_entrées_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('entrée_8', 'has-error') }}">
                                                    <label for="entrée_8" class="col-sm-3 control-label">Entrée 8 *</label>
                                                    <div class="col-sm-7">
                                                        <input id="entrée_8" name="entrée_8" type="text"
                                                               placeholder="Entrée 3" class="form-control required"
                                                               value="{!! old('entrée_8') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_entrée_8_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Entrée 8</a>
                                                        {!! $errors->first('entrée_8', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="hide border entrée_8_sub_inputs">
                                                <hr>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('', 'has-error') }}">
                                                    <label for="" class="col-sm-3 control-label">Menu déroulant 3 entrées + autre *</label>
                                                    <div class="col-sm-7">
                                                        <input id="" name="" type="text"
                                                               placeholder="Menu déroulant 3 entrées + autre" class="form-control required"
                                                               value="{!! old('') !!}"/>

                                                        {!! $errors->first('', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="hide border classification_paléographique_sub_inputs">
                                            <hr>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('remarques', 'has-error') }}">
                                                <label for="remarques" class="col-sm-3 control-label">Remarques *</label>
                                                <div class="col-sm-7">
                                                    <input id="remarques" name="remarques" type="text"
                                                           placeholder="Remarques" class="form-control required"
                                                           value="{!! old('remarques') !!}"/>

                                                    {!! $errors->first('remarques', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('nombres_de_mains_distinctes', 'has-error') }}">
                                            <label for="nombres_de_mains_distinctes" class="col-sm-3 control-label">Nombres de mains distinctes *</label>
                                            <div class="col-sm-7">
                                                <input id="nombres_de_mains_distinctes" name="nombres_de_mains_distinctes" type="text"
                                                       placeholder="Nombres de mains distinctes" class="form-control required"
                                                       value="{!! old('nombres_de_mains_distinctes') !!}"/>

                                                {!! $errors->first('nombres_de_mains_distinctes', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('description_paléographique', 'has-error') }}">
                                            <label for="description_paléographique" class="col-sm-3 control-label">Description paléographique *</label>
                                            <div class="col-sm-7">
                                                <input id="description_paléographique" name="description_paléographique" type="text"
                                                       placeholder="Description paléographique" class="form-control required"
                                                       value="{!! old('description_paléographique') !!}"/>
                                                <br>
                                                <a  class="btn btn-info show_description_paléographique_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Description paléographique</a>
                                                {!! $errors->first('description_paléographique', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <!--  description_paléographique_sub_inputs  -->
                                        <div class= "hide border description_paléographique_sub_inputs">
                                            <hr>
                                            @for($i = 1; $i <= 5; $i++)
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group {{ $errors->first('main_$i', 'has-error') }}">
                                                    <label for="main_{{$i}}" class="col-sm-3 control-label">Main{{$i}} *</label>
                                                    <div class="col-sm-7">
                                                        <input id="main_{{$i}}" name="main_{{$i}}" type="text"
                                                               placeholder="Main{{$i}}" class="form-control required"
                                                               value="{!! old('main_{{$i}}') !!}"/>
                                                        <br>
                                                        <a  class="btn btn-info show_description_main_{{$i}}_sub_inputs" style="color:#344dc9 !important"><span class="glyphicon glyphicon-plus"></span> Add Fields For Main {{$i}}</a>
                                                        {!! $errors->first('main_{{$i}}', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label>
                                                            <input type="checkbox" class="minimal-blue"/>
                                                        </label> Show
                                                    </div>
                                                </div>
                                                <!-- main1 sub inputs -->
                                                <div class="hide border main_{{$i}}_sub_inputs">
                                                    <hr>
                                                    <h2 class="hidden">&nbsp;</h2>
                                                    <div class="form-group {{ $errors->first('allure_générale', 'has-error') }}">
                                                        <label for="allure_générale" class="col-sm-3 control-label">Allure générale *</label>
                                                        <div class="col-sm-7">
                                                            <input id="allure_générale" name="allure_générale" type="text"
                                                                   placeholder="Allure générale" class="form-control required"
                                                                   value="{!! old('allure_générale') !!}"/>

                                                            {!! $errors->first('allure_générale', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label>
                                                                <input type="checkbox" class="minimal-blue"/>
                                                            </label> Show
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="hide border main_{{$i}}_sub_inputs">
                                                    <hr>
                                                    <h2 class="hidden">&nbsp;</h2>
                                                    <div class="form-group {{ $errors->first('module', 'has-error') }}">
                                                        <label for="module" class="col-sm-3 control-label">Module *</label>
                                                        <div class="col-sm-7">
                                                            <input id="module" name="module" type="text"
                                                                   placeholder="Module" class="form-control required"
                                                                   value="{!! old('module') !!}"/>

                                                            {!! $errors->first('module', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label>
                                                                <input type="checkbox" class="minimal-blue"/>
                                                            </label> Show
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="hide border main_{{$i}}_sub_inputs">
                                                    <hr>
                                                    <h2 class="hidden">&nbsp;</h2>
                                                    <div class="form-group {{ $errors->first('angle_d’écriture', 'has-error') }}">
                                                        <label for="angle_d’écriture" class="col-sm-3 control-label">Angle d’écriture *</label>
                                                        <div class="col-sm-7">
                                                            <input id="angle_d’écriture" name="angle_d’écriture" type="text"
                                                                   placeholder="Angle d’écriture" class="form-control required"
                                                                   value="{!! old('angle_d’écriture') !!}"/>

                                                            {!! $errors->first('angle_d’écriture', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label>
                                                                <input type="checkbox" class="minimal-blue"/>
                                                            </label> Show
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="hide border main_{{$i}}_sub_inputs">
                                                    <hr>
                                                    <h2 class="hidden">&nbsp;</h2>
                                                    <div class="form-group {{ $errors->first('lettres_caractéristiques', 'has-error') }}">
                                                        <label for="lettres_caractéristiques" class="col-sm-3 control-label">Lettres caractéristiques *</label>
                                                        <div class="col-sm-7">
                                                            <input id="lettres_caractéristiques" name="lettres_caractéristiques" type="text"
                                                                   placeholder="Lettres caractéristiques" class="form-control required"
                                                                   value="{!! old('lettres_caractéristiques') !!}"/>
                                                            <br>
                                                            <a  class="btn btn-info show_lettres_caractéristiques_{{$i}}_sub_inputs" style="color:#071f8f !important"><span class="glyphicon glyphicon-plus"></span> Add Fields Lettres caractéristiques</a>
                                                            {!! $errors->first('lettres_caractéristiques', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label>
                                                                <input type="checkbox" class="minimal-blue"/>
                                                            </label> Show
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <!-- start lettres_caractéristiques sub inputs-->
                                                @for($j= 1; $j <= 13; $j++ )
                                                    <div class="hide border lettres_caractéristiques_{{$i}}_sub_inputs">
                                                        <h2 class="hidden">&nbsp;</h2>
                                                        <div class="form-group {{ $errors->first('description_$j', 'has-error') }}">
                                                            <label for="lettres_caractéristiques" class="col-sm-3 control-label">description{{$j}} *</label>
                                                            <div class="col-sm-7">
                                                                <input id="description_{{$j}}" name="description_{{$j}}" type="text"
                                                                       placeholder="description{{$j}}" class="form-control required"
                                                                       value="{!! old('description_{{$j}}') !!}"/>
                                                                <br>
                                                                <a  class="btn btn-info show_description_sub_inputs" id = "{{$i}}_show_description_sub_inputs_{{$j}}" style="color:#08103b !important"><span class="glyphicon glyphicon-plus"></span> Add Fields Lettres description{{$j}}</a>
                                                                {!! $errors->first('description_{{$j}}', '<span class="help-block">:message</span>') !!}
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <label>
                                                                    <input type="checkbox" class="minimal-blue"/>
                                                                </label> Show
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- start lettres_caractéristiques sub inputs-->

                                                    <div class="hide border {{$i}}_description_{{$j}}_sub_inputs">
                                                        <hr>
                                                        <h2 class="hidden">&nbsp;</h2>
                                                        <div class="form-group {{ $errors->first('image_$j', 'has-error') }}">
                                                            <label for="image_{{$j}}" class="col-sm-3 control-label">Image1 *</label>
                                                            <div class="col-sm-7">
                                                                <input id="image_{{$j}}" name="image_{{$j}}" type="text"
                                                                       placeholder="Image{{$j}}" class="form-control required"
                                                                       value="{!! old('image_{{$j}}') !!}"/>
                                                                
                                                                {!! $errors->first('image_{{$j}}', '<span class="help-block">:message</span>') !!}
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <label>
                                                                    <input type="checkbox" class="minimal-blue"/>
                                                                </label> Show
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endfor
                                                <!-- end lettres_caractéristiques sub inputs-->
                                                <!-- end lettres_caractéristiques sub inputs -->
                                                <!-- end main1 sub inputs -->
                                            @endfor
                                            <hr>
                                        </div>
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('support', 'has-error') }}">
                                            <label for="support" class="col-sm-3 control-label">Support *</label>
                                            <div class="col-sm-7">
                                                <input id="support" name="support" type="text"
                                                       placeholder="Support" class="form-control required"
                                                       value="{!! old('support') !!}"/>
                                                <br>
                                                <a  class="btn btn-info show_support_sub_inputs"><span class="glyphicon glyphicon-plus"></span> Add Fields For Support</a>
                                                {!! $errors->first('support', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label>
                                                    <input type="checkbox" class="minimal-blue"/>
                                                </label> Show
                                            </div>
                                        </div>
                                        <div class="hide border support_sub_fields">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group {{ $errors->first('menu_déroulant_3_entrées', 'has-error') }}">
                                                <label for="support" class="col-sm-3 control-label">Menu déroulant 3 entrées *</label>
                                                <div class="col-sm-7">
                                                    <input id="menu_déroulant_3_entrées" name="menu_déroulant_3_entrées" type="text"
                                                           placeholder="Menu déroulant 3 entrées" class="form-control required"
                                                           value="{!! old('menu_déroulant_3_entrées') !!}"/>

                                                    {!! $errors->first('menu_déroulant_3_entrées', '<span class="help-block">:message</span>') !!}
                                                </div>
                                                <div class="col-sm-2">
                                                    <label>
                                                        <input type="checkbox" class="minimal-blue"/>
                                                    </label> Show
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>







                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                    </ul>
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
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>
@stop
