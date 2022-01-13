<?php

namespace App\Console\Commands;

use App\Models\Ido;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class statusCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update status';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = Carbon::now()->toDateString();
        $transaction = Transaction::selectRaw('sum(amountLST) as total_lst, ido_id')->groupBy('ido_id')->get();
        // $date_format = date_format($date_create, 'Y-m-d');
        foreach ($transaction as $i) {
            if ($i->ido_id == 1 && $i->total_lst == 85713000) {
                Ido::find($i->ido_id)->update(['status' => 'Close']);
            } elseif ($i->ido_id == 2 && $i->total_lst == 113635000) {
                Ido::find($i->ido_id)->update(['status' => 'Close']);
            } elseif ($i->ido_id == 3 && $i->total_lst == 90910000) {
                Ido::find($i->ido_id)->update(['status' => 'Close']);
            }
        }
        Ido::where('closeAt', $date)->update(['status' => 'Close']);
        Ido::where('openAt', $date)->update(['status' => 'On Going']);
        $this->info('Cron is working!');
    }
}
