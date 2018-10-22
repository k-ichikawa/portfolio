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
            'name'          => 'name',
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => 'message'
        ];

        $request = new SendMessageRequest();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertTrue($validator->passes());
    }

    public function testItCannotValidateByIncorrectData()
    {
        $input = [
            'name'          => 'name',
            'mail_address'  => 'aaa',
            'message'       => 'message'
        ];

        $request = new SendMessageRequest();
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

        $request = new SendMessageRequest();
        $rules   = $request->rules();

        $validator  = Validator::make($input, $rules);

        $this->assertFalse($validator->passes());
    }
}
