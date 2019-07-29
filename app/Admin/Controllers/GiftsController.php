<?php

namespace App\Admin\Controllers;

use App\Gift;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GiftsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Gift';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Gift);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'));
        $grid->column('category', __('Category'));
        $grid->column('price', __('Price'));
        $grid->column('store_name', __('Store name'));
        $grid->column('store_url', __('Store url'));
        $grid->column('is_available', __('Is available'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Gift::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('category', __('Category'));
        $show->field('price', __('Price'));
        $show->field('store_name', __('Store name'));
        $show->field('store_url', __('Store url'));
        $show->field('is_available', __('Is available'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        
        $form = new Form(new Gift);

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->text('category', __('Category'));
        $form->decimal('price', __('Price'));
        $form->text('store_name', __('Store name'));
        $form->text('store_url', __('Store url'));
        $form->switch('is_available', __('Is available'));

        return $form;
    }
}
