@php /** @var \App\Models\Contract $contract */ @endphp
<form id="contracts_form" class="m-form m-form--label-align-right m-form--group-seperator-dashed m-form--state" method="post" action="{{ $action }}">
    @csrf
    @isset($method)
        @method('put')
    @endisset
    <div class="m-portlet__body">

        {{--MEMBER INFO--}}
        <div class="form-group m-form__group row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('name') ? 'has-danger' : ''}}">
                <label for="txt_name">{{ $lead->label('name') }}</label>
                <input class="form-control" name="name" type="text" id="txt_name" value="{{ $lead->name ?? old('name')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('name', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('email') ? 'has-danger' : ''}}">
                <label for="txt_email">{{ $lead->label('email') }}</label>
                <input class="form-control" name="email" type="email" id="txt_email" value="{{ $lead->email ?? old('email')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('email', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('phone') ? 'has-danger' : ''}}">
                <label for="txt_phone">{{ $lead->label('phone') }}</label>
                <input class="form-control" name="phone" type="text" id="txt_phone" value="{{ $lead->phone ?? old('phone')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('phone', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('title') ? 'has-danger' : ''}}">
                <label for="select_title">{{ $lead->label('title') }}</label>
                {{--<input class="form-control" name="title" type="text" id="txt_title" value="{{ $lead->title ?? old('title')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">--}}
                <select name="title" class="form-control select" id="select_title">
                    <option></option>
                    @foreach ($lead->titles as $key => $title)
                        <option value="{{ $title }}" {{ $lead->title == $title || (! $lead->exists && $key === 1) ? ' selected' : '' }}>{{ $title }}</option>
                    @endforeach
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('title', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('birthday') ? 'has-danger' : ''}}">
                <label for="txt_birthday">{{ $lead->label('birthday') }}</label>
                <input class="form-control text-datepicker" name="birthday" type="text" id="txt_birthday" value="{{ optional($lead->birthday)->format('d-m-Y') ?? old('birthday')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('birthday', '<div class="form-control-feedback">:message</div>') !!}
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('husband_identity') ? 'has-danger' : ''}}">
                <label for="txt_husband_identity">{{ $lead->label('husband_identity') }}</label>
                <input class="form-control" name="husband_identity" type="text" id="txt_husband_identity" value="{{ $lead->husband_identity ?? old('husband_identity')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('husband_identity', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('husband_identity_address') ? 'has-danger' : ''}}">
                <label for="txt_husband_identity_address">{{ $lead->label('husband_identity_address') }}</label>
                <input class="form-control" name="husband_identity_address" type="text" id="txt_husband_identity_address" value="{{ $lead->husband_identity_address ?? old('husband_identity_address')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('husband_identity_address', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('husband_identity_date') ? 'has-danger' : ''}}">
                <label for="txt_husband_identity_date">{{ $lead->label('husband_identity_date') }}</label>
                <input class="form-control text-datepicker" name="husband_identity_date" type="text" id="txt_husband_identity_date" value="{{ optional($lead->husband_identity_date)->format('d-m-Y') ?? old('husband_identity_date')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('husband_identity_date', '<div class="form-control-feedback">:message</div>') !!}
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('wife_identity') ? 'has-danger' : ''}}">
                <label for="txt_wife_identity">{{ $lead->label('wife_identity') }}</label>
                <input class="form-control" name="wife_identity" type="text" id="txt_wife_identity" value="{{ $lead->wife_identity ?? old('wife_identity')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('wife_identity', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('wife_identity_address') ? 'has-danger' : ''}}">
                <label for="txt_wife_identity_address">{{ $lead->label('wife_identity_address') }}</label>
                <input class="form-control" name="wife_identity_address" type="text" id="txt_wife_identity_address" value="{{ $lead->wife_identity_address ?? old('wife_identity_address')}}" placeholder="{{ __('Enter value') }}"
                       autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('wife_identity_address', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('wife_identity_date') ? 'has-danger' : ''}}">
                <label for="txt_wife_identity_date">{{ $lead->label('wife_identity_date') }}</label>
                <input class="form-control text-datepicker" name="wife_identity_date" type="text" id="txt_wife_identity_date" value="{{ optional($lead->wife_identity_date)->format('d-m-Y') ?? old('wife_identity_date')}}" placeholder="{{ __
                ('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('wife_identity_date', '<div class="form-control-feedback">:message</div>') !!}
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('address') ? 'has-danger' : ''}}">
                <label for="txt_address">{{ $lead->label('address') }}</label>
                <input class="form-control" name="address" type="text" id="txt_address" value="{{ $lead->address ?? old('address')}}" placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('address', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('state') ? 'has-danger' : ''}}">
                <label for="select_province">{{ $lead->label('province') }}</label>
                <select name="province_id" class="form-control" id="select_province" data-url="{{ route('leads.provinces.table') }}">
                    <option></option>
                    @if ($lead->province_id)
                        <option value="{{ $lead->province_id }}" selected>{{ $lead->province->name }}</option>
                    @endif
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('province', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        {{--<div class="form-group m-form__group row"></div>--}}
        {{--END MEMBER INFO--}}

        {{--CONTRACT--}}
        <div class="form-group m-form__group row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('contract_no') ? 'has-danger' : ''}}">
                <label for="txt_contract_no">{{ $contract->label('contract_no') }}</label>
                <input class="form-control" name="contract_no" type="text" id="txt_contract_no" value="{{ $contract->contract_no ?? old('contract_no')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('contract_no', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('signed_date') ? 'has-danger' : ''}}">
                <label for="txt_signed_date">{{ $contract->label('signed_date') }}</label>
                <input class="form-control text-datepicker" name="signed_date" type="text" id="txt_signed_date" value="{{ $contract->signed_date ?? old('signed_date')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('signed_date', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('amount') ? 'has-danger' : ''}}">
                <label for="txt_amount">{{ $contract->label('amount') }}</label>
                <input class="form-control" name="amount" type="text" id="txt_amount" value="{{ $contract->amount ?? old('amount')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('amount', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('membership') ? 'has-danger' : ''}}">
                <label for="select_membership">{{ $contract->label('membership') }}</label>
                <select name="membership" id="select_membership" class="select">
                    <option></option>
                    @foreach ($contract->memberships as $key => $membership)
                        <option value="{{ $key }}" {{ $contract->membership == $key ? 'checked' : '' }}>{{ $membership }}</option>
                    @endforeach
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('membership', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('room_type') ? 'has-danger' : ''}}">
                <label for="select_room_type">{{ $contract->label('room_type') }}</label>
                <select name="room_type" id="select_room_type" class="select">
                    <option></option>
                    @foreach ($contract->room_types as $key => $roomType)
                        <option value="{{ $key }}" {{ $contract->room_type == $key ? 'checked' : '' }}>{{ $roomType }}</option>
                    @endforeach
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('room_type', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('limit') ? 'has-danger' : ''}}">
                <label for="select_limit">{{ $contract->label('limit') }}</label>
                <select name="limit" id="select_limit" class="select">
                    <option></option>
                    @foreach ($contract->limits as $key => $limit)
                        <option value="{{ $key }}" {{ $contract->limit == $key ? 'checked' : '' }}>{{ $limit }}</option>
                    @endforeach
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('limit', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('start_year') ? 'has-danger' : ''}}">
                <label for="txt_start_year">{{ $contract->label('start_year') }}</label>
                <input class="form-control" name="start_year" type="text" id="txt_start_year" value="{{ $contract->start_year ?? old('start_year')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('start_year', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('end_time') ? 'has-danger' : ''}}">
                <label for="txt_end_time">{{ $contract->label('end_time') }}</label>
                <input class="form-control" name="end_time" type="text" id="txt_end_time" value="{{ $contract->end_time ?? old('end_time')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('end_time', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        {{--END CONTRACT--}}

        {{--PAYMENT_DETAIL--}}
        <div class="form-group m-form__group row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('total_paid_deal') ? 'has-danger' : ''}}">
                <label for="txt_total_paid_deal">{{ $contract->label('total_paid_deal') }}</label>
                <input class="form-control" name="total_paid_deal" type="text" id="txt_total_paid_deal" value="{{ $contract->total_paid_deal ?? old('total_paid_deal')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('total_paid_deal', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('pay_date') ? 'has-danger' : ''}}">
                <label for="txt_pay_date">{{ $contract->label('pay_date') }}</label>
                <input class="form-control text-datepicker" name="pay_date" type="text" id="txt_pay_date" value="{{ $contract->pay_date ?? old('pay_date')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('pay_date', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('payment_method') ? 'has-danger' : ''}}">
                <label for="select_payment_method">{{ $paymentCost->label('payment_method') }}</label>
                <select name="payment_method" id="select_payment_method" class="select">
                    <option></option>
                    @foreach ($paymentCost->payment_methods as $key => $paymentMethod)
                        <option value="{{ $key }}">{{ $paymentMethod }}</option>
                    @endforeach
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('payment_method', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('bank_name') ? 'has-danger' : ''}}">
                <label for="select_bank">{{ $paymentCost->label('bank_name') }}</label>
                <select name="bank_name" id="select_bank" class="select" disabled>
                    <option></option>
                </select>
                <span class="m-form__help"></span>
                {!! $errors->first('bank_name', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('cost') ? 'has-danger' : ''}}">
                <label for="txt_cost">{{ $paymentCost->label('cost') }}</label>
                <input class="form-control" name="cost" type="text" id="txt_cost" value="{{ $paymentCost->cost ?? old('cost')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('cost', '<div class="form-control-feedback">:message</div>') !!}
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 m-form__group-sub {{ $errors->has('bank_no') ? 'has-danger' : ''}}">
                <label for="txt_bank_no">{{ $paymentCost->label('bank_no') }}</label>
                <input class="form-control" name="bank_no" type="text" id="txt_bank_no" value="{{ $paymentCost->bank_no ?? old('bank_no')}}" required placeholder="{{ __('Enter value') }}" autocomplete="off">
                <span class="m-form__help"></span>
                {!! $errors->first('bank_no', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group m-form__group row">
        </div>
        <div class="form-group m-form__group row">
            <div class="col-12 m-form__group-sub {{ $errors->has('note') ? 'has-danger' : ''}}">
                <label for="textarea_note">{{ $paymentCost->label('note') }}</label>
                <textarea name="note" id="textarea_note" cols="30" rows="5" class="form-control"></textarea>
                <span class="m-form__help"></span>
                {!! $errors->first('note', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
        {{--END PAYMENT_DETAIL--}}
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit m-portlet__foot-no-border">
        <div class="m-form__actions m-form__actions--right">
            <button class="btn btn-brand m-btn m-btn--icon m-btn--custom"><span><i class="fa fa-save"></i><span>@lang('Save')</span></span></button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--custom"><span><i class="fa fa-ban"></i><span>@lang('Cancel')</span></span></a>
        </div>
    </div>
</form>