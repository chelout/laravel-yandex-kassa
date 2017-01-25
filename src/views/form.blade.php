{{--
  -- For more information about form fields
  -- you can visit Yandex Kassa documentation page
  --
  -- @see https://tech.yandex.com/money/doc/payment-solution/payment-form/payment-form-http-docpage/
  --}}
<form action="{{yandex_kassa_form_action()}}" method="{{yandex_kassa_form_method()}}" class="form-horizontal">
    <input name="scId" type="hidden" value="{{yandex_kassa_sc_id()}}">
    <input name="shopId" type="hidden" value="{{yandex_kassa_shop_id()}}">
    <input name="sum" type="hidden" value="{{yandex_kassa_sum()}}">
    <input name="customerNumber" type="hidden" value="{{yandex_kassa_customer_number()}}">
    <div class="form-group">
        <label class="control-label col-sm-2">{{trans('yandex_kassa::form.label.payment_type')}}</label>
        <div class="col-sm-10">
            @foreach(yandex_kassa_payment_types() as $paymentTypeCode)
            <div class="radio">
                <label>
                    <input type="radio" name="paymentType" value="{{$paymentTypeCode}}">
                    {{trans('yandex_kassa::payment_types.' . $paymentTypeCode)}}
                </label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">{{trans('yandex_kassa::form.button.pay')}}</button>
        </div>
    </div>

</form>