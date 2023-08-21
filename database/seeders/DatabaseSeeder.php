<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        // User::factory(5)->create();
        // // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Achmad Fausi M',
            'username' => 'achmadfm',
            'email' => 'achmadfm18@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Dila Faradila',
            'username' => 'dila',
            'email' => 'faradilachmad18@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Framework',
            'slug' => 'web-framework'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'judul' => 'Belajar Laravel',
        //     'slug' => 'belajar-laravel',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat, odio assumenda blanditiis sit tempore error laborum fuga eaque similique ullam vitae nisi dolore laboriosam provident perferendis atque saepe inventore aliquam aliquid ipsam cupiditate placeat praesentium quis. Odit tempore totam consequuntur assumenda vero, commodi quidem facilis sapiente perferendis, omnis aut veniam sequi impedit odio. Possimus eveniet velit quibusdam quasi mollitia minima, quis voluptatum est sapiente reiciendis ipsam molestias vero obcaecati commodi sequi a earum accusantium modi, necessitatibus at error perferendis optio cupiditate? Perferendis maiores quas provident sequi ab officia impedit. Beatae minima rem consectetur itaque accusantium minus autem commodi, illo possimus dignissimos hic pariatur molestias tempore fugiat! Consectetur libero, dolores id vitae perspiciatis vero distinctio eos praesentium fuga autem quasi explicabo cum voluptatem, omnis soluta expedita earum! Sint numquam laudantium quidem, fugiat ex neque, assumenda voluptas perspiciatis fuga, iusto dolor iure velit quasi veniam officiis harum maiores praesentium natus. Facere odit sapiente natus incidunt aspernatur eligendi maxime, officia in, ab voluptate reprehenderit. Repellat facere et necessitatibus inventore alias quibusdam, itaque quia rerum amet nulla autem perferendis quasi omnis ab! Dolores quo possimus eveniet accusamus, natus eaque, voluptatibus rerum in deserunt, doloremque minus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'Belajar Codeigniter',
        //     'slug' => 'belajar-codeigniter',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat, odio assumenda blanditiis sit tempore error laborum fuga eaque similique ullam vitae nisi dolore laboriosam provident perferendis atque saepe inventore aliquam aliquid ipsam cupiditate placeat praesentium quis. Odit tempore totam consequuntur assumenda vero, commodi quidem facilis sapiente perferendis, omnis aut veniam sequi impedit odio. Possimus eveniet velit quibusdam quasi mollitia minima, quis voluptatum est sapiente reiciendis ipsam molestias vero obcaecati commodi sequi a earum accusantium modi, necessitatibus at error perferendis optio cupiditate? Perferendis maiores quas provident sequi ab officia impedit. Beatae minima rem consectetur itaque accusantium minus autem commodi, illo possimus dignissimos hic pariatur molestias tempore fugiat! Consectetur libero, dolores id vitae perspiciatis vero distinctio eos praesentium fuga autem quasi explicabo cum voluptatem, omnis soluta expedita earum! Sint numquam laudantium quidem, fugiat ex neque, assumenda voluptas perspiciatis fuga, iusto dolor iure velit quasi veniam officiis harum maiores praesentium natus. Facere odit sapiente natus incidunt aspernatur eligendi maxime, officia in, ab voluptate reprehenderit. Repellat facere et necessitatibus inventore alias quibusdam, itaque quia rerum amet nulla autem perferendis quasi omnis ab! Dolores quo possimus eveniet accusamus, natus eaque, voluptatibus rerum in deserunt, doloremque minus.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'judul' => 'Kesalahan Masuk Jurusan IT',
        //     'slug' => 'kesalahan-masuk-jurusan-it',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia magni voluptas ipsum et cupiditate rem doloribus! Culpa quaerat, odio assumenda blanditiis sit tempore error laborum fuga eaque similique ullam vitae nisi dolore laboriosam provident perferendis atque saepe inventore aliquam aliquid ipsam cupiditate placeat praesentium quis. Odit tempore totam consequuntur assumenda vero, commodi quidem facilis sapiente perferendis, omnis aut veniam sequi impedit odio. Possimus eveniet velit quibusdam quasi mollitia minima, quis voluptatum est sapiente reiciendis ipsam molestias vero obcaecati commodi sequi a earum accusantium modi, necessitatibus at error perferendis optio cupiditate? Perferendis maiores quas provident sequi ab officia impedit. Beatae minima rem consectetur itaque accusantium minus autem commodi, illo possimus dignissimos hic pariatur molestias tempore fugiat! Consectetur libero, dolores id vitae perspiciatis vero distinctio eos praesentium fuga autem quasi explicabo cum voluptatem, omnis soluta expedita earum! Sint numquam laudantium quidem, fugiat ex neque, assumenda voluptas perspiciatis fuga, iusto dolor iure velit quasi veniam officiis harum maiores praesentium natus. Facere odit sapiente natus incidunt aspernatur eligendi maxime, officia in, ab voluptate reprehenderit. Repellat facere et necessitatibus inventore alias quibusdam, itaque quia rerum amet nulla autem perferendis quasi omnis ab! Dolores quo possimus eveniet accusamus, natus eaque, voluptatibus rerum in deserunt, doloremque minus.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
