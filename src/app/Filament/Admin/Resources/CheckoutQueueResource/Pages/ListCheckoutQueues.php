<?php

namespace App\Filament\Admin\Resources\CheckoutQueueResource\Pages;

use App\Filament\Admin\Resources\CheckoutQueueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCheckoutQueues extends ListRecords
{
    protected static string $resource = CheckoutQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
