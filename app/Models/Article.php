<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Article extends Model implements Feedable
{
    protected $fillable = ['title', 'slug', 'content'];

    public function toFeedItem()
    {
        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->title,
            'link' => route('article.show', $this->id),
            'summary' => $this->content,
            'author' => 'IvideoSmart',
            'created_at' => $this->created_at,
            'updated' => $this->updated_at,
        ]);
    }

    public static function getFeedItems()
    {
        return Article::all();
    }
}
