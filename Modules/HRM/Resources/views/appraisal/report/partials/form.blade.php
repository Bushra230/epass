<div class="form-body">
    <h4 class="form-section"><i class="ft-user"></i> @lang('hrm::appraisal.request_info')</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group {{ $errors->has('name') ? ' error' : '' }}">
                {!! Form::label('job_name', trans('hrm::appraisal.job_name'), ['class' => 'form-label required']) !!}
                {!! Form::text('job_name', null,
                    [
                        'class' => "form-control",
                        "required ",
                        "placeholder" => trans('hrm::appraisal.job_name'),
                        'data-rule-maxlength' => 100,
                        'data-msg-maxlength'=> trans('labels.At most 100 characters'),
                        'data-msg-required' => trans('labels.This field is required')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('job_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('job_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('name') ? ' error' : '' }}">

            </div>
            {!! Form::label('reporting_date_range', trans('hrm::appraisal.date_range'), ['class' => 'form-label required']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('reporting_date_start') ? ' error' : '' }}">
                        <div class="position-relative">
                            {!! Form::text('reporting_date_start', null,
                                [
                                    'id' => 'reportingDateStart',
                                    'class' => "form-control",
                                    "required",
                                    'readonly',
                                    "placeholder" => trans('hrm::appraisal.date_range'),
                                    'data-msg-required' => trans('labels.This field is required')
                                ])
                            !!}
                            <div class="help-block"></div>
                            @if ($errors->has('reporting_date_start'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('reporting_date_start') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('reporting_date_end') ? ' error' : '' }}">
                        <div class="position-relative">
                            {!! Form::text('reporting_date_end', null,
                                [
                                    'id' => 'reportingDateEnd',
                                    'class' => "form-control",
                                    "required",
                                    'readonly',
                                    "placeholder" => trans('hrm::appraisal.date_range'),
                                    'data-msg-required' => trans('labels.This field is required')
                                ])
                            !!}
                            <div class="help-block"></div>
                            @if ($errors->has('reporting_date_end'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('reporting_date_end') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="form-body">
    <h4 class="form-section"><i class="ft-user"></i> @lang('hrm::appraisal.personal_info')</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('') ? ' error' : '' }}">
                {!! Form::label('educational_qualifications', trans('hrm::appraisal.educational_qualifications'), ['class' => 'form-label required']) !!}
                {!! Form::text('educational_qualifications', null,
                    [
                        'class' => "form-control",
                        "required ",
                        "placeholder" => trans('hrm::appraisal.educational_qualifications'),
                        'data-rule-maxlength' => 100,
                        'data-msg-maxlength'=> trans('labels.At most 100 characters'),
                        'data-msg-required' => trans('labels.This field is required')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('educational_qualifications'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('educational_qualifications') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('total_job_period') ? ' error' : '' }}">
                {!! Form::label('total_job_period', trans('hrm::appraisal.job_period'), ['class' => 'form-label required']) !!}
                {!! Form::text('total_job_period', null,
                    [
                        'class' => "form-control",
                        "required ",
                        "placeholder" => trans('hrm::appraisal.job_period'),
                        'data-rule-maxlength' => 100,
                        'data-msg-maxlength'=> trans('labels.At most 100 characters'),
                        'data-msg-required' => trans('labels.This field is required')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('total_job_period'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('total_job_period') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('languages') ? ' error' : '' }}">
                {!! Form::label('languages', trans('hrm::appraisal.known_languages'), ['class' => 'form-label']) !!}
                {!! Form::text('languages', null,
                    [
                        'class' => "form-control",
                        "placeholder" => trans('hrm::appraisal.known_languages'),
                        'data-rule-maxlength' => 100,
                        'data-msg-maxlength'=> trans('labels.At most 100 characters')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('languages'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('languages') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('birth_date') ? ' error' : '' }}">
                {!! Form::label('birth_date', trans('hrm::appraisal.birth_date'), ['class' => 'form-label required']) !!}
                {!! Form::text('birth_date', null,
                    [
                        'class' => "form-control",
                        "required ",
                        "placeholder" => trans('hrm::appraisal.birth_date'),
                        'data-msg-required' => trans('labels.This field is required')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('birth_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('special_training') ? ' error' : '' }}">
                {!! Form::label('special_training', trans('hrm::appraisal.special_training'), ['class' => 'form-label']) !!}
                {!! Form::text('special_training', null,
                    [
                        'class' => "form-control",
                        "placeholder" => trans('hrm::appraisal.special_training')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('special_training'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('special_training') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('reporting_job_period') ? ' error' : '' }}">
                {!! Form::label('reporting_job_period', trans('hrm::appraisal.actual_job_period_under_officer'), ['class' => 'form-label required']) !!}
                {!! Form::text('reporting_job_period', null,
                    [
                        'class' => "form-control",
                        "required",
                        "placeholder" =>  trans('hrm::appraisal.job_period'),
                        'data-msg-required' => trans('labels.This field is required')
                    ])
                !!}
                <div class="help-block"></div>
                @if ($errors->has('reporting_job_period'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('reporting_job_period') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

</div>

<h4 class="form-section"><i class="ft-user"></i> আলোচ্য সময় যে পদে বহাল ছিলেন </h4>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('') ? ' error' : '' }}">
            {!! Form::label('job_history_designation', 'পদ', ['class' => 'form-label required']) !!}
            {{ Form::text('job_history_designation',
                    null,
                    [
                        'class' => 'form-control required',
                        'data-msg-required' => trans('labels.This field is required')
                    ]
                )
            }}
            <div class="help-block"></div>
            @if ($errors->has('job_history_designation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('job_history_designation') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('job_history_duration') ? ' error' : '' }}">
            {!! Form::label('job_history_duration', 'সময়', ['class' => 'form-label required']) !!}
            {{ Form::text('job_history_duration',
                    null,
                    [
                        'class' => 'form-control required',
                        'data-msg-required' => trans('labels.This field is required'),
                    ]
                )
            }}
            <div class="help-block"></div>
            @if ($errors->has('job_history_duration'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('job_history_duration') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('job_history_salary_scale') ? ' error' : '' }}">
            {!! Form::label('job_history_salary_scale', 'বেতন ও বেতন স্কেল', ['class' => 'form-label required']) !!}
            {{ Form::text('job_history_salary_scale',
                    null,
                    [
                        'class' => 'form-control required',
                        'data-msg-required' => trans('labels.This field is required'),
                    ]
                )
            }}
            <div class="help-block"></div>
            @if ($errors->has('job_history_salary_scale'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('job_history_salary_scale') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label required"> মন্তব্য</label>
            <textarea name="job_history_comment" required class="form-control" rows="5"
                      data-msg-required="{{ trans('labels.This field is required') }}"
            ></textarea>
        </div>
    </div>
</div>
<h4 class="form-section"><i class="ft-tag"></i></h4>
<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('name') ? ' error' : '' }}">
            {!! Form::label('receiver_id',  trans('hrm::appraisal.report_giving_officer'), ['class' => 'form-label required']) !!}

            {!! Form::select('receiver_id',
                $reportingOfficers, null,
                [
                    'class'=>'form-control select required' . ($errors->has('receiver_id') ? ' is-invalid' : ''),
                    'data-msg-required' => trans('validation.required', ['attribute' => trans('ims::inventory.recipients.title')]),
                ])
            !!}
            <div class="help-block"></div>
            @if ($errors->has('receiver_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('receiver_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="form-actions text-center">
    <button type="submit" class="btn btn-primary">
        <i class="la la-check-square-o"></i> Next Step
    </button>
    <a class="btn btn-warning mr-1" role="button" href="{{ route('appraisal-request.index') }}">
        <i class="ft-x"></i> Go Back
    </a>
</div>
