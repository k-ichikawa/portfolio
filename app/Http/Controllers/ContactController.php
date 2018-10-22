<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Mail\ContactNotification;
use App\Repositories\InquiryRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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

        DB::beginTransaction();
        try {
            $this->inquiryRepository->create($input);
            DB::commit();

            Mail::to(env('MAIL_TO_ADDRESS'))
                ->send(new ContactNotification($input));

            return json_encode(['result' => true]);
        } catch (\PDOException $e) {
            DB::rollBack();
            Log::error($e . 'ContactController@sendMessage cannot send mail. Please check inquiries table');
            return json_encode(['result' => false]);
        }
    }
}
