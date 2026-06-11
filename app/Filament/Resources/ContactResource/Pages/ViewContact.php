<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Contact;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('markAsRead')
                ->label('Mark as Read')
                ->action(fn () => $this->record->update(['is_read' => true]))
                ->visible(fn () => !$this->record->is_read),
            Actions\DeleteAction::make(),
        ];
    }
}
