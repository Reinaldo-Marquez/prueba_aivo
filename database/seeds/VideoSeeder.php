<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            "video_id" => "Yo6RL5A1eyY",
            "published_at" => "2014-10-6",
            "title" => "Mägo de Oz - Cadaveria (Videoclip oficial)",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime adipisci consectetur dignissimos nesciunt maiores, nihil voluptatum repellendus eveniet eos rem quo a odio corrupti officiis exercitationem. Sed quam, officiis nisi, perferendis quidem doloremque quaerat deleniti dolor magni accusamus nesciunt! Sit dignissimos non blanditiis tenetur optio officia rerum veritatis dolores cumque?",
            "thumbnail" => "https://i.ytimg.com/an_webp/Yo6RL5A1eyY/mqdefault_6s.webp?du=3000&sqp=CIrPu_YF&rs=AOn4CLAMdZDj8H9lFggb8fMpI-C5LgY_KQ"
        ]);

        Video::create([
            "video_id" => "1zN7J64IeBo",
            "published_at" => "2015-07-26",
            "title" => "POWERWOLF - Army Of The Night (Official Video) | Napalm Records",
            "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime adipisci consectetur dignissimos nesciunt maiores, nihil voluptatum repellendus eveniet eos rem quo a odio corrupti officiis exercitationem. Sed quam, officiis nisi, perferendis quidem doloremque quaerat deleniti dolor magni accusamus nesciunt! Sit dignissimos non blanditiis tenetur optio officia rerum veritatis dolores cumque?',
            "thumbnail" => "https://i.ytimg.com/an_webp/1zN7J64IeBo/mqdefault_6s.webp?du=3000&sqp=CKL5u_YF&rs=AOn4CLD3Uz1vCJlb7Yci3TZl3HzWsgB5nw"
        ]);

        Video::create([
            "video_id" => "GpxFUo7oxWM",
            "published_at" => "2011-07-05",
            "title" => "Powerwolf - We Drink Your Blood (OFFICIAL VIDEO)",
            "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime adipisci consectetur dignissimos nesciunt maiores, nihil voluptatum repellendus eveniet eos rem quo a odio corrupti officiis exercitationem. Sed quam, officiis nisi, perferendis quidem doloremque quaerat deleniti dolor magni accusamus nesciunt! Sit dignissimos non blanditiis tenetur optio officia rerum veritatis dolores cumque?',
            "thumbnail" => "https://i.ytimg.com/an_webp/GpxFUo7oxWM/mqdefault_6s.webp?du=3000&sqp=CPXSu_YF&rs=AOn4CLAOHCELw40kHPPjETEL_CfiaAtgww"
        ]);

        Video::create([
            "video_id" => "SEbxwmjScr8",
            "published_at" => "2018-06-26",
            "title" => "Falling In Reverse - Losing My Life",
            "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime adipisci consectetur dignissimos nesciunt maiores, nihil voluptatum repellendus eveniet eos rem quo a odio corrupti officiis exercitationem. Sed quam, officiis nisi, perferendis quidem doloremque quaerat deleniti dolor magni accusamus nesciunt! Sit dignissimos non blanditiis tenetur optio officia rerum veritatis dolores cumque?',
            "thumbnail" => "https://i.ytimg.com/an_webp/SEbxwmjScr8/mqdefault_6s.webp?du=3000&sqp=CPuGvPYF&rs=AOn4CLBeuekuuzJnRjNJXEUMyYW64iSQIA"
        ]);

        Video::create([
            "video_id" => "XnABRPS37hk",
            "published_at" => "2011-07-03",
            "title" => "Coheed and Cambria - The Suffering (Video)",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime adipisci consectetur dignissimos nesciunt maiores, nihil voluptatum repellendus eveniet eos rem quo a odio corrupti officiis exercitationem. Sed quam, officiis nisi, perferendis quidem doloremque quaerat deleniti dolor magni accusamus nesciunt! Sit dignissimos non blanditiis tenetur optio officia rerum veritatis dolores cumque?",
            "thumbnail" => "https://i.ytimg.com/an_webp/XnABRPS37hk/mqdefault_6s.webp?du=3000&sqp=CNf0u_YF&rs=AOn4CLDUxNC_Jkn0Tse-0-BsJPyQmHDH3g"
        ]);
    }
}
