<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{

    public $slug;
    public $title;
    public $excerpt;
    public $date;
    public $body;

    /**
     * @param $title
     * @param $excerpt
     * @param $date
     * @param $body
     * @param $slug
     */
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    /**
     * @return array|string[]
     */
    public static function all()
    {
        $files =  File::files(resource_path("posts"));

        return array_map(function ($file){
            return $file->getContents();
        }, $files);
    }

    /**
     * @param $slug
     * @return mixed
     */
    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new  ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
