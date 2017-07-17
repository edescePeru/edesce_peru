@extends('layouts.panel')

@section('title','Cursos')

{{--@section('student','open')--}}

@section('subject','active')
@section('menu-active')
    <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="#">Mantenedores</a>
    </li>
    <li class="active">Cursos</li>
@endsection
@section('content')
    <div id="path" data-path="{{ asset('/') }}"></div>
    <div class="page-header">
        <h1>
            Historial de cursos
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Visualizando los cursos
            </small>
        </h1>
    </div>
    <div class="space-6"></div>

    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-success btn-sm" data-register >Nuevo curso</button>
            <div class="space-6"></div>
            <div class=''>
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="hidden-480">Accion</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach( $subjects as $subject )
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td>{{ $subject->name }}</td>

                            <td>{{  $subject->description }}</td>

                            <td>
                                <button class="btn btn-warning btn-sm" data-edit="{{ $subject->id }}" data-name="{{ $subject->name }}" data-email="{{ $subject->description }}">Editar
                                </button>
                                <button class="btn btn-danger btn-sm" data-delete="{{ $subject->id }}" data-name="{{ $subject->name }}">Eliminar</button>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div  id="modalRegister" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h4>Nuevo curso</h4>
                    </div>
                </div>
                <div id="message">
                </div>
                <form id="formRegister" action="{{ url('subject/registrar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input name="name" id="name" class="form-control inside" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="description">Descripción</label>
                            <div class="col-md-8">
                                <input name="description" id="description" class="form-control inside">
                            </div>
                        </div>

                        {{--<div class="form-group">
                            <label class="control-label col-md-3" for="image">Fotografía<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="file" accept="image/*" id="payment_file" name="image" class="form-control inside" required>
                            </div>
                        </div>--}}
                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-sm btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Registrar curso</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div  id="modalShowImage" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h4>Fotografía</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <label for="name">Ponente</label>
                    <input type="text" name="name" class="form-control" readonly><br>
                    <div class="text-center">
                        <img src="" alt="" id="image" class="img">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button class="btn btn-sm btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  id="modalEdit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h4>Editar ponente</h4>
                    </div>
                </div>
                <form id="formEdit" action="{{ url('admin/ponentes/editar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input name="name" id="name" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="company">Email<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="email" id="email" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="company">Empresa<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input name="company" id="company" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="position">Más información<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input name="profile" id="profile" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="position">Cargo actual<span class="required">*</span></label>
                            <div class="col-md-8">
                                <input name="position" id="position" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="image">Fotografía</label>
                            <div class="col-md-8">
                                <input type="file" accept="image/*" id="payment_file" name="image" class="form-control inside">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Descripción<span class="required">*</span></label>
                            <div class="col-md-8">
                                <textarea name="description"  id=description" class="form-control inside no_resize" required></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-sm btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Guardar cambios</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div  id="modalDelete" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h4>Nuevo ponente</h4>
                    </div>
                </div>

                <form id="formDelete" action="{{ url('admin/ponentes/eliminar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" id="id">

                        <label>¿Desea eliminar el siguiente ponente?</label>
                        <input name="name" id="name" class="form-control inside" readonly><br>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-sm btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Eliminar ponente</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/record/main.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js') }}"></script>

    <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('assets/js/ace.min.js') }}"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            //initiate dataTables plugin
            var myTable =
                    $('#dynamic-table')
                    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable( {
                                bAutoWidth: false,
                                "aoColumns": [
                                    { "bSortable": false },
                                    null, null,null
                                ],
                                "aaSorting": [],


                                //"bProcessing": true,
                                //"bServerSide": true,
                                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                //"iDisplayLength": 50


                                select: {
                                    style: 'multi'
                                }
                            } );



            $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

            new $.fn.dataTable.Buttons( myTable, {
                buttons: [
                    {
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                    },
                    {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "excel",
                        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "pdf",
                        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                    }
                ]
            } );
            myTable.buttons().container().appendTo( $('.tableTools-container') );

            //style the message box
            var defaultCopyAction = myTable.button(1).action();
            myTable.button(1).action(function (e, dt, button, config) {
                defaultCopyAction(e, dt, button, config);
                $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
            });


            var defaultColvisAction = myTable.button(0).action();
            myTable.button(0).action(function (e, dt, button, config) {

                defaultColvisAction(e, dt, button, config);


                if($('.dt-button-collection > .dropdown-menu').length == 0) {
                    $('.dt-button-collection')
                            .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                            .find('a').attr('href', '#').wrap("<li />")
                }
                $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
            });

            ////

            setTimeout(function() {
                $($('.tableTools-container')).find('a.dt-button').each(function() {
                    var div = $(this).find(' > div').first();
                    if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                    else $(this).tooltip({container: 'body', title: $(this).text()});
                });
            }, 500);





            myTable.on( 'select', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                    $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                }
            } );
            myTable.on( 'deselect', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                    $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                }
            } );




            /////////////////////////////////
            //table checkboxes
            $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

            //select/deselect all rows according to table header checkbox
            $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside "TH" table header

                $('#dynamic-table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) myTable.row(row).select();
                    else  myTable.row(row).deselect();
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                var row = $(this).closest('tr').get(0);
                if(this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });



            //And for the first simple table, which doesn't have TableTools or dataTables
            //select/deselect all rows according to table header checkbox
            var active_class = 'active';
            $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside "TH" table header

                $(this).closest('table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                    else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                var $row = $(this).closest('tr');
                if($row.is('.detail-row ')) return;
                if(this.checked) $row.addClass(active_class);
                else $row.removeClass(active_class);
            });



            /********************************/
            //add tooltip for small view action buttons in dropdown menu
            $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

            //tooltip placement on right or left
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                //var w2 = $source.width();

                if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                return 'left';
            }




            /***************/
            $('.show-details-btn').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').next().toggleClass('open');
                $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
            });
            /***************/





            /**
             //add horizontal scrollbars to a simple table
             $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
             {
               horizontal: true,
               styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
               size: 2000,
               mouseWheelLock: true
             }
             ).css('padding-top', '12px');
             */


        })
    </script>
    <script src="{{ asset('js/subject/index.js') }}"></script>
@endsection

