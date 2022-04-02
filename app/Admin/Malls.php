<?php

use\App\Models\Malls;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

AdminSection::registerModel( Malls::class, function ( ModelConfiguration $model )
{
    $model->setTitle('Молы');
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
                    AdminFormElement::custom()->setCallback(function($instance) {
                        $request = \Request::all();
                        $instance['slug'] = Str::slug($request['title_ru']);
                    }),
                ], 3)
                ->addColumn([
                    AdminFormElement::image('image', 'Картинка фона'),
                ], 3)
                ->addColumn([
                    AdminFormElement::image('logo', 'Лого'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('short_text_ru', 'Короткое описание для главной'),
                ], 12)
                ->addColumn([
                    AdminFormElement::ckeditor('text_ru', 'Описание'),
                ], 12)
                ->addColumn([
                    AdminFormElement::images('images', 'Картинки в слайдер')->storeAsJson(),
                ], 12)

            );
            $form1 =  AdminForm::panel();
            $form1->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_az', 'Название'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('short_text_az', 'Короткое описание для главной'),
                ], 12)
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
                    AdminFormElement::ckeditor('short_text_en', 'Короткое описание для главной'),
                ], 12)
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