<?php

namespace Tests\Unit;

use App\Http\Requests\SendMessageRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class SendMessageRequestTest extends TestCase
{
    public function testItCanValidateByCorrectData()
    {
        $input = [
            'first_name'    => 'name',
            'last_name'     => 'name',
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => 'message'
        ];

        $request = $this->getInstance();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertTrue($validator->passes());
    }

    public function testItCannotValidateByIncorrectMailAddress()
    {
        $input = [
            'first_name'    => 'name',
            'last_name'     => 'name',
            'mail_address'  => 'not_mail_address',
            'message'       => 'message'
        ];

        $request = $this->getInstance();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertFalse($validator->passes());
    }

    public function testItCannotValidateByOver255Characters()
    {
        $input = [
            'first_name'    => str_repeat('*', 256),
            'last_name'     => str_repeat('*', 256),
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => 'message'
        ];

        $request = $this->getInstance();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertFalse($validator->passes());
    }

    public function testItCannotValidateByBlankData()
    {
        $input = [
            'name'          => 'name',
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => ''
        ];

        $request = $this->getInstance();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertFalse($validator->passes());
    }

    /**
     * @return SendMessageRequest
     */
    private function getInstance()
    {
        return new SendMessageRequest();
    }
}
