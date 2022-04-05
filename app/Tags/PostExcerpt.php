<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Illuminate\Support\Str;
use Statamic\Entries\Entry;

class PostExcerpt extends Tags
{
    /**
     *
     * We need to go this route because "view_model" does not work in collection loops.
     * It's an ugly solution, but it does the job for now.
     * 
     */
    public function index(): string
    {
        $entry = Entry::find($this->params->get(['id']));

        $datasets = collect($entry->data()->get('content'))->where('type', 'paragraph');

        $content_excerpt = '';

        foreach ($datasets as $dataset) {
            if (! array_key_exists('text', $dataset['content'][0])) {
                continue;
            }
            
            $content_excerpt .= $dataset['content'][0]['text'] . ' ';
        }

        return Str::of($content_excerpt)->limit(280, '...');
    }
}
