<div class="form-body">
    <h4 class="form-section"><i class="ft-user"></i> @lang('hrm::appraisal.personal_info')</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? ' error' : '' }}">
                {!! Form::label('name', trans('hrm::cadre_officer_info.name'), ['class' => 'form-label required']) !!}
                {{ Form::text('name',$gcoAppraisalRequest->name,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.name'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('birth_date') ? ' error' : '' }}">
                {!! Form::label('birth_date', trans('hrm::cadre_officer_info.birth_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('birth_date', $gcoAppraisalRequest->birth_date,
                    [
                        'id' => 'birthDate',
                        'class' => "form-control",
                        "required ",
                        "placeholder" => "DD-MM-YYYY",//trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required'),
                        'data-msg-birthDate' => trans("labels.Please specify the correct date"),
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('birth_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('marital_status') ? ' error' : '' }}">
                {!! Form::label('marital_status', trans('hrm::cadre_officer_info.marital_status'), ['class' => 'form-label required']) !!}

                {!! Form::select('marital_status',
                  config('constants.marital_status'), $gcoAppraisalRequest->marital_status,
                  [
                      'placeholder' => trans('labels.select'),
                      'required',
                      'class'=>'form-control select required' . ($errors->has('marital_status') ? ' is-invalid' : ''),
                      'data-msg-required' => trans('labels.This field is required'),
                  ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('marital_status'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('marital_status') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('service_cadre_name') ? ' error' : '' }}">
                {!! Form::label('service_cadre_name', trans('hrm::cadre_officer_info.service_cadre_name'), ['class' => 'form-label required']) !!}
                {{ Form::text('service_cadre_name',$gcoAppraisalRequest->service_cadre_name,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.service_cadre_name'),
                                    'class' => 'form-control',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                {{--                <div class="help-block"></div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif--}}
            </div>
            <p class="form-section">{{ trans('hrm::cadre_officer_info.service_enter_date') }}</p>

            <div class="form-group {{ $errors->has('govt_service_start_date') ? ' error' : '' }}">
                {!! Form::label('govt_service_start_date', trans('hrm::cadre_officer_info.govt_service_start_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('govt_service_start_date', $gcoAppraisalRequest->govt_service_start_date,
                    [
                        'id' => 'govt_service_start_date',
                        'class' => "form-control",
                        "required ",
                        "placeholder" => "DD-MM-YYYY",//trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required'),
                        'data-msg-birthDate' => trans("labels.Please specify the correct date"),
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('govt_service_start_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('cadre_service_start_date') ? ' error' : '' }}">
                {!! Form::label('cadre_service_start_date', trans('hrm::cadre_officer_info.cadre_service_start_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('cadre_service_start_date', $gcoAppraisalRequest->cadre_service_start_date,
                    [
                        'id' => 'cadre_service_start_date',
                        'class' => "form-control",
                        "required ",
                        "placeholder" => "DD-MM-YYYY",//trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required'),
                        'data-msg-birthDate' => trans("labels.Please specify the correct date"),
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('cadre_service_start_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cadre_service_start_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('salary_scale') ? ' error' : '' }}">
                {!! Form::label('salary_scale', trans('hrm::cadre_officer_info.salary_scale'), ['class' => 'form-label required']) !!}
                {{ Form::number('salary_scale',$gcoAppraisalRequest->salary_scale,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.salary_scale'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('salary_scale'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('salary_scale') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('educational_qualifications') ? ' error' : '' }}">
                {!! Form::label('educational_qualifications', trans('hrm::cadre_officer_info.educational_qualifications'), ['class' => 'form-label required']) !!}
                {{ Form::text('educational_qualifications',$gcoAppraisalRequest->educational_qualifications,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.educational_qualifications'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('educational_qualifications'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('educational_qualifications') }}</strong>
                    </span>
                @endif
            </div>

            <p class="form-section">{{ trans('hrm::cadre_officer_info.training') }}</p>

            <div class="form-group {{ $errors->has('training_country') ? ' error' : '' }}">
                {!! Form::label('training_country', trans('hrm::cadre_officer_info.training_country'), ['class' => 'form-label required']) !!}
                {{ Form::text('training_country',$gcoAppraisalRequest->training_country,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.training_country'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('training_country'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('training_country') }}</strong>
                    </span>
                @endif
            </div>

            <p class="form-section">{{ trans('hrm::cadre_officer_info.foreign_language_skil') }}</p>

            <div class="form-group {{ $errors->has('forign_skill_speaking') ? ' error' : '' }}">
                {!! Form::label('forign_skill_speaking', trans('hrm::cadre_officer_info.forign_skill_speaking'), ['class' => 'form-label']) !!}
                {{ Form::text('forign_skill_speaking',$gcoAppraisalRequest->forign_skill_speaking,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.forign_skill_speaking'),
                                    'class' => 'form-control',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('forign_skill_speaking'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('forign_skill_speaking') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('forign_skill_writing') ? ' error' : '' }}">
                {!! Form::label('forign_skill_writing', trans('hrm::cadre_officer_info.forign_skill_writing'), ['class' => 'form-label']) !!}
                {{ Form::text('forign_skill_writing',$gcoAppraisalRequest->forign_skill_writing,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.forign_skill_writing'),
                                    'class' => 'form-control',
                                   /* 'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('forign_skill_writing'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('forign_skill_writing') }}</strong>
                    </span>
                @endif
            </div>
            <p class="form-section">{{ trans('hrm::cadre_officer_info.comment') }}</p>
            <div class="form-group {{ $errors->has('comment_one') ? ' error' : '' }}">
                {!! Form::label('comment_one', trans('hrm::cadre_officer_info.comment_one'), ['class' => 'form-label required']) !!}
                {{ Form::text('comment_one',$gcoAppraisalRequest->comment_one,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.comment_one'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('comment_one'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comment_one') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('comment_two') ? ' error' : '' }}">
                {!! Form::label('comment_two', trans('hrm::cadre_officer_info.comment_two'), ['class' => 'form-label']) !!}
                {{ Form::text('comment_two',$gcoAppraisalRequest->comment_two,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.comment_two'),
                                    'class' => 'form-control required',
                                   /* 'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('comment_two'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comment_two') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('comment_three') ? ' error' : '' }}">
                {!! Form::label('comment_three', trans('hrm::cadre_officer_info.comment_three'), ['class' => 'form-label']) !!}
                {{ Form::text('comment_three',$gcoAppraisalRequest->comment_three,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.comment_three'),
                                    'class' => 'form-control required',
                                   /* 'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('comment_three'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comment_three') }}</strong>
                    </span>
                @endif
            </div>

        </div>


        <div class="col-md-6">
            <div class="form-group {{ $errors->has('designation') ? ' error' : '' }}">
                {!! Form::label('designation', trans('hrm::cadre_officer_info.designation'), ['class' => 'form-label required']) !!}
                {{ Form::text('designation',$gcoAppraisalRequest->designation,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.designation'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('designation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('designation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('father_name') ? ' error' : '' }}">
                {!! Form::label('father_name', trans('hrm::cadre_officer_info.father_name'), ['class' => 'form-label required']) !!}
                {{ Form::text('father_name',$gcoAppraisalRequest->father_name,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.father_name'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('father_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('father_name') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group {{ $errors->has('office_name') ? ' error' : '' }}">
                {!! Form::label('office_name', trans('hrm::cadre_officer_info.office_name'), ['class' => 'form-label required']) !!}
                {{ Form::text('office_name',$gcoAppraisalRequest->office_name,
                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.office_name'),
                                    'class' => 'form-control required',
                                   'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('office_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('office_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('number_of_children') ? ' error' : '' }}">
                {!! Form::label('number_of_children', trans('hrm::cadre_officer_info.number_of_children'), ['class' => 'form-label']) !!}
                {{ Form::text('number_of_children',$gcoAppraisalRequest->number_of_children,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.number_of_children'),
                                    'class' => 'form-control',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('number_of_children'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_of_children') }}</strong>
                    </span>
                @endif
            </div>
            <p class="form-section"> &nbsp;</p>

            <div class="form-group {{ $errors->has('gazetted_service_start_date') ? ' error' : '' }}">
                {!! Form::label('gazetted_service_start_date', trans('hrm::cadre_officer_info.gazetted_service_start_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('gazetted_service_start_date', $gcoAppraisalRequest->gazetted_service_start_date,
                    [
                        'id' => 'gazetted_service_start_date',
                        'class' => "form-control",
                        "required ",
                        "placeholder" => "DD-MM-YYYY",//trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required'),
                        'data-msg-birthDate' => trans("labels.Please specify the correct date"),
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('gazetted_service_start_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gazetted_service_start_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('current_post_joining_date') ? ' error' : '' }}">
                {!! Form::label('current_post_joining_date', trans('hrm::cadre_officer_info.current_post_joining_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('current_post_joining_date',$gcoAppraisalRequest->current_post_joining_date,
                    [
                        'id' => 'current_post_joining_date',
                        'class' => "form-control",
                        "required ",
                        "placeholder" => "DD-MM-YYYY",//trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required'),
                        'data-msg-birthDate' => trans("labels.Please specify the correct date"),
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('current_post_joining_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('current_post_joining_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('current_salary_scale') ? ' error' : '' }}">
                {!! Form::label('current_salary_scale', trans('hrm::cadre_officer_info.current_salary_scale'), ['class' => 'form-label required']) !!}
                {{ Form::number('current_salary_scale',$gcoAppraisalRequest->current_salary_scale,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.current_salary_scale'),
                                    'class' => 'form-control required',
                                    'data-msg-required' => trans('labels.This field is required'),

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('current_salary_scale'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('current_salary_scale') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                &nbsp;

            </div>
            <div class="form-group ">
                &nbsp;
            </div>


            <p class="form-section"> &nbsp;</p>

            <div class="form-group {{ $errors->has('training_forign') ? ' error' : '' }}">
                {!! Form::label('training_forign', trans('hrm::cadre_officer_info.training_forign'), ['class' => 'form-label']) !!}
                {{ Form::text('training_forign',$gcoAppraisalRequest->training_forign,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.training_forign'),
                                    'class' => 'form-control',
                                   /* 'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('training_forign'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('training_forign') }}</strong>
                    </span>
                @endif
            </div>
            <p class="form-section"> &nbsp;</p>
            <div class="form-group {{ $errors->has('forign_skill_reading') ? ' error' : '' }}">
                {!! Form::label('forign_skill_reading', trans('hrm::cadre_officer_info.forign_skill_reading'), ['class' => 'form-label']) !!}
                {{ Form::text('forign_skill_reading',$gcoAppraisalRequest->forign_skill_reading,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.forign_skill_reading'),
                                    'class' => 'form-control',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('  forign_skill_reading'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('  forign_skill_reading') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group ">
                &nbsp;
            </div>
            <div class="form-group ">
                &nbsp;
                <br>
            </div>
            <br>
            <p class="form-section">{{ trans('hrm::cadre_officer_info.comment') }}</p>

            <div class="form-group {{ $errors->has('comment_four') ? ' error' : '' }}">
                {!! Form::label('comment_four', trans('hrm::cadre_officer_info.comment_four'), ['class' => 'form-label']) !!}
                {{ Form::text('comment_four',$gcoAppraisalRequest->comment_four,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.comment_four'),
                                    'class' => 'form-control required',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('comment_four'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comment_four') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('comment_five') ? ' error' : '' }}">
                {!! Form::label('comment_five', trans('hrm::cadre_officer_info.comment_five'), ['class' => 'form-label']) !!}
                {{ Form::text('comment_five',$gcoAppraisalRequest->comment_five,

                                [
                                    'placeholder' => trans('hrm::cadre_officer_info.comment_five'),
                                    'class' => 'form-control required',
                                    /*'data-msg-required' => trans('labels.This field is required'),*/

                                ]
                            )
                        }}
                <div class="help-block"></div>
                @if ($errors->has('comment_five'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comment_five') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">

            </div>

        </div>
    </div>

</div>

<h4 class="form-section"><i class="ft-tag"></i> {{trans('hrm::appraisal.report_giving_officer')}} </h4>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('employee_officer_id') ? ' error' : '' }}">
            {!! Form::label('employee_officer_id',  trans('hrm::appraisal.report_giving_officer'), ['class' => 'form-label required']) !!}

            {!! Form::select('employee_officer_id',
                $reportingOfficers, $gcoAppraisalRequest->employee_officer_id,
                [
                    'class'=>'form-control select required' . ($errors->has('employee_officer_id') ? ' is-invalid' : ''),
                    'data-msg-required' => trans('labels.This field is required'),
                ])
            !!}
            <div class="help-block"></div>
            @if ($errors->has('employee_officer_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('employee_officer_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="form-actions text-center">
    <button type="submit" class="btn btn-primary">
        <i class="la la-check-square-o"></i> @lang('labels.save')
    </button>
    <a class="btn btn-warning mr-1" role="button" href="{{ route('gco-appraisal-request.index') }}">
        <i class="ft-x"></i> Go Back
    </a>
</div>

