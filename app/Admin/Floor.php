<?php

use\App\Models\Floor;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

AdminSection::registerModel( Floor::class, function ( ModelConfiguration $model )
{
    $model->setTitle('Этажи');
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
                    AdminFormElement::multiselect('areas', 'Рекламные зоны', \App\Models\Area::class)->setDisplay('title_ru'),
                ], 6)
                ->addColumn([
                    AdminFormElement::select('malls_id', 'Молл', \App\Models\Malls::class)->setDisplay('title_ru'),
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