<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property User user_id
 * @property ?Carbon date
 * @property CourierStatus status_id
 * @property DeliveryStatus delivery_status
 * @property int tb_reg
 */
class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'status_id',
        'delivery_status',
        'tb_reg'
    ];

    public function getUserId(): User
    {
        return $this->user_id;
    }

    public function getUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setUserId(User $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getDate(): ?Carbon
    {
        return $this->date;
    }

    public function setDate(?Carbon $date): void
    {
        $this->date = $date;
    }

    public function getStatusId(): CourierStatus
    {
        return $this->status_id;
    }

    public function setStatusId(int $status): void
    {
        $this->status_id = $status;
    }

    public function getDeliveryStatus(): DeliveryStatus
    {
        return $this->delivery_status;
    }

    public function setDeliveryStatus(int $delivery_status): void
    {
        $this->delivery_status = $delivery_status;
    }

    public function getTbReg(): int
    {
        return $this->tb_reg;
    }

    public function setTbReg(int $tb_reg): void
    {
        $this->tb_reg = $tb_reg;
    }


}
