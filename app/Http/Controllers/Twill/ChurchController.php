<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;

class ChurchController extends BaseModuleController
{
    protected $moduleName = 'churches';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void {}

    protected function getIndexTableColumns(): TableColumns
    {
        $table = parent::getIndexTableColumns();

        $after = $table->splice(2);
        $table->add(
            Text::make()->field('location')->sortable()
        );

        return $table->merge($after);
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()
                ->name('location')
                ->required()
                ->maxLength('50')
        );

        $form->add(
            Input::make()
                ->name('email')
                ->label('Email contact')
                ->type('email')
                ->maxLength('255')
        );

        $form->add(
            Input::make()
                ->name('url')
                ->label('Church website')
                ->type('url')
                ->maxLength('2000')
        );

        $form->add(
            Input::make()
                ->name('address')
                ->required()
                ->label('Church address')
                ->type('text')
                ->maxLength('500')
                ->note('For Sunday services')
        );

        $form->add(
            Input::make()
                ->name('office_address')
                ->label('Office address')
                ->type('text')
                ->maxLength('500')
        );

        $form->add(
            Wysiwyg::make()
                ->name('description')
                ->toolbarOptions([
                    ['header' => [2, 3, false]],
                    'bold',
                    'italic',
                    'underline',
                    'blockquote',
                    'ordered',
                    'bullet',
                    'hr',
                    'link',
                    'clean',
                    'align',
                ]
                )
                ->maxLength('5000')
                ->options(['height' => 4600])
        );

        $form->add(
            Input::make()
                ->name('map_link')
                ->label('Map embed code')
                ->type('textarea')
                ->maxLength('2000')
                ->note('Generate from Google Maps via Share > Embed a map')
        );

        $form->add(
            Medias::make()
                ->name('cover')
                ->label('Cover image')
        );

        return $form;
    }
}
