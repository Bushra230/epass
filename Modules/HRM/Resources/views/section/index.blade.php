@extends('hrm::layouts.master')
@section('title', trans('hrm::department.section_title') .' '. trans('labels.list') )
{{--@section("employee_create", 'active')--}}


@section('content')
    <section id="role-list">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('hrm::department.section_title') @lang('labels.list')</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{route('sections.create')}}" class="btn btn-primary btn-lg">
                                <i class="ft-plus white"></i>@lang('labels.add')
                            </a>
                        </div>
                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered section-list">
                                    <thead>
                                    <tr>
                                        <th>@lang('labels.serial')</th>
                                        <th>@lang('labels.name')</th>
                                        <th>@lang('labels.code')</th>
                                        <th>@lang('hrm::department.department')</th>
{{--                                        <th>@lang('hrm::department.section_head')</th>--}}
                                        <th>@lang('labels.action')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!is_null($sections))
                                        @foreach($sections as $section)
{{--                                            @php--}}
{{--                                            $sectionHead = $section->head;--}}
{{--                                            @endphp--}}

                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <th>{{$section->name }}</th>
                                                <td>{{$section->section_code}}</td>
                                                <td>{{$section->department->name}}</td>
{{--                                                <td>{{$sectionHead['first_name']." ".$sectionHead['last_name']}}</td>--}}
                                                <td>
                                                    <button id="btnSearchDrop2" type="button" data-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false" class="btn btn-info dropdown-toggle">
                                                        <i class="la la-cog"></i></button>
                                                    <span aria-labelledby="btnSearchDrop2"
                                                          class="dropdown-menu mt-1 dropdown-menu-right">
                                                        <a href="{{ url('/hrm/sections',$section->id) }}"
                                                           class="dropdown-item"><i class="ft-eye"></i> @lang('labels.details')</a>
                                                         <div class="dropdown-divider"></div>
                                                        <a href="{{ url('/hrm/sections/' . $section->id . '/edit')  }}"
                                                           class="dropdown-item"><i class="la la-edit-2"></i> @lang('labels.edit')</a>

                                                         <div class="dropdown-divider"></div>
{{--                                                        {!! Form::open(['url' =>  ['/hrm/sections', $section->id], 'method' => 'DELETE', 'class' => 'form',' novalidate']) !!}--}}

{{--                                                        {!! Form::button('<i class="ft-trash"></i> '.trans('labels.delete'), array(--}}
{{--                                                            'type' => 'submit',--}}
{{--                                                            'class' => 'dropdown-item',--}}
{{--                                                            'title' => 'Delete the hostel',--}}
{{--                                                            'onclick'=>'return confirmMessage()',--}}
{{--                                                        )) !!}--}}
                                                        {!! Form::close() !!}
                                                </span>

                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
@endpush
@push('page-js')
    <script src="{{ asset('theme/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>

    <script>

        $(document).ready(function () {
            let table = $('.section-list').DataTable({
                dom: "lBfrtip",
                "columnDefs": [
                    {"orderable": false, "targets": 1}
                ],
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {
                        extend: "print",
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    }
                ],
                "language": {
                    "search": "{{ trans('labels.search') }}",
                    "zeroRecords": "{{ trans('labels.No_matching_records_found') }}",
                    "lengthMenu": "{{ trans('labels.show') }} _MENU_ {{ trans('labels.records') }}",
                    "info": "{{trans('labels.showing')}} _START_ {{trans('labels.to')}} _END_ {{trans('labels.of')}} _TOTAL_ {{ trans('labels.records') }}",
                    "infoFiltered": "( {{ trans('labels.total')}} _MAX_ {{ trans('labels.infoFiltered') }} )",
                    "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": "{{ trans('labels.next') }}",
                        "previous": "{{ trans('labels.previous') }}"
                    },
                }
            });

        });
        function confirmMessage() {
            if(!confirm("{{ trans('labels.confirm_delete') }}"))
                event.preventDefault();
        }
    </script>

@endpush
