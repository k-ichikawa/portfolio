<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Mail\ContactNotification;
use App\Repositories\InquiryRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    /** @var InquiryRepository  */
    protected $inquiryRepository;

    public function __construct(InquiryRepository $inquiryRepository)
    {
        $this->inquiryRepository = $inquiryRepository;
    }

    public function sendMessage(SendMessageRequest $request)
    {
        $input = [
            'name'          => $request->get('name'),
            'mail_address'  => $request->get('mail_address'),
            'message'       => $request->get('message')
        ];

        $this->inquiryRepository->create($input);

        Mail::to('chottokeinkana@gmail.com')
            ->send(new ContactNotification($input));

        return json_encode(['result' => true]);
    }
}
