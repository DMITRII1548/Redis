<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class RedisTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    //     $post = Post::find(1);

        Redis::lpush('posts', 'post1', 'post2');

        // $post = json_decode(Redis::get('posts:1'));
        // $post = Post::make((array) $post);
        dd(Redis::lrange('posts', 0, -1));
    }
}
