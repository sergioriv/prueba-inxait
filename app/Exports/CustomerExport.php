<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CustomerExport implements FromArray, ShouldAutoSize, WithStyles, WithEvents, WithColumnFormatting
{

    private $customers;
    private int $customersCount;

    public function __construct(){

        $customers = \App\Models\Customer::with('winner')->get();

        $this->customers = $customers;
        $this->customersCount = $customers->count();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function array(): array
    {
        $content = [
            ["CLIENTES REGISTRADOS"],
            [""],
            ["Nombre", "Apellido", "Cédula", "Departamento", "Ciudad", "Celular", "Correo electrónico", "Habeas data", "GANADOR"]
        ];

        foreach ($this->customers as $customer) {

            $content[] = [
                $customer->name,
                $customer->last_name,
                $customer->document,
                $customer->city->department->name,
                $customer->city->name,
                $customer->phone,
                $customer->email,
                $customer->habeas_data ? 'acapta' : 'no acepta',
                $customer->winner ? 'GANADOR' : null
            ];

        }

        return $content;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => [
                'font' => ['size' => 14, 'bold' => true],
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
            ],
            3    => [
                'font' => ['size' => 10, 'bold' => true],
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
            ]
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->mergeCells('A1:I1');
            }
        ];
    }

    public function columnFormats(): array
    {
        $limit = 4 + $this->customersCount;
        return [
            'C4:C'.$limit => NumberFormat::FORMAT_NUMBER,
            'F4:F'.$limit => NumberFormat::FORMAT_NUMBER,
        ];
    }
}
