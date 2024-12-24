<?php

namespace App\Filament\Resources\ClassesResource\Pages;

use App\Filament\Resources\ClassesResource;
use Filament\Resources\Pages\Page;

class classStudent extends Page
{
    protected static string $resource = ClassesResource::class;

    protected static string $view = 'filament.resources.classes-resource.pages.class-student';
}
