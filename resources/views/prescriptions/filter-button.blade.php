<div class="ms-0 ms-md-2 float-start" wire:ignore>
    <div class="dropdown d-flex align-items-center me-4 me-md-5">
        <button
                class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                type="button"  data-bs-auto-close="outside"
                data-bs-toggle="dropdown" aria-expanded="false"
                id="prescriptionFilterBtn">
            <i class='fas fa-filter'></i>
        </button>
        <div class="dropdown-menu py-0" aria-labelledby="prescriptionFilterBtn">
            <div class="text-start border-bottom py-4 px-7">
                <h3 class="text-gray-900 mb-0">{{ __('messages.common.filter_option') }}</h3>
            </div>
            <div class="p-5">
                <div class="mb-5">
                    <label for="prescriptionHead" class="form-label">{{ __('messages.web.status').':' }}</label>
{{--                    {{ Form::select('status', collect($filterHeads[0])->sortBy('key')->reverse()->toArray(),null, ['id' => 'prescriptionHead', 'data-control' =>'select2', 'class' => 'form-select status-selector select2-hidden-accessible data-allow-clear="true"']) }}--}}
                    <select class="form-select status-selector" id="prescriptionHead" data-control="select2" name="status">
                       <option value="2">{{ __('messages.filter.all') }}</option>
                       <option value="1">{{ __('messages.filter.active') }}</option>
                       <option value="0">{{ __('messages.filter.deactive') }}</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="reset" id="prescriptionResetFilter" class="btn btn-secondary">{{ __('messages.common.reset') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
