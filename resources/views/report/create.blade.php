@extends('layouts.main_admin')
@section('title',' | Create')
<link rel="stylesheet" href="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.css')}}" />
@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Report</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Report</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">
                                                                
                                <form action="/submit" class="tab-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Cover</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                   
                                                    
                                                            <textarea class="mymce" name="area"></textarea>
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Daftar Isi</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                   
                                                    
                                                            <textarea class="mymce" name="area2"></textarea>
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>BAB</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                   
                                                            <textarea class="mymce" name="area3"></textarea>
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Lampiran</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                   
                                                            <textarea class="mymce" name="area4"></textarea>
                                           
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                
@endsection

@section('writen_scripts')
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/steps.js')}}"></script>
    <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
 
<script type="text/javascript">
$(document).ready(function() {

        if ($(".mymce").length > 0) {
            tinymce.init({
                selector: "textarea.mymce",
                theme: "modern",
                height: 600,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor saveToPdf"
                ],
                toolbar: "insertfile undo redo | fontselect fontsizeselect styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons template",
                templates: [
                    {title: 'Cover', description: 'Cover Template', url: '../report/cover'}
                    {title: 'BAB', description: 'BAB Template', content: 'Conttent template'},
                  ]

            });
        }
    });
  
</script>
@endsection
