<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactSendController extends Controller
{
    public function __invoke(ContactFormRequest $request): JsonResponse
    {
        $data = $request->validated();

        try {
            Mail::to('ewoodplay@gmail.com')->send(new ContactFormMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Ваше повідомлення успішно надіслано!'
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'false',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
