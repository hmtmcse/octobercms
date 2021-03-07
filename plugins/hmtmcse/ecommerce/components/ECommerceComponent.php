<?php

namespace Hmtmcse\Ecommerce\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Input;
use October\Rain\Support\Facades\Validator;


class ECommerceComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'eCommerce Component',
            'description' => 'Example eCommerce Component'
        ];
    }

    public function onSend()
    {
        // Get request data
        $data = Input::only([
            'first_name',
            'last_name',
            'email',
            'content'
        ]);

        // Validate request
        $this->validate($data);

        // Send email
        $receiver = 'admin@gmail.com';

        Mail::send('progmatiq.contact::contact', $data, function ($message) use ($receiver) {
            $message->to($receiver);
        });
    }

    protected function validate(array $data)
    {
        $rules = [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'content' => 'required',
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}