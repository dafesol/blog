<?php

namespace App\Console\Commands;

use App\Post;
use App\User;
use Illuminate\Console\Command;
use App\Helpers\ImportJSON;

class readPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'read:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to read JSON';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $json = new ImportJSON();
        $posts = $json->readJSON();
        $user = User::select('id')->where('name','admin')->first();

        foreach ($posts->data as $post) {

            Post::create([
                'title' => $post->title,
                'description' => $post->description,
                'publication_date' => $post->publication_date,
                'user_id' => $user->id
            ]);
        }
    }
}
