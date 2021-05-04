<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $property = Property::create([
            'title' => 'Title Example 1',
            'slug' => 'Title-Example-1',
            'category_id' => '2',
            'price' => '40000',
            'street' => 'P652 Promise Land ',
            'city' => 'Kimberley',
            'province' => 'Northern Cape',
            'zipCode' => '89536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property1.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 2',
            'slug' => 'Title-Example-2',
            'category_id' => '3',
            'price' => '87000',
            'street' => '2874 Albert Lithuli',
            'city' => 'Bloemfontein',
            'province' => 'Free State ',
            'zipCode' => '90016',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property2.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 3',
            'slug' => 'Title-Example-3',
            'category_id' => '3',
            'price' => '75000',
            'street' => '157 St Barnes Street',
            'city' => 'Cape Town',
            'province' => 'Western Cape',
            'zipCode' => '7536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property3.jpg',
            'status'  => 'For Sale',
            'user_id' => '2'
        ]);
        $property = Property::create([
            'title' => 'Title Example 4',
            'slug' => 'Title-Example-4',
            'category_id' => '3',
            'price' => '46000',
            'street' => 'P652 Promise Land ',
            'city' => 'Kimberley',
            'province' => ', Northern Cape',
            'zipCode' => '89536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property4.jpg',
            'status'  => 'For Sale',
            'user_id' => '3'
        ]);
        $property = Property::create([
            'title' => 'Title Example 5',
            'slug' => 'Title-Example-5',
            'category_id' => '4',
            'price' => '91000',
            'street' => '2874 Albert Lithuli',
            'city' => 'Bloemfontein',
            'province' => 'Free State',
            'zipCode' => '90016',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property4.jpg',
            'status'  => 'For Rent',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 6',
            'slug' => 'Title-Example-6',
            'category_id' => '2',
            'price' => '71000',
            'street' => '157 St Barnes Street',
            'city' => 'Cape Town',
            'province' => 'Western Cape',
            'zipCode' => '7536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property5.jpg',
            'status'  => 'For Rent',
            'user_id' => '2'
        ]);
        $property = Property::create([
            'title' => 'Title Example 7',
            'slug' => 'Title-Example-7',
            'category_id' => '3',
            'price' => '9100',
            'street' => 'P652 Promise Land ',
            'city' => 'Kimberley',
            'province' => ', Northern Cape',
            'zipCode' => '89536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property5.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 8',
            'slug' => 'Title-Example-8',
            'category_id' => '5',
            'price' => '9100',
            'street' => '2874 Albert Lithuli',
            'city' => 'Bloemfontein',
            'province' => 'Free State ',
            'zipCode' => '90016',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property6.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 9',
            'slug' => 'Title-Example-9',
            'category_id' => '5',
            'price' => '9100',
            'street' => '157 St Barnes Street',
            'city' => 'Cape Town',
            'province' => 'Western Cape',
            'zipCode' => '7536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property7.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 10',
            'slug' => 'Title-Example-10',
            'category_id' => '5',
            'price' => '9100',
            'street' => 'P652 Promise Land ',
            'city' => 'Kimberley',
            'province' => 'Northern Cape',
            'zipCode' => '89536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property8.jpg',
            'status'  => 'For Sale',
            'user_id' => '1'
        ]);
        $property = Property::create([
            'title' => 'Title Example 11',
            'slug' => 'Title-Example-11',
            'category_id' => '5',
            'price' => '9100',
            'street' => '2874 Albert Lithuli',
            'city' => 'Bloemfontein',
            'province' => 'Free State ',
            'zipCode' => '90016',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property11.jpg',
            'status'  => 'For Sale',
            'user_id' => '3'
        ]);
        $property = Property::create([
            'title' => 'Title Example 12',
            'slug' => 'Title-Example-12',
            'category_id' => '2',
            'price' => '9100',
            'street' => '157 St Barnes Street',
            'city' => 'Cape Town',
            'province' => 'Western Cape',
            'zipCode' => '7536',
            'description' => '5 bedroom, 2 bathrooms',
            'details' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. 
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
            'image' => 'Images/properties/property12.jpg',
            'status'  => 'For Rent',
            'user_id' => '1'
        ]);
    }
}
