<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Maatwebsite\Excel\Excel;
use pxlrbt\FilamentExcel\Columns\Column;




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
            Tables\Columns\TextColumn::make('check_in')->date()->sortable(),
            Tables\Columns\TextColumn::make('check_out')->date()->sortable(),
            Tables\Columns\TextColumn::make('guest_count')->sortable(),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'warning' => 'pending',
                    'success' => 'confirmed',
                    'danger' => 'cancelled',
                    'gray' => 'blocked',
                ]),
            Tables\Columns\TextColumn::make('total_price')->money('INR'),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])
        ->headerActions([
    ExportAction::make()
    ->label('Export All Data')
    ->exports([
        ExcelExport::make('bookings_excel')
            ->withColumns([
                Column::make('id')->heading('ID'),
                Column::make('customer_name')->heading('Customer Name'),
                Column::make('customer_phone')->heading('Phone'),
                Column::make('customer_email')->heading('Email'),
                Column::make('check_in')->heading('Check In'),
                Column::make('check_out')->heading('Check Out'),
                Column::make('guest_count')->heading('Guests'),
                Column::make('customer_notes')->heading('Special Requests'),
                Column::make('status')->heading('Status'),
                Column::make('total_price')->heading('Total Price'),
                Column::make('created_at')->heading('Created At'),
                Column::make('updated_at')->heading('Updated At'),
            ]),
    ]),

])

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
