<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TableController extends Controller
{
    public function table()
    {
        Schema::create('Products1', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('quantity');
            $table->date('date');
            $table->timestamp();
        });
        Schema::create('Products2', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('quantity');
            $table->date('date');
            $table->timestamp();
        });
        echo 'đã tạo bảng';
    }
}
