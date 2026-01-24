<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationLabel = 'Bookings';

    protected static ?string $pluralModelLabel = 'Bookings';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Booking Details')
                ->schema([
                    Forms\Components\TextInput::make('customer_name')
                        ->label('Full name')
                        ->required(),

                    Forms\Components\TextInput::make('customer_phone')
                        ->label('Phone')
                        ->tel()
                        ->required(),

                    Forms\Components\TextInput::make('customer_email')
                        ->label('Email')
                        ->email()
                        ->nullable(),

                    Forms\Components\DatePicker::make('check_in')
                        ->label('Check In')
                        ->required(),

                    Forms\Components\DatePicker::make('check_out')
                        ->label('Check Out')
                        ->required()
                        ->after('check_in'),

                    Forms\Components\TextInput::make('guest_count')
                        ->label('Guests')
                        ->numeric()
                        ->minValue(1)
                        ->default(1)
                        ->required(),

                    Forms\Components\Textarea::make('customer_notes')
                        ->label('Special requests')
                        ->rows(3)
                        ->columnSpan(2)
                        ->nullable(),

                    Forms\Components\Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'confirmed' => 'Confirmed',
                            'cancelled' => 'Cancelled',
                            'blocked' => 'Blocked',
                        ])
                        ->default('pending')
                        ->required(),

                    Forms\Components\TextInput::make('total_price')
                        ->label('Total Price')
                        ->numeric()
                        ->prefix('₹')
                        ->required(),
                ])
                ->columns(2),

        
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('check_in')
                    ->label('Check In')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('check_out')
                    ->label('Check Out')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('guest_count')
                    ->label('Guests')
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'confirmed',
                        'danger' => 'cancelled',
                        'gray' => 'blocked',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_price')
                    ->label('Total')
                    ->money('INR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('check_in', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
