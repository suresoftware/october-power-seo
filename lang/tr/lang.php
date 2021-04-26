<?php

return [
    'plugin' => [
        'name' => 'Güç SEO',
        'description' => 'Sayfalar, Sabit Sayfalar ve Blog yazıları için SEO işlemleri yapar.'
    ],
    'settings' => [
        'label' => 'Güç SEO',
        'description' => 'Güç SEO Ayarları',
        'tab_settings' => [
            'label' => 'Ayarlar',
            'site' => 'Başlık site adı kullan',
            'site_comment' => 'Başlık tag\'ında site adı kullanmak istiyorsanız aktifleştirin',
            'sitename' => 'Site adı',
            'canonical' => 'Varsayılan URL\'leri Kanonik URL olarak kullan',
            'canonical_comment' => 'Kanonik URL belirtilmemişse, varsayılan URL\'yi kanonik URL olarak kullan',
            'sitename_comment_above' => 'Başlık etiketi site adına önek veya sonek',
            'sitename_comment' => 'Site adı | <seo/sayfa/blog başlık>',
            'sitename_placeholder' => 'Site adı |',
            'title_position' => 'Site adını şurada görünecek',
            'title_position_comment' => 'site adının nerede görüneceğini seçin örneğin başta veya sonda',
            'title_position_prefix' => 'Önek (başında)',
            'title_position_suffix' => 'Sonek (sonunda)',
            'other_tags' => 'Diğer meta taglar',
            'other_tags_comment_above' => 'Tüm sayfalarda görünmesini istediğiniz etiketleri ekleyin',
            'other_tags_comment' => 'Meta author, meta viewport gibi diğer meta etiketleri ekleyin',
            'other_tags_position' => 'Position other meta tags',
			'other_tags_position_top' => 'At top of HEAD element',
			'other_tags_position_bottom' => 'At bottom of HEAD element (before any OG tags)',
            'other_tags_position_comment' => 'The position of other meta tags in HEAD element',
        ],
        'tab_og' => [
            'label' => 'Open Graph',
            'og' => 'Open Graph(og) Kullan',
            'og_comment' => 'Open Graph(og) Taglarını Aktifleştir',
            'sitename' => 'Open Graph İçin Site Adı',
            'sitename_comment' => 'Websitenizin adı. URL girmeyin, site adını girin. (örneğin "güçseo.com" yazmayın, "Güç SEO" yazın.)',
            'fb' => 'Facebook App Id\'si',
            'fb_comment' => 'Facebook\'un sitenizi tanımasını sağlayan benzersiz kimlik.'
        ],
    ],
    'component' => [
        'blog' => [
            'name' => 'SEO Blog Gönderisi',
            'description' => 'Blog yazısına SEO alanlarını enjekte et'
        ],
        'cms' => [
            'name' => 'SEO CMS Sayfası',
            'description' => 'CMS Sayfasına SEO alanlarını enjekte et'
        ],
        'static' => [
            'name' => 'SEO Sabit Sayfa',
            'description' => 'Sabit Sayfaya SEO alanlarını enjekte et'
        ]
    ]
];
