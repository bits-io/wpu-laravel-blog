@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection

{{-- App\Models\Post::create([
    'title' => 'Judul Ke Tiga',
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem, ipsum Ke Tiga',
    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime consequuntur, corporis tempore veritatis iusto modi! Omnis labore saepe qui esse doloribus ea quisquam doloremque recusandae ut ad tenetur error quibusdam pariatur porro nesciunt dicta quae vero cupiditate, illo eos nulla incidunt! Officia temporibus aspernatur consequatur, magni adipisci itaque consequuntur facere, fugit ducimus, deleniti rerum quis deserunt facilis reiciendis vel! Nam explicabo tempore quae maxime adipisci voluptates veniam doloribus. Quisquam dignissimos, necessitatibus voluptas officiis perspiciatis beatae! Temporibus molestias praesentium error impedit culpa voluptate quibusdam tempora, magnam similique unde officia cupiditate illo quam sunt, aut deleniti! Cumque vitae veniam reiciendis minus doloremque. Accusamus optio aspernatur alias quasi consequatur ullam ex quas modi nihil, molestias nulla doloremque minima consectetur animi? Voluptas, praesentium!'
]) --}}


