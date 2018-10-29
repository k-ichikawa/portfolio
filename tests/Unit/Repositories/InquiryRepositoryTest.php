<?php

namespace Tests\Unit;

use App\Models\Inquiry;
use App\Repositories\InquiryRepository;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InquiryRepositoryTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function testItCanMakeModel()
    {
        $this->assertEquals(new Inquiry(), $this->makeInstance()->makeModel());
    }

    public function testItCanCreate()
    {
        $first_name     = 'kenta';
        $last_name      = 'ichikawa';
        $mail_address   = 'ichikawa.kenta0219@gmail.com';
        $message        = 'message';

        $input = [
            'first_name'    => $first_name,
            'last_name'     => $last_name,
            'mail_address'  => $mail_address,
            'message'       => $message
        ];

        $repository = $this->makeInstance();
        $created_inquiry = $repository->create($input);

        $this->assertEquals($created_inquiry->id, 1);
        $this->assertEquals($created_inquiry->first_name, $first_name);
        $this->assertEquals($created_inquiry->last_name, $last_name);
        $this->assertEquals($created_inquiry->mail_address, $mail_address);
        $this->assertEquals($created_inquiry->message, $message);
    }

    public function testItCanGetFullName()
    {
        $first_name = 'kenta';
        $last_name  = 'ichikawa';

        $repository = $this->makeInstance();
        $result = $repository->getFullName($first_name, $last_name);

        $this->assertEquals('kenta ichikawa', $result);
    }

    /**
     * @return InquiryRepository
     */
    private function makeInstance()
    {
        $app = new Application();
        return new InquiryRepository($app);
    }
}
