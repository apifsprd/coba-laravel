<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Apif Supriadi',
            'username' => 'User12319',
            'email' => 'apifsupriadi27@gmail.com',
            'password' => bcrypt('test12345')
        ]);

        // User::create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@kngpedia.id',
        //     'password' => bcrypt('test12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        Category::create([
            'name' => 'Opinion',
            'slug' => 'opinion'
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos obcaecati suscipit unde possimus voluptatibus sint maiores, exercitationem minima maxime molestias nam facilis, vero magnam non recusandae illo magni, at veritatis quam asperiores! Maiores ea ad fugiat accusantium atque neque perferendis! In quam maiores rerum nulla, ducimus molestias, vitae quaerat quos eligendi ad ipsam. Harum sint commodi blanditiis ipsa asperiores placeat quam saepe necessitatibus nostrum quos? Nihil, numquam est dignissimos quidem inventore sapiente quam culpa neque dolores libero ad reprehenderit id at non impedit quod ipsa recusandae accusamus maiores rem iste dicta vitae harum autem. Ut eos aut dolorum aliquam alias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos obcaecati suscipit unde possimus voluptatibus sint maiores, exercitationem minima maxime molestias nam facilis, vero magnam non recusandae illo magni, at veritatis quam asperiores! Maiores ea ad fugiat accusantium atque neque perferendis! In quam maiores rerum nulla, ducimus molestias, vitae quaerat quos eligendi ad ipsam. Harum sint commodi blanditiis ipsa asperiores placeat quam saepe necessitatibus nostrum quos? Nihil, numquam est dignissimos quidem inventore sapiente quam culpa neque dolores libero ad reprehenderit id at non impedit quod ipsa recusandae accusamus maiores rem iste dicta vitae harum autem. Ut eos aut dolorum aliquam alias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos obcaecati suscipit unde possimus voluptatibus sint maiores, exercitationem minima maxime molestias nam facilis, vero magnam non recusandae illo magni, at veritatis quam asperiores! Maiores ea ad fugiat accusantium atque neque perferendis! In quam maiores rerum nulla, ducimus molestias, vitae quaerat quos eligendi ad ipsam. Harum sint commodi blanditiis ipsa asperiores placeat quam saepe necessitatibus nostrum quos? Nihil, numquam est dignissimos quidem inventore sapiente quam culpa neque dolores libero ad reprehenderit id at non impedit quod ipsa recusandae accusamus maiores rem iste dicta vitae harum autem. Ut eos aut dolorum aliquam alias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos obcaecati suscipit unde possimus voluptatibus sint maiores, exercitationem minima maxime molestias nam facilis, vero magnam non recusandae illo magni, at veritatis quam asperiores! Maiores ea ad fugiat accusantium atque neque perferendis! In quam maiores rerum nulla, ducimus molestias, vitae quaerat quos eligendi ad ipsam. Harum sint commodi blanditiis ipsa asperiores placeat quam saepe necessitatibus nostrum quos? Nihil, numquam est dignissimos quidem inventore sapiente quam culpa neque dolores libero ad reprehenderit id at non impedit quod ipsa recusandae accusamus maiores rem iste dicta vitae harum autem. Ut eos aut dolorum aliquam alias.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, ipsum natus optio quae doloremque mollitia quos eaque sit laborum corrupti suscipit vitae, fugiat eveniet officiis repudiandae tempore minima eos labore ad ducimus! Reprehenderit, dolores vitae itaque omnis aliquid minima impedit et quod? Placeat, sequi doloremque. Unde amet laborum, ex qui, ipsa quae libero itaque, soluta cupiditate reprehenderit labore! Velit iste iure ad aliquid! Cum adipisci animi culpa libero nesciunt corrupti et accusamus inventore. Molestias eaque beatae vero incidunt, iure, voluptates odit, natus vitae labore iste obcaecati ex ipsa temporibus aspernatur earum ea ducimus facilis neque! Vitae, alias ad repellendus ea nulla consequatur doloremque inventore, earum a expedita accusamus? Atque accusantium sint reiciendis molestias commodi eum! Ipsa eaque inventore, odio quaerat facere similique ad dicta itaque eligendi rerum error, nemo iure vitae architecto! Labore, dolor reprehenderit a recusandae nostrum deserunt, magnam voluptatem ratione quas libero nisi atque, qui totam reiciendis!</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
