<?php

namespace DervisGroup\Pesa\Mpesa\Database\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * DervisGroup\Pesa\Mpesa\Database\Entities\MpesaBulkPaymentResponse
 *
 * @property int $id
 * @property int $ResultType
 * @property int $ResultCode
 * @property string $ResultDesc
 * @property string $OriginatorConversationID
 * @property string $ConversationID
 * @property string $TransactionID
 * @property string|null $ResultParameters
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \DervisGroup\Pesa\Mpesa\Database\Entities\MpesaBulkPaymentRequest $request
 * @mixin \Eloquent
 */
class MpesaBulkPaymentResponse extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->belongsTo(MpesaBulkPaymentRequest::class, 'ConversationID', 'conversation_id');
    }
}
