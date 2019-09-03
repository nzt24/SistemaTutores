<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class ImportarAlumnos implements ToCollection
{
   use Importable;
    /**

    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach ($collection as $row) {
      //   echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."<br>";

        }

          }
}
