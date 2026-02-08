<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BotEnquiryResource\Pages;
use App\Models\BotEnquiry;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;

class BotEnquiryResource extends Resource
{
    protected static ?string $model = BotEnquiry::class;

    protected static ?string $navigationLabel = 'Chatbot Enquiries';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Leads';

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),

                Tables\Columns\TextColumn::make('budget_range')
                    ->label('Budget'),

                Tables\Columns\TextColumn::make('guests')
                    ->label('Guests'),

                Tables\Columns\TextColumn::make('occasion'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('occasion')
                    ->options([
                        'Family vacation' => 'Family vacation',
                        'Friends getaway' => 'Friends getaway',
                        'Celebration' => 'Celebration',
                        'Corporate stay' => 'Corporate stay',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBotEnquiries::route('/'),
            'view' => Pages\ViewBotEnquiry::route('/{record}'),
        ];
    }
}
