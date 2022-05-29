<?php

namespace App\Exports;

use App\Models\RespondentIdentitiy;
use Maatwebsite\Excel\Concerns\FromCollection;

class RespondentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RespondentIdentitiy::select('name','email')->get();
    }
}
