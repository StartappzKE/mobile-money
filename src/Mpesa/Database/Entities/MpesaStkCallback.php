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
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereCheckoutRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereMerchantRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereMpesaReceiptNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereResultCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereResultDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkCallback whereUpdatedAt($value)
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
