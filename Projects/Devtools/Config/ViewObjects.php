<?php return
[
    //--------------------------------------------------------------------------------------------------
    // View Objects
    //--------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : Copyright (c) 2012-2016, ZN Framework
    //
    //--------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // Vew Name Type -> 5.0.0
    //--------------------------------------------------------------------------------------------------
    //
    // Kontrolcüler kendi ismiyle aynı isimli bir görünüm dosyası olursa bu görünümü otomatik olarak
    // yükler. Ancak kontrolcüler alt yöntemleri ile birden fazla görünümü aynı kontrolcü içinde
    // çalıştırabileceğil için görünüm yapınız her kontrolcü için birden fazla dosya da içerebileceği
    // için görünümlerinizi kontrolcü ismiyle aynı isme sahip bir dizin altında toplamak
    // isteyebilirsiniz. İşte bu ayar bu duruma yardımcı olmak için kullanılır.
    //
    // Kullanılabilir Seçenekler
    //
    // file: Kontrolcü adı ile aynı görünüm adı olmalıdır. Kontrolcü main dışında alt yöntemlerde
    // içeriyorsa görünüm adı kontrolcuadi-yontemadi formatında oluşturulmalıdır.
    //
    // directory: Görünüm dizininde kontrolcü adı ile aynı isimli görünüm dizini olmalıdır. Örnek
    // olarak example.php kontrolcünüz varsa view yapısı söyle olmalıdır. example/main.php,
    // example/altyontem.php
    //
    //--------------------------------------------------------------------------------------------------
    'viewNameType' => 'file',

    //--------------------------------------------------------------------------------------------------
    // Ajax Code Continue -> 5.3.77
    //--------------------------------------------------------------------------------------------------
    //
    // Ajax istekleri sırasıda oluşan diğer çıktıların durdurulup durdurulmayacağıdır. Bu değer true
    // olarak bırakılacaksa ajax isteği yapılan yöntemlerin exit ile sonlandırılması tavsiye edilir.
    //
    //--------------------------------------------------------------------------------------------------
    'ajaxCodeContinue' => true,

    //--------------------------------------------------------------------------------------------------
    // Wizard
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Şablon sihirbazının hangi yapıları ayrıştıracağını belirtmek için kullanılır.
    //
    // keywords : for, if, while, foreach gibi kullanımlara izin ver.
    // printable: @function:, @variable: kullanımına izin ver.
    // functions: @function: kullanımına izin ver.
    // comments : {-- yorum satırı --} kullanımına izin ver.
    // tags     : {[ php codes ]} php tagları olarak kullanımına izin ver.
    // jsdata   : [{vue.data}] -> javascript data alımlar için {{vue.data}} normuna dönüştürür.
    // html     : #html kodlarını # kare symbolü ile kullanıma izin ver.
    //
    //--------------------------------------------------------------------------------------------------
    'wizard' =>
    [
        'keywords'  => true,
        'printable' => true,
        'functions' => true,
        'comments'  => true,
        'tags'      => true,
        'jsdata'    => false,
        'html'      => true
    ],

    //--------------------------------------------------------------------------------------------------
    // Pagination
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı sayfalama ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'pagination' =>
    [
        'prevName'      => '<',
        'nextName'      => '>',
        'firstName'     => '<<',
        'lastName'      => '>>',

        'totalRows'     => 50,
        'start'         => NULL,
        'limit'         => 10,
        'countLinks'    => 10,
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ],

        'style' =>
        [
            'current'   => '',
            'links'     => '',
            'prev'      => '',
            'next'      => '',
            'last'      => '',
            'first'     => ''
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Captcha
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı güvenlik kodu ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'captcha' =>
    [
        'text' =>
        [
            'length' => 6,
            'color'  => '255|255|255',
            'size'   => 10,
            'x'      => 65,
            'y'      => 13,
            'angle'  => 0,
            'ttf'    => []
        ],

        'background' =>
        [
            'color' => '80|80|80',
            'image' => []
        ],

        'border' =>
        [
            'status' => false,
            'color'  => '0|0|0'
        ],

        'size' =>
        [
            'width'  => 180,
            'height' => 40
        ],

        'grid' =>
        [
            'status' => true,
            'color'  => '50|50|50',
            'spaceX' => 12,
            'spaceY' => 4
        ]
    ],

    //--------------------------------------------------------------------------------------------------
    // Calendar
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı takvim ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'calendar' =>
    [
        'prevName'      => '<<',
        'nextName'      => '>>',
        'dayType'       => 'short',
        'monthType'     => 'long',
        'type'          => 'classic', // classic, ajax

        'class' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'style' =>
        [
            'table'     => '',
            'monthName' => '',
            'dayName'   => '',
            'days'      => '',
            'links'     => '',
            'current'   => '',
        ],

        'monthNames' =>
        [
            'tr' =>
            [
                'Ocak'      => 'Oca',
                'Şubat'     => 'Şub',
                'Mart'      => 'Mar',
                'Nisan'     => 'Nis',
                'Mayıs'     => 'May',
                'Haziran'   => 'Haz',
                'Temmuz'    => 'Tem',
                'Ağustos'   => 'Ağu',
                'Eylül'     => 'Eyl',
                'Ekim'      => 'Eki',
                'Kasım'     => 'Kas',
                'Aralık'    => 'Ara'
            ],

            'en' =>
            [
                'Janury'    => 'Jan',
                'February'  => 'Feb',
                'March'     => 'Mar',
                'April'     => 'Apr',
                'May'       => 'May',
                'June'      => 'Jun',
                'July'      => 'Jul',
                'August'    => 'Aug',
                'September' => 'Sep',
                'October'   => 'Oct',
                'November'  => 'Nov',
                'December'  => 'Dec'
            ]
        ],

        'dayNames' =>
        [
            'tr' =>
            [
                'Pazartesi' => 'Pzt',
                'Salı'      => 'Sal',
                'Çarşamba'  => 'Çar',
                'Perşembe'  => 'Per',
                'Cuma'      => 'Cum',
                'Cumartesi' => 'Cts',
                'Pazar'     => 'Paz'
            ],

            'en' =>
            [
                'Monday'    => 'Mon',
                'Tuesday'   => 'Tue',
                'Wednesday' => 'Wed',
                'Thursday'  => 'Thu',
                'Friday'    => 'Fri',
                'Saturday'  => 'Sat',
                'Sunday'    => 'Sun'
            ]
        ]
    ],

    //----------------------------------------------------------------------------------------------------
    // Terminal
    //----------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı konsol ayarı yapmak için kullanılır.
    //
    //----------------------------------------------------------------------------------------------------
    'terminal' =>
    [
    	'width' 		=> '800px',
    	'height' 		=> '350px',
    	'bgColor' 		=> '#000',
    	'barBgColor' 	=> '#222',
    	'textColor' 	=> '#ccc',
    	'textType' 		=> 'Consolas, monospace',
    	'textSize' 		=> '12px'
    ],

    //--------------------------------------------------------------------------------------------------
    // DataGrid
    //--------------------------------------------------------------------------------------------------
    //
    // Genel Kullanımı: Ön tanımlı grid ayarı yapmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------
    'dbgrid' =>
    [
        //----------------------------------------------------------------------------------------------
        // Style Element
        //----------------------------------------------------------------------------------------------
        //
        // Bu ayar değer alırsa gridin bulunduğu sayfada dahili <style> kullanımı aktif hale gelir.
        //
        //----------------------------------------------------------------------------------------------
        'styleElement' =>
        [
            //'#DBGRID_TABLE tr:nth-child(even)' => ['background' => '#E6F9FF'],
            //'#DBGRID_TABLE tr:nth-child(odd)'  => ['background' => '#FFF']
        ],

        //----------------------------------------------------------------------------------------------
        // Attributes
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Grid'de yer alan buton ve linklere ait attibute yani özellik eklemek
        // için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'attributes'    =>
        [
            'table'         => ['class' => 'table table-bordered table-hover table-striped'],
            'editTables'    => [],
            'columns'       => [],
            'search'        => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'add'           => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'deleteSelected'=> ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'deleteAll'     => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'save'          => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'update'        => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'delete'        => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'edit'          => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'listTables'    => [],
            'inputs'        =>
            [
                'text'      => ['style' => 'height:30px; color:#0085B2; border:solid 1px #ccc; text-indent:10px; border-radius:4px'],
                'textarea'  => ['style' => 'height:100px; width:300px; color:#0085B2; border:solid 1px #ccc; text-indent:10px; border-radius:4px'],
                'radio'     => [],
                'checkbox'  => [],
                'select'    => []
            ]
        ],

        //----------------------------------------------------------------------------------------------
        // Pagination
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanımı: Yukardaki ayarlar aynen geçerlidir. Sadece Datagrid için farklı bir.
        // sayfalama görünümü dizayn edilmek istenirse yukarıdaki ayarların kullanımı değişmeyecek
        // şekilde kullanılabilir. Ortak bir sayfalama tasarımı kullanıyorsa zaten sayfalama
        // ayarlarının yukarıdaki mevcut ayarlarından yapılması tavsiye edilir.
        //
        //----------------------------------------------------------------------------------------------
        'pagination' =>
        [
            'style' =>
            [
                'links' => 'color:#0085B2;
                            width:20px; height:20px;
                            text-align:center;
                            padding-top:4px;
                            display:inline-block;
                            background:white;
                            border:solid 1px #ddd;
                            border-radius: 4px;
                            -webkit-border-radius: 4px;
                            -moz-border-radius: 4px;
                            text-decoration:none;',

                'current' => 'font-weight:bold;'
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | ML Grid
    |--------------------------------------------------------------------------
    |
    | It edits the table created by the ML::table() method.
    |
    | labels      : It arranges the names of the labels on the table.
    | buttonNames : It arranges the names of the buttons on the table.
    | placeHolders: It arranges the placeholder of the text fields on the table.
    | styleElement: Used to give built-in style to the table.
    | attributes  : Used to add attributes to objects in the table.
    | pagination  : It arranges the pagination bar on the table.
    |
    */

    'mlgrid' =>
    [
        'labels' =>
        [
            'title'    => ($lang = Lang::select('Language'))['ml:titleLabel'],
            'confirm'  => $lang['ml:confirmLabel'],
            'process'  => $lang['ml:processLabel'],
            'keywords' => $lang['ml:keywordsLabel'],
        ],
        'buttonNames' =>
        [
            'add'    => $lang['ml:addButton'],
            'update' => $lang['ml:updateButton'],
            'delete' => $lang['ml:deleteButton'],
            'clear'  => $lang['ml:clearButton'],
            'search' => $lang['ml:searchButton']
        ],
        'placeHolders' =>
        [
            'keyword'     => $lang['ml:keywordPlaceHolder'],
            'addLanguage' => $lang['ml:addLanguagePlaceHolder'],
            'search'      => $lang['ml:searchPlaceHolder']
        ],
        'styleElement' =>
        [
            #'#ML_TABLE tr:nth-child(even)' => ['background' => '#E6F9FF'],
            #'#ML_TABLE tr:nth-child(odd)'  => ['background' => '#FFF']
        ],
        'attributes'    =>
        [
            'table'   => ['class' => 'table table-bordered table-hover table-striped'],
            'add'     => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'update'  => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'delete'  => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'clear'   => ['style' => 'height:30px; color:#0085B2; background:none; border:solid 1px #ccc; cursor:pointer; border-radius:4px'],
            'textbox' => ['style' => 'height:30px; color:#0085B2; border:solid 1px #ccc; text-indent:10px; border-radius:4px']
        ],
        'pagination' =>
        [
            'style' =>
            [
                'links' => 'color:#0085B2; width:30px; height:30px; text-align:center; padding-top:4px;
                            display:inline-block; background:white; border:solid 1px #ddd; border-radius: 4px;
                            -webkit-border-radius: 4px; -moz-border-radius: 4px;text-decoration:none;',

                'current' => 'font-weight:bold;'
            ],
            'class' => []
        ]
    ]
];