<?php

namespace App\Filament\Resources\BuyEnquiryResource\Pages;

use App\Filament\Resources\BuyEnquiryResource;
use Filament\Resources\Pages\ListRecords;

class ListBuyEnquiries extends ListRecords
{
    protected static string $resource = BuyEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
