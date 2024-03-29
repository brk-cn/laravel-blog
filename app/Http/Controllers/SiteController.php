<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextWidget;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    public function about(): View
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'about-us-page')
            ->where('active', '=', 1)
            ->first();

        if (!$widget) {
            throw new NotFoundHttpException();
        }

        return view('about-us', compact('widget'));
    }
}