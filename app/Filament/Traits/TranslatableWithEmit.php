<?php

namespace App\Filament\Traits;

trait TranslatableWithEmit
{
    use \Filament\Resources\Pages\EditRecord\Concerns\Translatable{
        updatedActiveFormLocale as parentUpdatedActiveFormLocale;
        setActiveFormLocale as parentSetActiveFormLocale;
    }

    public function __construct() {
        //keep active locale if browser refresh
        $this->queryString[] = 'activeFormLocale';
        
        parent::__construct();
    }

    public function setActiveFormLocale() {
        $this->parentSetActiveFormLocale();
    }

    protected function updatedActiveFormLocale($value): void
    {
        $this->emit('activeFormLocaleUpdated', $value);
        
        $this->parentUpdatedActiveFormLocale();
    }
}