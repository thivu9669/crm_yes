<form id="history_calls_search_form">
    <div class="form-group m-form__group row">
        <div class="col-12 col-md-3 m-form__group-sub">
            <div class="form-group">
                <label for="select_user_id">{{ $historyCall->label('user') }}</label>
                <select name="user_id" id="select_user_id" data-url="{{ route('users.list') }}" class="select2-ajax" data-column="name">
                    <option></option>
                </select>
            </div>
        </div>
        {{--<div class="col-12 col-md-3 m-form__group-sub">--}}
            {{--<div class="form-group">--}}
                {{--<label for="select_lead_id">{{ $historyCall->label('lead') }}</label>--}}
                {{--<select name="lead_id" id="select_lead_id" data-url="{{ route('leads.list') }}" class="select2-ajax">--}}
                    {{--<option></option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="col-12 col-md-3 m-form__group-sub">
            <div class="form-group">
                <label for="select_state">{{ $historyCall->label('state') }}</label>
                <select name="state" id="select_state" class="select">
                    <option></option>
                    @foreach ($leadStates as $key => $state)
                        <option value="{{ $key }}">{{ $state }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 col-md-3 m-form__group-sub">
            <div class="form-group">
                <label for="txt_from_date">{{ __('From Date') }}</label>
                <input class="form-control text-datepicker" name="from_date" id="txt_from_date" value="" autocomplete="off">
            </div>
        </div>
        <div class="col-12 col-md-3 m-form__group-sub">
            <div class="form-group">
                <label for="txt_to_date">{{ __('To Date') }}</label>
                <input class="form-control text-datepicker" name="to_date" id="txt_to_date" value="" autocomplete="off">
            </div>
        </div>
        <div class="col-12 col-md-3 m-form__group-sub mt-6">
            <button class="btn btn-brand m-btn m-btn--custom m-btn--icon" id="btn_filter"><span> <i class="fa fa-search"></i> <span>@lang('Search')</span> </span></button>
            <button type="button" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" id="btn_reset_filter"><span> <i class="fa fa-undo-alt"></i> <span>@lang('Reset')</span> </span></button>
        </div>
    </div>
</form>