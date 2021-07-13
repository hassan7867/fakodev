<?php

namespace App\Http\Controllers;

use App\CertificateFiles;
use App\Certificates;
use App\CompanyDestinations;
use App\CompanyOffice;
use App\Subscription;
use App\TourPhotos;
use App\User;
use App\UserCardDetails;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use services\email_messages\ContactForm;
use services\email_messages\ForgotPasswordMessage;
use services\email_messages\InvitationMessageBody;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class AuthController extends Controller
{

    public function sendMessage(Request $request){
        try {
            $subject = new SendEmailService(new EmailSubject($request->name ." contacted you from " . env('APP_NAME')));
            $mailTo = new EmailAddress('me.aliriaz007@gmail.com');
            $invitationMessage = new ContactForm();
            $emailBody = $invitationMessage->invitationMessageBody($request);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf("smtp.gmail.com", "admin@dispatch.com", "secret-2021")));
            $result = $sendEmail->send($emailMessage);
            session()->flash('msg', 'Message Sent Successfully.');
            return redirect()->back();

        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }


    }
}
