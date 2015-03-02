<?php
namespace Tests\Stubs\CountCache;

use Eloquence\Behaviours\CountCache\CountCache;
use Eloquence\Database\Model;

class Comment extends Model implements CountCache
{
    public function countCaches()
    {
        return [
            'num_comments' => 'Tests\Stubs\CountCache\Post',
            'Tests\Stubs\CountCache\User'
        ];
    }
}
