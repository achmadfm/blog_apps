<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Achmad Fausi M",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolorum dicta placeat repudiandae labore nam ut
            suscipit dolore id quia fuga ea nobis voluptate modi, a nihil neque, ipsum nesciunt amet autem quidem? Necessitatibus ut
            quisquam recusandae, maxime, repellat, nulla repellendus dolorem praesentium corrupti est adipisci harum exercitationem!
            Ullam perspiciatis ipsa vero ratione nulla nam laborum reiciendis praesentium in molestias harum, nemo error tenetur
            ipsam delectus iure reprehenderit quidem ea incidunt tempore rem? Consectetur placeat fuga dolore sequi fugit aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Faradila Sandi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum officia possimus repellat cum delectus nam, eligendi
            libero ipsam molestias ullam animi sunt numquam vero? Dignissimos, alias labore. Quod ex sunt magni exercitationem fugit
            sequi nesciunt necessitatibus laborum, neque excepturi dignissimos, quidem eaque totam nulla amet est! Odio commodi
            mollitia adipisci at possimus! Provident iusto quod molestiae, minus culpa voluptatibus voluptate, exercitationem
            accusantium unde sit nam, numquam magni quia laudantium? Minima exercitationem modi explicabo sequi deleniti vero fugiat
            ex, corrupti sunt repellendus obcaecati vitae quos facere nobis laboriosam saepe doloremque velit ab, reprehenderit
            sapiente voluptas earum rem distinctio? Officiis, aliquam et."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
