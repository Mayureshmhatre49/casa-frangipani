<?php

namespace App\Filament\Resources\BookingResource\Pages;
use App\Services\BookingService;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBooking extends EditRecord
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
{
    return app(BookingService::class)
        ->prepareBookingData($data, $this->record->id);
}
}
