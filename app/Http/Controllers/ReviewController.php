<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get(); // Получение отзывов, начиная с самых новых

        return view('reviews.index', compact('reviews'));
    }
}
