<?php

namespace App\Models;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    public $title, $excerpt, $date, $body, $link;

    function __construct(
        $title,
        $excerpt,
        $date,
        $body,
        $link
    ) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->link = $link;
    }

    public static function getAll()
    {
        //get all file in the posts directory

        return cache()->rememberForever('post.all', function () {

            $files = File::files(resource_path("/posts/"));

            return collect($files)->map(function ($file) {
                $documents = YamlFrontMatter::parseFile($file);

                return new Post(
                    $documents->title,
                    $documents->excerpt,
                    $documents->date,
                    $documents->body(),
                    $documents->link
                );
            })->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
        //find the one slug that requested

        $post = static::getAll();

        return $post->firstWhere('link', $slug);
    }

    function findOrFail($slug)
    {
        //find the one slug that requested

        $post = static::find($slug);

        //if the route does not exist, it will throw this error
        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }
}