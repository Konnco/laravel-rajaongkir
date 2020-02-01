<?php

namespace Konnco\Onimage\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Konnco\Onimage\Tests\models\Fruit;

class RajaongkirTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    // public function testUpload(): void
    // {
    //     $fruit = new Fruit();
    //     $fruit->name = 'banana';
    //     $fruit->cover = 'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80';
    //     $fruit->galleries = [
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //     ];
    //     $fruit->save();

    //     static::assertEquals(4, $fruit->onimagetable()->where('attribute', 'galleries')->count());

    //     // checking with find
    //     $fruit = Fruit::find(1);

    //     static::assertEquals(2, count($fruit->onimage('galleries')));
    //     static::assertEquals(2, count($fruit->onimage('galleries', 'square')));

    //     // test update
    //     $fruit = Fruit::find(1);
    //     $fruit->name = 'ohayo sekai';
    //     $fruit->cover = 'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80';
    //     $fruit->galleries = [
    //         2,
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //     ];
    //     $fruit->save();

    //     static::assertEquals(3, count($fruit->onimage('galleries')));
    //     static::assertEquals(3, count($fruit->onimage('galleries', 'square')));
    // }

    /** @test */
    // public function testDelete(): void
    // {
    //     $fruit = new Fruit();
    //     $fruit->name = 'banana';
    //     $fruit->cover = 'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80';
    //     $fruit->galleries = [
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //     ];
    //     $fruit->save();

    //     static::assertEquals(4, $fruit->onimagetable()->where('attribute', 'galleries')->count());

    //     $fruit = Fruit::find(1);
    //     // $fruit->name = 'ohayo sekai';
    //     $fruit->cover = 'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80';
    //     $fruit->galleries = [];
    //     $fruit->save();

    //     static::assertEquals(0, count($fruit->onimage('galleries')));
    // }

    /** @test */
    // public function testGet(): void
    // {
    //     $fruit = new Fruit();
    //     $fruit->name = 'banana';
    //     $fruit->cover = 'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80';
    //     $fruit->galleries = [
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //         'https://images.unsplash.com/photo-1562887250-9a52d844ad30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2089&q=80',
    //     ];
    //     $fruit->save();

    //     static::assertEquals(4, $fruit->onimagetable()->where('attribute', 'galleries')->count());

    //     $fruit = Fruit::find(1);

    //     static::assertEquals(2, count($fruit->onimage('galleries')));
    // }
}
