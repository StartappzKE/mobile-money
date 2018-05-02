<?php

namespace DervisGroup\Pesa\Mpesa\Database\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback
 *
 * @property int $id
 * @property string $MerchantRequestID
 * @property string $CheckoutRequestID
 * @property int $ResultCode
 * @property string $ResultDesc
 * @property float|null $Amount
 * @property string|null $MpesaReceiptNumber
 * @property string|null $Balance
 * @property string|null $TransactionDate
 * @property string|null $PhoneNumber
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkRequest $request
 * @mixin \Eloquent
 */
class MpesaStkCallback extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->belongsTo(MpesaStkRequest::class, 'CheckoutRequestID', 'CheckoutRequestID');
    }
}
