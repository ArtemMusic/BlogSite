<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
