<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Message;
use App\Models\Customer;
use Illuminate\Http\Request;
use Throwable;

class RegisterService extends Controller
{
    public const MAX_REGISTERS = 5;

    public static function register(array $data) : Message
    {
        if (
            self::MAX_REGISTERS === Customer::count()
        ) {

            return new Message(Message::FAIL, __('All records were completed'));

        }

        try {
            $data['city_id'] = $data['city'];
            unset($data['city']);

            Customer::create($data);

        } catch (Throwable $th) {
            info($th->getMessage());
            return new Message(Message::FAIL, __('An error has occurred'));
        }


        static::verify_winner();

        return new Message(Message::SUCCESS, __('Successful registration!'));
    }

    private static function verify_winner()
    {
        if (
            self::MAX_REGISTERS === Customer::count()
            &&
            ! \App\Models\Winner::count()
        ) {

            $customerWinner = Customer::inRandomOrder()->first();

            \App\Models\Winner::create(['customer_id' => $customerWinner->id]);

        }
    }
}
