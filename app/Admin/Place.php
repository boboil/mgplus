<?php

use\App\Models\Place;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

AdminSection::registerModel( Place::class, function ( ModelConfiguration $model )
{
    $model->setTitle('Рекламные места');
    $model->onDisplay( function ()
    {

        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute( 'class', 'table-primary table-hover' );
        $display->setColumnFilters([
            null,
            AdminColumnFilter::text('title_ru')->setPlaceholder('Название'),
        ]);
        $display->setColumns(
            AdminColumn::text( 'id' )->setLabel( 'ID' )->setWidth( '10px' )->setHtmlAttribute( 'class', 'text-right' ),
            AdminColumn::link( 'title_ru' )->setLabel( 'Название' ) ->setWidth( '100px' )
        )->paginate( 25 );
        return $display;
    } );
    $model->onCreateAndEdit( function ( $id = null )
    {
        $display = AdminDisplay::tabbed();
        $display->setTabs(function() use ($id) {
            $tabs = [];
            $form = AdminForm::panel();
            $form->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_ru', 'Название'),
                ], 3)
                ->addColumn([
                    AdminFormElement::select('area_id', 'Рекламные зоны', \App\Models\Area::class)->setDisplay('title_ru'),
                ], 3)
                ->addColumn([
                    AdminFormElement::select('floor_id', 'Этаж', \App\Models\Floor::class)->setDisplay(function($element) {
                        return \App\Models\Malls::find($element->malls_id)->title_ru .' > '.htmlspecialchars_decode($element->title_ru);
                    }),
                ], 3)
                ->addColumn([
                    AdminFormElement::select('mall_id', 'Молл', \App\Models\Malls::class)->setDisplay('title_ru'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('text_ru', 'Описание'),
                ], 12)
                ->addColumn([
                    AdminFormElement::images('images', 'Слайды')->storeAsJson(),
                ], 12)
                ->addColumn([
                    AdminFormElement::number('price_1', 'цена за 1 день'),
                ], 3)
                ->addColumn([
                    AdminFormElement::number('price_10', 'цена за 10 день'),
                ], 3)
                ->addColumn([
                    AdminFormElement::number('price_15', 'цена за 15 день'),
                ], 3)
                ->addColumn([
                    AdminFormElement::number('price_21', 'цена за 21 день'),
                ], 3)
                ->addColumn([
                    AdminFormElement::date('availability', 'Доступность'),
                ], 6)


            );
            $form1 =  AdminForm::panel();
            $form1->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_az', 'Название'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('text_az', 'Описание'),
                ],12)
            );
            $form2 =  AdminForm::panel();
            $form2->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_en', 'Название'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('text_en', 'Описание'),
                ],12)
            );
            $tabs[] = AdminDisplay::tab($form, 'Русский')->setActive(true)->setIcon('<i class="fa fa-language"></i>');
            $tabs[] = AdminDisplay::tab($form1, 'Azərbaycan')->setActive(false)->setIcon('<i class="fa fa-language"></i>');
            $tabs[] = AdminDisplay::tab($form2, 'English')->setActive(false)->setIcon('<i class="fa fa-language"></i>');
            return $tabs;
        });
        return $display;
    } );
} );