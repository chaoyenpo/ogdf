<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public $products = [
        [
            "name" => "杏桃蜜香薰衣草",
            "description" => "蜜香會讓你上癮。",
            "category" => "茶葉",
            "price" => "790",
            "image_src" => "/images/001.jpg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "玫瑰紫羅蘭",
            "description" => "玫瑰香讓你受不了。",
            "category" => "茶葉",
            "price" => "790",
            "image_src" => "/images/002.jpg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "酸櫻桃橙橘",
            "description" => "橙橘香讓你凍北條。",
            "category" => "茶葉",
            "price" => "790",
            "image_src" => "/images/003.jpg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "Decaffeinated Earl Grey 無咖啡因伯爵茶",
            "description" => "建議沖泡方式：熱水沖泡約三至五分鐘, 可依個人喜好調整，可添加牛奶。",
            "category" => "茶包",
            "price" => "480",
            "image_src" => "/images/004.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "Irish Breakfast Blend 愛爾蘭早餐茶",
            "description" => "著名的早餐茶系列之一，愛爾蘭早餐茶，屬於東方極速中最濃郁的茶款！",
            "category" => "茶包",
            "price" => "320",
            "image_src" => "/images/005.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "Jubilee Tea女王禧鑽茶",
            "description" => "酸到你想罵人。",
            "category" => "茶包",
            "price" => "1050",
            "image_src" => "/images/006.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 10 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "經典茶包禮盒",
            "description" => "60茶包入，每個口味各10包；印度阿薩姆紅茶、立山小種、大吉嶺BOP、錫蘭茶、俄羅斯商隊紅茶",
            "category" => "禮盒",
            "price" => "1380",
            "image_src" => "/images/007.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 60 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "世界茗茶禮盒",
            "description" => "60茶包入，每個口味各10包；優質阿薩姆、白毫錫蘭、白毫大吉嶺、正山小種、俄羅斯商隊茶",
            "category" => "禮盒",
            "price" => "1380",
            "image_src" => "/images/008.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 60 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "果香茶包禮盒",
            "description" => "60茶包入，每個口味各10包；蘋果紅茶、莓果紅茶、檸檬紅茶、蜜桃紅茶、草莓紅茶",
            "category" => "禮盒",
            "price" => "1380",
            "image_src" => "/images/009.jpg",
            "sizes" => [
                [
                    "name" => "盒裝",
                    "description" => "目前都是 1 盒 60 包裝為單位"
                ]
            ]
        ],
        [
            "name" => "茉莉香米天然手工香皂",
            "description" => "茉莉香米，使用時產生豐富綿密的泡沫，入浴時刻變成獨特美好時光",
            "category" => "香皂",
            "price" => "200",
            "image_src" => "/images/010.png",
            "sizes" => [
                [
                    "name" => "包裝",
                    "description" => "目前都是 1 包 1 個裝為單位"
                ]
            ]
        ],
        [
            "name" => "百香蜜桃天然手工香皂",
            "description" => "百香蜜桃，使用時產生豐富綿密的泡沫，入浴時刻變成獨特美好時光",
            "category" => "香皂",
            "price" => "200",
            "image_src" => "/images/011.png",
            "sizes" => [
                [
                    "name" => "包裝",
                    "description" => "目前都是 1 包 1 個裝為單位"
                ]
            ]
        ],
        [
            "name" => "東方茶香天然手工香皂",
            "description" => "東方茶香，使用時產生豐富綿密的泡沫，入浴時刻變成獨特美好時光",
            "category" => "香皂",
            "price" => "200",
            "image_src" => "/images/012.png",
            "sizes" => [
                [
                    "name" => "包裝",
                    "description" => "目前都是 1 包 1 個裝為單位"
                ]
            ]
        ],
        [
            "name" => "神祕東方蠟燭 海洋音符",
            "description" => "香味：柚木、海藻",
            "category" => "蠟燭",
            "price" => "1580",
            "image_src" => "/images/013.jpeg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 1 個為單位"
                ]
            ]
        ],
        [
            "name" => "神祕東方蠟燭 靛藍丹寧",
            "description" => "香味：薄荷葉、柑橘、金桔",
            "category" => "蠟燭",
            "price" => "1580",
            "image_src" => "/images/014.jpeg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 1 個為單位"
                ]
            ]
        ],
        [
            "name" => "神祕東方蠟燭 波滔浪花",
            "description" => "香味：紫羅蘭、無花果、牛奶",
            "category" => "蠟燭",
            "price" => "1580",
            "image_src" => "/images/015.jpeg",
            "sizes" => [
                [
                    "name" => "罐裝",
                    "description" => "目前都是 1 罐 1 個為單位"
                ]
            ]
        ]
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User=>=>factory(10)->create();

        $products = collect($this->products)->map(function ($product) {
            $product['sizes'] = json_encode($product['sizes']);
            return $product;
        });
        Product::upsert($products->toArray(), 'id');
    }
}
