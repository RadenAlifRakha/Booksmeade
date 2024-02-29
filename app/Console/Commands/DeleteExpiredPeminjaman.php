<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Peminjaman;
use Carbon\Carbon;

class DeleteExpiredPeminjaman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'peminjaman:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired peminjaman after seven days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $peminjaman = Peminjaman::where('tgl_pengembalian', '<', Carbon::now()->subDays(7))->get();

        foreach ($peminjaman as $peminjaman) {
            $peminjaman->delete();
        }

        $this->info('Expired peminjaman have been deleted.');
    }
}
