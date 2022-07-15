<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $company = Company::findOrFail($request->get('company_id'));
        $email = $company['email_address'] ?: 'info@'.$company['website'];

        Mail::send('emails.message', ['channel' => request('channel'), 'company' => $company, 'email' => request('email'), 'content' => request('message')], function ($m) use ($email, $company) {
            $m->from('info@contactdesk.nl', 'Contactdesk');
            $m->to($email);
            $m->subject('Iemand probeert je bedrijf te bereiken via '.ucfirst(request('channel')));
        });
    }

}
