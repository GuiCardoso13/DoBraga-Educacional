<?php

namespace App\Exports;

use App\Models\FormData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

class FormDataExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithEvents
{
    /**
     * Return the collection of rows to export
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return FormData::orderBy('created_at', 'desc')->get();
    }

    /**
     * Map a single model to an array for each row
     */
    public function map($form): array
    {
        return [
            $form->id,
            $form->name,
            $form->email,
            $form->gender,
            $form->age,
            $form->interest,
            $form->phone,
            $form->address,
            $form->resp_name ?? '',
            $form->resp_phone ?? '',
            $form->created_at ? $form->created_at->format('d/m/Y H:i') : '',
        ];
    }

    /**
     * Headings for the exported sheet
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nome',
            'Email',
            'Gênero',
            'Idade',
            'Interesse',
            'Telefone',
            'Endereço',
            'Nome Responsável',
            'Telefone Responsável',
            'Data de Envio',
        ];
    }

    /**
     * Register events to style the sheet (header style etc.)
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                $sheet->getStyle('A1:K1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '2F4F4F'],
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'DDDDDD'],
                        ],
                    ],
                ]);

                $sheet->freezePane('A2');

                $sheet->getStyle('A1:K1')->getAlignment()->setHorizontal('center');
            },
        ];
    }
}
