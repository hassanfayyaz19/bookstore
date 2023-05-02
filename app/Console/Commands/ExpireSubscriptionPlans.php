<?php

namespace App\Console\Commands;

use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ExpireSubscriptionPlans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscriptions:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $subscriptions = UserSubscription::with(['user'])->where('status', 1)
            ->where('end_date', '<', Carbon::now())
            ->get();

        foreach ($subscriptions as $subscription) {
            $subscription->update(['status' => 0]);
            $subscription->user->clearSubscriptionDiscountCache();
        }
        Log::debug("Command run successfully");
        $this->info('Expired subscriptions updated successfully.');
    }
}
