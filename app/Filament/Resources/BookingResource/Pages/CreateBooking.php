<?php

namespace App\Filament\Resources\BookingResource\Pages;
use App\Services\BookingService;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBooking extends CreateRecord
{
    protected static string $resource = BookingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    return app(BookingService::class)->prepareBookingData($data);
}

}
