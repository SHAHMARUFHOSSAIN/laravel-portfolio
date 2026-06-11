<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('markAllRead')
                ->label('Mark All as Read')
                ->action(fn () => Contact::query()->update(['is_read' => true]))
                ->color('success'),
        ];
    }
}
