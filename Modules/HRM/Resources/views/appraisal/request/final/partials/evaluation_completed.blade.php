<!-- Striped row layout section start -->
<section id="striped-row-form-layouts">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"
                        id="striped-row-layout-basic">@lang('hrm::appraisal.title') @lang('hrm::appraisal.request')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="row">
                            @include('hrm::appraisal.request.partials.request-form-details')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(optional($appraisalRequest->receiver)->id == auth()->user()->id or optional(optional($appraisalRequest->action)->actor)->id == auth()->user()->id or auth()->user()->hasRole('ROLE_SUPER_ADMIN'))
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="striped-row-layout-basic">২য় খন্ড (অনুস্বাক্ষরকারী অফিসার)</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                {{--                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    {{--                                    <h4 class="form-section"><i class="ft-tag"></i> 1st Evaluation : Rating</h4>--}}
                                    <table class="table table-bordered">
                                        @foreach($primaryTable as $primaryData)
                                            <tr>
                                                <th width="50%">{{ $primaryData['position'] }}
                                                    | {{ $primaryData['question'] }}</th>
                                                <td>@lang('hrm::appraisal.rating-options.' . $primaryData['answer'] )</td>
                                                <td><img
                                                        src="{{ url('file/get?filePath=' . optional($appraisalRequest->receiver)->signature) }}"
                                                        width="50px" height="20px"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    {{--                                    <h4 class="form-section"><i class="ft-tag"></i> 1st Evaluation : Special Rating</h4>--}}
                                    <table class="table table-bordered">
                                        @foreach($specialTable as $specialData)
                                            <tr>
                                                <th width="50%">{{ $specialData['position'] }}
                                                    | {{ $specialData['question'] }}</th>
                                                @if($specialData['answer'])
                                                    <td>@lang('hrm::appraisal.rating-options.' . $specialData['answer'] )</td>
                                                    <td><img
                                                            src="{{ url('file/get?filePath=' . optional($appraisalRequest->receiver)->signature) }}"
                                                            width="50px" height="20px"></td>
                                                @else
                                                    <td colspan="2"></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </table>
                                    <h4 class="form-section"><i class="ft-tag"></i> কেবলমাত্র প্রযোজ্য ক্ষেত্রেই
                                    </h4>
                                    <table class="table table-bordered">
                                        @foreach($optionalTable as $optionalData)
                                            <tr>
                                                <th width="50%">{{ $optionalData['position'] }}
                                                    | {{ $optionalData['question'] }}</th>
                                                @if($optionalData['answer'])
                                                    <td>{{ $optionalData['answer'] }}</td>
                                                    <td><img
                                                            src="{{ url('file/get?filePath=' . optional($appraisalRequest->receiver)->signature) }}"
                                                            width="50px" height="20px"></td>
                                                @else
                                                    <td colspan="2"></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="striped-row-layout-basic">৩য় খণ্ড (অনুস্বাক্ষরকারী অফিসার)</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                {{--                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="form-section"><i class="ft-tag"></i> পদোন্নতির যোগ্যতা</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><b>সমশ্রেণীর অন্যান্য অফিসারের সঙ্গে তুলনাক্রমে নিন্মের সঠিক কলামে
                                                    অনুসাক্ষর করিয়া এই অফিসার সম্পর্কে আপনার সাধারণ মূল্যায়ন
                                                    লিপিবদ্ধ
                                                    করুণঃ-</b></td>
                                            <td>@lang('hrm::appraisal.rating-options.' . optional($appraisalRequest->summarizedEvaluation)->summarized_rating )</td>
                                        </tr>
                                        <tr>
                                            <td><b> নিম্মনের সঠিক সিদ্ধান্ত নির্বাচন করুন</b></td>
                                            <td>@lang('hrm::appraisal.final_decision.' . optional($appraisalRequest->summarizedEvaluation)->final_decision )</td>
                                        </tr>
                                        <tr>
                                            <td><b>- বিশেষ প্রবণতা থাকিলে উহার উপর মন্তব্য যেমন :- ( সচিবালয় ,
                                                    প্রশাসন ,
                                                    বিচার বিভাগ , উন্নয়ন বা কূটনীতি সম্পর্কিত কার্য )।</b></td>
                                            <td>{{ optional($appraisalRequest->summarizedEvaluation)->comment }}</td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>{{ optional($appraisalRequest->receiver)->first_name }} {{ optional($appraisalRequest->receiver)->last_name }}</th>
                                        </tr>
                                        <tr>
                                            <td><img
                                                    src="{{ url('file/get?filePath=' . optional($appraisalRequest->receiver)->signature) }}"
                                                    width="100px" height="50px"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(optional(optional($appraisalRequest->action)->actor)->id == auth()->user()->id or auth()->user()->hasRole('ROLE_SUPER_ADMIN'))
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="form-section"><i class="ft-tag"></i> ৪র্থ খন্ড- প্রতিস্বাক্ষরকারী অফিসার
                                        এর
                                        মন্তব্য</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><b> আমি মনে করি যে, রিপোর্ট প্রদানকারী অফিসারের মূল্যায়ন অত্যুত্তম/
                                                    যুক্তি সঙ্গতভাবেঃ </b></td>
                                            <td>
                                                @lang('hrm::appraisal.action-rating-options.' . optional($appraisalRequest->action)->rating)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b> অধিকিন্তু নিন্মে আমার মন্তব্য যোগ করিতেছিঃ</b></td>
                                            <td>{{optional($appraisalRequest->action)->comment}}</td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>{{ optional(optional($appraisalRequest->action)->actor)->first_name }} {{ optional(optional($appraisalRequest->action)->actor)->last_name }}</th>
                                        </tr>
                                        <tr>
                                            <td><img
                                                    src="{{ url('file/get?filePath=' . optional(optional($appraisalRequest->action)->actor)->signature) }}"
                                                    width="100px" height="50px"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="form-actions text-center">
                                <ul class="list-inline mb-0">
                                    {{--                                        <li><a target="_blank"--}}
                                    {{--                                               id="{{$appraisalRequest->id}}"--}}
                                    {{--                                               href="{{ route('acr.print.preview', $appraisalRequest->id) }}"--}}
                                    {{--                                               class="btn btn-teal"><i--}}
                                    {{--                                                    class="la la-eye"></i> @lang('labels.print_preview')</a></li>--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a target="_blank" href="{{ route('acr.print', $appraisalRequest->id) }}"--}}
                                    {{--                                               class="btn btn-primary">--}}
                                    {{--                                                <i class="la la-print"></i> @lang('labels.print')</a>--}}
                                    {{--                                        </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
