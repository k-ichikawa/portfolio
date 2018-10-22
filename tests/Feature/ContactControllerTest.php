<?php

namespace Tests\Feature;

use App\Repositories\InquiryRepository;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    protected $mock;

    public function testItCanSendMessage()
    {
        $input = [
            'name'          => 'name',
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => 'message'
        ];

        $inquiryRepositoryMock = $this->getMock();

        $inquiryRepositoryMock->shouldReceive('create')->once()->with($input)->andReturn();
        DB::shouldReceive("beginTransaction")->andReturn();
        DB::shouldReceive("commit")->andReturn();

        $this->instance(InquiryRepository::class, $inquiryRepositoryMock);

        $response = $this->json('POST', '/send-message', $input);

        $response->assertStatus(200);
        $response->assertJson(['result' => true]);
    }

    public function testItCannotSendMessageByException()
    {
        $input = [
            'name'          => 'name',
            'mail_address'  => 'ichikawa.kenta0219@gmail.com',
            'message'       => 'message'
        ];

        $inquiryRepositoryMock = $this->getMock();

        $inquiryRepositoryMock->shouldReceive('create')->andThrow(new \PDOException('hoge'));
        DB::shouldReceive("beginTransaction")->andReturn();
        DB::shouldReceive("rollback")->andReturn();

        $this->instance(InquiryRepository::class, $inquiryRepositoryMock);

        $response = $this->json('POST', '/send-message', $input);

        $response->assertStatus(200);
        $response->assertJson(['result' => false]);
    }

    private function getMock()
    {
        return  \Mockery::mock(InquiryRepository::class);
    }
}
