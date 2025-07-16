<?php

namespace App\Filament\Admin\Resources\CheckoutQueueResource\Pages;

use App\Filament\Admin\Resources\CheckoutQueueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCheckoutQueue extends EditRecord
{
    protected static string $resource = CheckoutQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
