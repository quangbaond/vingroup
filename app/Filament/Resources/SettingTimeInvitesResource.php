<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingTimeInvitesResource\Pages;
use App\Filament\Resources\SettingTimeInvitesResource\RelationManagers;
use App\Models\SettingTimeInvite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingTimeInvitesResource extends Resource
{
    protected static ?string $model = SettingTimeInvite::class;

    protected static ?string $label = 'Thời gian đầu tư';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TimePicker::make('start_time')
                    ->label('Thời gian bắt đầu')
                    ->required()
                    ->format('Y-m-d H:i:s'),
                Forms\Components\TimePicker::make('end_time')
                    ->label('Thời gian kết thúc')
                    ->required()
                    ->format('Y-m-d H:i:s'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Thời gian bắt đầu'),
                Tables\Columns\TextColumn::make('end_time')
                    ->label('Thời gian kết thúc'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettingTimeInvites::route('/'),
            'create' => Pages\CreateSettingTimeInvites::route('/create'),
            'edit' => Pages\EditSettingTimeInvites::route('/{record}/edit'),
        ];
    }
}
