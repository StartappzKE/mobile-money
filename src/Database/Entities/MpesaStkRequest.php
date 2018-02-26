<?php

namespace DervisGroup\Pesa\Database\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * DervisGroup\Pesa\Database\Entities\MpesaStkRequest
 *
 * @property int $id
 * @property string $phone
 * @property float $amount
 * @property string $reference
 * @property string $description
 * @property string $status
 * @property int $complete
 * @property string|null $MerchantRequestID
 * @property string|null $CheckoutRequestID
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereCheckoutRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereMerchantRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DervisGroup\Pesa\Database\Entities\MpesaStkRequest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaStkRequest extends Model
{
    protected $guarded = [];
}
