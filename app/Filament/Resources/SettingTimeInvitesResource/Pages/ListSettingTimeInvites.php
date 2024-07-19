<?php

namespace App\Filament\Resources\SettingTimeInvitesResource\Pages;

use App\Filament\Resources\SettingTimeInvitesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSettingTimeInvites extends ListRecords
{
    protected static string $resource = SettingTimeInvitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
