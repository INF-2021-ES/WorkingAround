<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    static public function sendEmail(Service $service, $name, $email, $workerName)
    {
        $details = [
            'title' => 'Working Around job accepted',
            'service' => $service,
            'clientName' => $name,
            'clientEmail' => $email,
            'workerName' => $workerName
        ];

        Mail::to($email)->send(new TestMail($details));
    }
}
