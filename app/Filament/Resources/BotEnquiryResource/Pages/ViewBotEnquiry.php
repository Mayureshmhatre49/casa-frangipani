<?php

namespace App\Filament\Resources\BotEnquiryResource\Pages;

use App\Filament\Resources\BotEnquiryResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ViewBotEnquiry extends ViewRecord
{
    protected static string $resource = BotEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    // ✅ Correct Filament v3 method
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([

            Section::make('Lead Details')
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('phone'),
                    TextEntry::make('email')->placeholder('—'),
                ])
                ->columns(3),

            Section::make('Booking Details')
                ->schema([
                    TextEntry::make('check_in')->date(),
                    TextEntry::make('check_out')->date(),
                    TextEntry::make('guests'),
                    TextEntry::make('budget_range'),
                    TextEntry::make('occasion'),
                ])
                ->columns(3),

            Section::make('Chat Conversation')
                ->schema([
                    // 🚨 IMPORTANT: virtual field, NOT bot_payload directly
                    TextEntry::make('chat_log')
                        ->label('')
                        ->state(function ($record) {
                            if (!is_array($record->bot_payload)) {
                                return 'No conversation available.';
                            }

                            return collect($record->bot_payload)
                                ->map(fn ($msg) =>
                                    strtoupper($msg['role']) . ': ' . $msg['text']
                                )
                                ->implode("\n\n");
                        })
                        ->extraAttributes([
                            'style' => 'white-space: pre-wrap; font-family: monospace;',
                        ]),
                ]),
        ]);
    }
}