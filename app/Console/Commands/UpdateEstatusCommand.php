<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\resultados_loterias;
use Carbon\Carbon;

class UpdateEstatusCommand extends Command
{
    protected $signature = 'estatus:update';
    protected $description = 'Actualiza el campo "estatus" a "enabled" a la media noche';

    public function handle()
    {
        date_default_timezone_set("America/Santo_Domingo");

        $nuevoEstatus = 'enabled';

        resultados_loterias::query()->update(['estatus' => $nuevoEstatus]);
    }
}
