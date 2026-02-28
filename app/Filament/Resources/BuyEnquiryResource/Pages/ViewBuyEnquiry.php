<?php

namespace App\Filament\Resources\BuyEnquiryResource\Pages;

use App\Filament\Resources\BuyEnquiryResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ViewBuyEnquiry extends ViewRecord
{
    protected static string $resource = BuyEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([

            Section::make('Contact Details')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('phone'),
                    TextEntry::make('email')->placeholder('—'),
                ])
                ->columns(3),

            Section::make('Enquiry Details')
                ->schema([
                    TextEntry::make('preferred_date')
                        ->label('Preferred Visit Date')
                        ->dateTime('d M Y, h:i A')
                        ->placeholder('Not specified'),
                    TextEntry::make('status')
                        ->badge()
                        ->color(fn (string $state): string => match ($state) {
                            'new'       => 'warning',
                            'contacted' => 'success',
                            'closed'    => 'danger',
                            default     => 'gray',
                        }),
                    TextEntry::make('created_at')
                        ->label('Received')
                        ->dateTime('d M Y, h:i A'),
                ])
                ->columns(3),

            Section::make('Message')
                ->schema([
                    TextEntry::make('message')
                        ->placeholder('No message provided.')
                        ->columnSpanFull(),
                ]),
        ]);
    }
}
