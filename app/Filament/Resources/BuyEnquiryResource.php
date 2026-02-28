<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuyEnquiryResource\Pages;
use App\Models\BuyEnquiry;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;

class BuyEnquiryResource extends Resource
{
    protected static ?string $model = BuyEnquiry::class;

    protected static ?string $navigationLabel = 'Buy Enquiries';
    protected static ?string $navigationIcon  = 'heroicon-o-home-modern';
    protected static ?string $navigationGroup = 'Leads';
    protected static ?int    $navigationSort  = 2;

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

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->placeholder('—'),

                Tables\Columns\TextColumn::make('preferred_date')
                    ->label('Preferred Visit')
                    ->dateTime('d M Y, h:i A')
                    ->placeholder('Not specified')
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'new',
                        'success' => 'contacted',
                        'danger'  => 'closed',
                    ]),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'new'       => 'New',
                        'contacted' => 'Contacted',
                        'closed'    => 'Closed',
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
            'index' => Pages\ListBuyEnquiries::route('/'),
            'view'  => Pages\ViewBuyEnquiry::route('/{record}'),
        ];
    }
}
