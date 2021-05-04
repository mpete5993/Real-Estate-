<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = Post::create([
            'Title' => 'Appartment Example 1',
            'slug' => 'Appartment-Example-1',
            'category_id' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-1.jpg',
            'published' => true,
            'user_id' => '1'
        ]);
        $post = Post::create([
            'Title' => 'Appartment Example 2',
            'slug' => 'Appartment-Example-2',
            'category_id' => '1',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-2.jpg',
            'published' => true,
            'user_id' => '2'
        ]);
        $post = Post::create([
            'Title' => 'House Example 3',
            'slug' => 'House-Example-3',
            'category_id' => '2',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-3.jpg',
            'published' => true,
            'user_id' => '3'
        ]);
        $post = Post::create([
            'Title' => 'House Example 4',
            'slug' => 'House-Example-4',
            'category_id' => '2',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-4.jpg',
            'published' => true,
            'user_id' => '1'
        ]);
        $post = Post::create([
            'Title' => 'Villa Example 5',
            'slug' => 'vill-Example-5',
            'category_id' => '3',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-1.jpg',
            'published' => true,
            'user_id' => '3'
        ]);
        $post = Post::create([
            'Title' => 'Warehouse Example 6',
            'slug' => 'Warehouse-Example-6',
            'category_id' => '4',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-6.jpg',
            'published' => true,
            'user_id' => '1'
        ]);
        $post = Post::create([
            'Title' => 'Office Example 7',
            'slug' => 'office-Example-7',
            'category_id' => '5',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
            Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. 
            Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, 
            sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac,
            ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a,
            luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus,
            eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, 
            est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. 
            In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis 
            fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis.
            Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>',
            'image' => 'Images/posts/post-1.jpg',
            'published' => true,
            'user_id' => '2'
        ]);

    }
}
