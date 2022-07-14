<?php

namespace App\Listeners;

use App\Models\Company;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AutoClaimOnVerify
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $domain = explode('@', $event->user->email)[1];

        Company::query()
            ->where('website', $domain)
            ->whereNull('user_id')
            ->update(['user_id' => $event->user->id]);
    }
}
