<?php namespace dlcrush\Form;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class FormServiceProvider extends ServiceProvider {

    public function register() {}

    public function boot()
    {
        $this->package('dlcrush/form');

        AliasLoader::getInstance()->alias('FormField', 'dlcrush\Form\FormField');
    }
}
