<?php

namespace App\Imports;

use App\Models\denah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswasImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $index => $row) {

       denah::create([
        'nama' => $row['nama'],
        'prodi' => $row['prodi'],
        'namadua' => $row['namadua'],
        'prodidua' => $row['prodidua'],
        'meja' => $row['meja'],
        ]);
    }
}
}
