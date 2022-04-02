<?php

use\App\Models\Team;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

AdminSection::registerModel( Team::class, function ( ModelConfiguration $model )
{
    $model->setTitle( 'Команда' );
    $model->onDisplay( function ()
    {

        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute( 'class', 'table-primary table-hover' );
        $display->setColumns(
            AdminColumn::link( 'id' )->setLabel( 'ID' )->setWidth( '10px' )->setHtmlAttribute( 'class', 'text-right' ),
            AdminColumn::link( 'name_ru' )->setLabel( 'Имя' ) ->setWidth( '100px' ),
            AdminColumn::image( 'image' )->setLabel( 'Фото' ) ->setWidth( '100px' )
        )->paginate( 10 );
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
                    AdminFormElement::text('name_ru', 'Имя'),
                ], 3)
                ->addColumn([
                    AdminFormElement::text('position_ru', 'Должность'),
                ], 3)
                ->addColumn([
                    AdminFormElement::image('image', 'Фото'),
                ], 12)
               

            );
            $form1 =  AdminForm::panel();
            $form1->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('name_az', 'Имя'),
                ], 3)
                ->addColumn([
                    AdminFormElement::text('position_az', 'Должность'),
                ], 3)
            );
            $form2 =  AdminForm::panel();
            $form2->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('name_en', 'Имя'),
                ], 3)
                ->addColumn([
                    AdminFormElement::text('position_en', 'Должность'),
                ], 3)
            );
            $tabs[] = AdminDisplay::tab($form, 'Русский')->setActive(true)->setIcon('<i class="fa fa-language"></i>');
            $tabs[] = AdminDisplay::tab($form1, 'Azərbaycan')->setActive(false)->setIcon('<i class="fa fa-language"></i>');
            $tabs[] = AdminDisplay::tab($form2, 'English')->setActive(false)->setIcon('<i class="fa fa-language"></i>');
            return $tabs;
        });
        return $display;
    } );
} );