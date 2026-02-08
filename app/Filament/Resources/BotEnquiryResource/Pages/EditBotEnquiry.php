<?php

namespace App\Filament\Resources\BotEnquiryResource\Pages;

use App\Filament\Resources\BotEnquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBotEnquiry extends EditRecord
{
    protected static string $resource = BotEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
