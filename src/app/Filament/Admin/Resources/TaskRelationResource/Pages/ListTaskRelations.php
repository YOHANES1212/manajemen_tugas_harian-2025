<?php

namespace App\Filament\Admin\Resources\TaskRelationResource\Pages;

use App\Filament\Admin\Resources\TaskRelationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaskRelations extends ListRecords
{
    protected static string $resource = TaskRelationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
