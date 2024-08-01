<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\DTO\User\UpdateUserDto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @method static firstOrCreate(array $array, array $array1)
 * @method static where(string|array $string, ?$email)
 * @method static find(int $id)
 * @method static create(array $array)
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $personal_number
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property int $id
 * @property double $amount
 */
class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'personal_number',
        'address',
        'phone_number',
        'email',
        'password',
        'balance'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getPersonalNumber(): string
    {
        return $this->personal_number;
    }

    public function setPersonalNumber(string $personal_number): void
    {
        $this->personal_number = $personal_number;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = Hash::make($password);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $balance): void
    {
        $this->amount = $balance;
    }


    public static function createFromArray($data): self
    {
        $user = new self();
        $user->setName($data['name']);
        $user->setSurname($data['surname']);
        $user->setPersonalNumber($data['personal_number']);
        $user->setAddress($data['address']);
        $user->setPhoneNumber($data['phone_number']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);
        $user->save();
        return $user;
    }

    public function updateFromArray(User $user, UpdateUserDto $data): User
    {
        $user->setName($data->name);
        $user->setSurname($data->surname);
        $user->setPersonalNumber($data->personal_number);
        $user->setAddress($data->address);
        $user->setPhoneNumber($data->phone_number);
        $user->setEmail($data->email);
        $user->setPassword($data->password);
        $user->save();
        return $user;
    }
}
