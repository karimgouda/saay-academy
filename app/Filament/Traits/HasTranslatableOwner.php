<?php

namespace App\Filament\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasTranslatableOwner
{
    public $activeFormLocale = null;

    public function __construct() {
        $this->listeners['activeFormLocaleUpdated'] = 'setActiveFormLocale';
    }

    public function setActiveFormLocale($value = null): void {
        if(is_null($value)) $value = $this->ownerRecord->getLocale();
        $this->activeFormLocale = $value;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if ($this->activeFormLocale === null) {
            $this->setActiveFormLocale();
        }

        foreach ($this->getMountedTableActionRecord()->getTranslatableAttributes() as $attribute) {
            $data[$attribute] = $this->getMountedTableActionRecord()->getTranslation($attribute, $this->activeFormLocale);
        }

        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->setLocale($this->activeFormLocale)->fill($data)->save();

        return $record;
    }

    protected function handleRecordCreation(array $data): Model
    {
        if ($this->activeFormLocale === null) {
            $this->setActiveFormLocale();
        }

        $record = $this->getRelatedModel()::getModel()::usingLocale(
            $this->activeFormLocale
        )->fill($data);

        $this->ownerRecord->{$this->getRelationshipName()}()->save($record);

        return $record;
    }
}