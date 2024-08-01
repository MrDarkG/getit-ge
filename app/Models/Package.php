<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property User user_id
 * @property string send_number
 * @property string tracking
 * @property string location
 * @property float weight
 * @property float price
 * @property string comment
 * @property string insert_date
 * @property float|int tariff
 * @property Status status_id
 * @property string title
 * @property string site
 * @property string payment_status
 * @property string payment_date
 * @property float a_price
 * @property string get_date
 * @property int courier_id
 * @property string cur_address
 * @property string town
 * @property int town_status
 * @method static where(string|array $array, string|int|null $userId = null)
 * @method static find(int $packageId)
 */
class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'send_number',
        'tracking',
        'location',
        'weight',
        'price',
        'comment',
        'insert_date',
        'tariff',
        'status_id',
        'title',
        'site',
        'payment_status',
        'payment_date',
        'a_price',
        'get_date',
        'courier_id',
        'cur_address',
        'town',
        'town_status'
    ];

    public function getUserId(): User
    {
        return $this->user_id;
    }

    public function setUserId(User $user_id): void
    {
        $this->user_id = $user_id->getId();
    }

    public function getSendNumber(): string
    {
        return $this->send_number;
    }

    public function setSendNumber(string $send_number): void
    {
        $this->send_number = $send_number;
    }

    public function getTracking(): string
    {
        return $this->tracking;
    }

    public function setTracking(string $tracking): void
    {
        $this->tracking = $tracking;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getInsertDate(): string
    {
        return $this->insert_date;
    }

    public function setInsertDate(string $insert_date): void
    {
        $this->insert_date = $insert_date;
    }

    public function getTariff(): float|int
    {
        return $this->tariff;
    }

    public function setTariff(float|int $tariff): void
    {
        $this->tariff = $tariff;
    }

    public function getStatusId(): Status
    {
        return $this->status_id;
    }

    public function setStatusId(Status $status_id): void
    {
        $this->status_id = $status_id->getId();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSite(): string
    {
        return $this->site;
    }

    public function setSite(string $site): void
    {
        $this->site = $site;
    }

    public function getPaymentStatus(): string
    {
        return $this->payment_status;
    }

    public function setPaymentStatus(string $payment_status): void
    {
        $this->payment_status = $payment_status;
    }

    public function getPaymentDate(): string
    {
        return $this->payment_date;
    }

    public function setPaymentDate(string $payment_date): void
    {
        $this->payment_date = $payment_date;
    }

    public function getAPrice(): float
    {
        return $this->a_price;
    }

    public function setAPrice(float $a_price): void
    {
        $this->a_price = $a_price;
    }

    public function getGetDate(): string
    {
        return $this->get_date;
    }

    public function setGetDate(string $get_date): void
    {
        $this->get_date = $get_date;
    }

    public function getCourierId(): int
    {
        return $this->courier_id;
    }

    public function setCourierId(int $courier_id): void
    {
        $this->courier_id = $courier_id;
    }

    public function getCurAddress(): string
    {
        return $this->cur_address;
    }

    public function setCurAddress(string $cur_address): void
    {
        $this->cur_address = $cur_address;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    public function getTownStatus(): int
    {
        return $this->town_status;
    }

    public function setTownStatus(int $town_status): void
    {
        $this->town_status = $town_status;
    }

    public function getUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
