<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public $news = array(
        "news 1",
        "news 2",
        "news 3",
        "news 4",
    );


    function index()
    {
        echo "<a href='" . route('news.create') . "'>Add news</h2></br>";
        foreach ($this->news as $k => $new) {

            echo $new . " <a href='" . route('news.edit', ['id' => ++$k]) . "'>edit</a></br>";
        }
    }

    function create()
    {
        return "<h2>Add news</h2> </br> <a href='" . route("news.index") . "'>Home</a>";
    }

    function edit(int $id)
    {
        echo "edit news #$id";
        echo "</br><a href='" . route("news.index") . "'>Home</a>";
    }

    function delete($id)
    {

    }
}
