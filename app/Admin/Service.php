<?php

use\App\Models\Service;
use SleepingOwl\Admin\Model\ModelConfiguration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use KodiCMS\Assets\Meta;


AdminSection::registerModel( Service::class, function ( ModelConfiguration $model )
{

    $model->setTitle( 'Сервисы' );
    $model->onDisplay( function ()
    {

        $display = AdminDisplay::datatablesAsync()->setHtmlAttribute( 'class', 'table-primary table-hover' );
        $display->setColumnFilters([
            null,
            AdminColumnFilter::text('title_ru')->setPlaceholder('Заголовок'),
        ]);
        $display->setColumns(
            AdminColumn::text( 'id' )->setLabel( 'ID' )->setWidth( '10px' )->setHtmlAttribute( 'class', 'text-right' ),
            AdminColumn::link( 'title_ru' )->setLabel( 'Заголовок' ) ->setWidth( '100px' )
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
                    AdminFormElement::text('title_ru', 'Заголовок'),
                    AdminFormElement::custom()->setCallback(function($instance) {
                        $request = \Request::all();
                        $instance['slug'] = Str::slug($request['title_ru']);
                    }),
                ], 6)
                ->addColumn([
                    AdminFormElement::images('image', 'Главная картинка')->storeAsJson(),
                ], 6)
                ->addColumn([
                    AdminFormElement::images('images', 'Картинки')->storeAsJson(),
                ], 12)
                ->addColumn([
                    AdminFormElement::ckeditor('text_ru', 'Описание'),
                ], 12)
            );
            $form1 =  AdminForm::panel();
            $form1->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_az', 'Заголовок'),
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('text_az', 'Описание'),
                ],12)
            );
            $form2 =  AdminForm::panel();
            $form2->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_en', 'Заголовок'),
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