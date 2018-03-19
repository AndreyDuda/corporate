<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = '';

        DB::table('users')->insert(
            [//password 123456
                [
                    'name'     => 'admin',
                    'email'    => 'admin@gmail.com',
                    'password' => '$2y$10$UN/QeftQP5ONnnKoyfRxPui3hnyP5.8fIlgT1QBUsSjYWAHy0Uv0W'
                ]
            ]);

        DB::table('categories')->insert(
            [
                [
                    'title'     => 'Блог',
                    'alias'     => 'blog',
                    'parent_id' => 0

                ],
                [
                    'title'     => 'Компьютеры',
                    'alias'     => 'computers',
                    'parent_id' => 1

                ],
                [
                    'title'     => 'Интересное',
                    'alias'     => 'iteresting',
                    'parent_id' => 1

                ],
                [
                    'title'     => 'Советы',
                    'alias'     => 'soveti',
                    'parent_id' => 1

                ]
            ]);

        $text ='<p>Fusce rutrum lectus id nibh ullamcorper aliquet. Pellentesque pretium mauris et augue fringilla non bibendum turpis iaculis. Donec sit amet nunc lorem. Sed fringilla vehicula est at pellentesque. Aenean imperdiet elementum arcu id facilisis. Mauris sed leo eros.</p>\n
                <p>Duis nulla purus, malesuada in gravida sed, viverra at elit. Praesent nec purus sem, non imperdiet quam. Praesent tincidunt tortor eu libero scelerisque quis consequat justo elementum. Maecenas aliquet facilisis ipsum, commodo eleifend odio ultrices et. Maecenas arcu arcu, luctus a laoreet et, fermentum vel lectus. Cras consectetur ipsum venenatis ligula aliquam hendrerit. Suspendisse rhoncus hendrerit fermentum. Ut eget rhoncus purus.</p>\n
                <p>Cras a tellus eu justo lobortis tristique et nec mauris. Etiam tincidunt tellus ut odio elementum adipiscing. Maecenas cursus dolor sit amet leo elementum ut semper velit lobortis. Pellentesque posue</p>
                \', \'Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi. Maecenas rutrum vehicula condimentum. Donec volutpat nisl ac mauris consectetur gravida.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vulputate nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nIn facilisis ornare arcu, sodales facilisis neque blandit ac. Ut blandit ipsum quis arcu adipiscing sit amet semper sem feugiat. Nam sed dapibus arcu. Nullam eleifend molestie lectus. Nullam nec risus purus';

        DB::table('articles')->insert(
            [
                [
                    'title'       => 'This is the title of the first article. Enjoy it',
                    'text'        => $text,
                    'desc'        => $text,
                    'alias'       => 'article-1',
                    'img'         => '{"mini":"003-55x55.jpg ","max":"003-816x282.jpg ","path":"0081-700x345.jpg"}',
                    'user_id'     => '1',
                    'category_id' => '1'
                ],
                [
                    'title'       => 'Nice & Clean. The best for your blog!',
                    'text'        => $text,
                    'desc'        => $text,
                    'alias'       => 'article-2',
                    'img'         => '{"mini":"001-55x55.png ","max":"001-816x282.png ","path":"0081-700x345.jpg"}',
                    'user_id'     => '1',
                    'category_id' => '1'
                ],
                [
                    'title'       => 'Section shortcodes & sticky posts!',
                    'text'        => $text,
                    'desc'        => $text,
                    'alias'       => 'article-3',
                    'img'         => '{"mini":"0037-55x55.jpg ","max":"00212-816x282.jpg ","path":"0081-700x345.jpg"}',
                    'user_id'     => '1',
                    'category_id' => '1'
                ]
        ]);

        DB::table('filters')->insert(
            [
                [
                    'title' => 'Brand Identity',
                    'alias' => 'Brand-identity'
                ]
            ]);

        DB::table('menus')->insert(
            [
                [
                    'title'  => 'Главная',
                    'path'   => 'http://corporate.loc',
                    'parent' => 0
                ],
                [
                    'title'  => 'Блог',
                    'path'   => 'http://corporate.loc/articles',
                    'parent' => 0
                ],
                [
                    'title'  => 'Компьютеры',
                    'path'   => 'http://corporate.loc/articles/cat/computers',
                    'parent' => 2
                ],
                [
                    'title'  => 'Интересное',
                    'path'   => 'http://corporate.loc/articles/cat/iteresting',
                    'parent' => 2
                ],
                [
                    'title'  => 'Советы',
                    'path'   => 'http://corporate.loc/articles/cat/soveti',
                    'parent' => 2
                ],
                [
                    'title'  => 'Портфолио',
                    'path'   => 'http://corporate.loc/portfolios',
                    'parent' => 0
                ],
                [
                    'title'  => 'Контакты',
                    'path'   => 'http://corporate.loc/contacts',
                    'parent' => 0
                ]
            ]);
        $text ='Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.\r\n\r\n
                Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed rhoncus vestibulum, sem lacus ultrices est, eu hendrerit tortor nulla in dui. Suspendisse enim purus, euismod interdum viverra eget, ultricies eu est. Maecenas dignissim mauris id est semper suscipit. Suspendisse venenatis vestibulum quam, quis porttitor arcu vestibulum et.\r\n\r\n
                Sed porttitor eros ut purus elementum a consectetur purus vulputate ';

        DB::table('portfolios')->insert(
            [
                [
                    'title'        => 'Steep This!',
                    'text'         => $text,
                    'customer'     => 'Steep This!',
                    'alias'        => 'project1',
                    'img'          => '{"mini":"0061-175x175.jpg","max":"0061-770x368.jpg","path":"0061.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Kineda',
                    'text'         => $text,
                    'customer'     => 'customer',
                    'alias'        => 'project2',
                    'img'          => '{"mini":"009-175x175.jpg","max":"009-770x368.jpg","path":"009.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Love',
                    'text'         => $text,
                    'customer'     => '',
                    'alias'        => 'project3',
                    'img'          => '{"mini":"0011-175x175.jpg","max":"0043-770x368.jpg","path":"0043.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Guanacos',
                    'text'         => $text,
                    'customer'     => 'Steep This!',
                    'alias'        => 'project4',
                    'img'          => '{"mini":"0027-175x175.jpg","max":"0027-770x368.jpg","path":"0027.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Miller Bob',
                    'text'         => $text,
                    'customer'     => 'customer',
                    'alias'        => 'project5',
                    'img'          => '{"mini":"0071-175x175.jpg","max":"0071-770x368.jpg","path":"0071.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Nili Studios',
                    'text'         => $text,
                    'customer'     => '',
                    'alias'        => 'project6',
                    'img'          => '{"mini":"0052-175x175.jpg","max":"0052-770x368.jpg","path":"0052.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'VItale Premium',
                    'text'         => $text,
                    'customer'     => 'Steep This!',
                    'alias'        => 'project7',
                    'img'          => '{"mini":"0081-175x175.jpg","max":"0081-770x368.jpg","path":"0081.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Digitpool Medien',
                    'text'         => $text,
                    'customer'     => 'customer',
                    'alias'        => 'project8',
                    'img'          => '{"mini":"0071-175x175.jpg","max":"0071.jpg","path":"0071-770x368.jpg"}',
                    'filter_alias' => 'brand-identity'
                ],
                [
                    'title'        => 'Octopus',
                    'text'         => $text,
                    'customer'     => '',
                    'alias'        => 'project9',
                    'img'          => '{"mini":"0081-175x175.jpg","max":"0081.jpg","path":"0081-770x368.jpg"}',
                    'filter_alias' => 'brand-identity'
                ]

            ]);
        $text='Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque';

        DB::table('sliders')->insert(
            [
                [
                    'img'   => 'xx.jpg',
                    'title' => '<h2 style="color:#fff">CORPORATE, MULTIPURPOSE.. <br /><span>PINK RIO</span></h2>',
                    'desc'  => $text
                ],
                [
                    'img'   => '00314.jpg',
                    'title' => '<h2 style="color:#fff">PINKRIO. <span>STRONG AND POWERFUL.</span></h2>',
                    'desc'  => $text
                ],
                [
                    'img'   => 'dd.jpg',
                    'title' => '<h2 style="color:#fff">PINKRIO. <span>STRONG AND POWERFUL.</span></h2>',
                    'desc'  => $text
                ]

            ]);
    }
}
