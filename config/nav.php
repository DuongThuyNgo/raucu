<?php
return [
    'admin' => [
        'top' => [
            [
                'name' => 'Loại đồ uống',
                'route' => 'get_backend.loai_do_uong.index'
            ],
            [
                'name' => 'Đồ uống',
                'route' => 'get_backend.do_uong.index'
            ],
            [
                'name' => 'Giá bán',
                'route' => 'get_backend.gia_ban.index'
            ],
            [
                'name' => 'Tin tức',
                'route' => 'get_backend.tin_tuc.index'
            ],
            [
                'name' => 'Nhà cung cấp',
                'route' => 'get_backend.nha_cung_cap.index'
            ],
            [
                'name' => 'Hóa đơn nhập',
                'route' => 'get_backend.hoa_don_nhap.index'
            ],

            [
                'name' => 'Đơn hàng',
                'route' => 'get_backend.don_hang.index'
            ],
          
        ]
    ],
    'home' => [
        'top' => [
            [
                'name' => 'Bài viết',
                'route' => 'get.bai_viet'
            ],
            [
                'name' => 'Chính sách',
                'route' => 'get.chinh_sach'
            ],

            [
                'name' => 'Về chúng tôi',
                'route' => 'get.ve_chung_toi'
            ],
            [
                'name' => 'Liên hệ',
                'route' => 'get.lien_he'
            ],

        ]
    ],

    'users' => [
        'top' => [
            [
                'name'    => 'Tổng quan',
                'route'   => 'get_user.home',
                'icon'    => 'fas fa-shopping-cart',
                'class'   => 'active',
            ]
            ,
            [
                'name'    => 'Thông tin cá nhân',
                'route'   => 'get_user.thong_tin_ca_nhan.index',
                'icon'    => 'fas fa-shopping-cart',
                'class'   => '',
                'param'   => true,
            ],
            [
                'name'    => 'Đơn hàng',
                'route'   => 'get_user.don_hang.index',
                'icon'    => 'fas fa-shopping-cart',
                'class'   => '',
            ],


        ]
    ],


];
