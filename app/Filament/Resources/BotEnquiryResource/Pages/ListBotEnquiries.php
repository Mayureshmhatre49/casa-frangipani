<?php

namespace App\Filament\Resources\BotEnquiryResource\Pages;

use App\Filament\Resources\BotEnquiryResource;
use Filament\Resources\Pages\ListRecords;

class ListBotEnquiries extends ListRecords
{
    protected static string $resource = BotEnquiryResource::class;

    // ❌ No Create button for chatbot leads
    protected function getHeaderActions(): array
    {
        return [];
    }
}
