<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- @meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="title" content="HARVEST">
    <meta name="description" content="HARVEST">
    <meta name="keywords"
        content="webgl, branding design, development, css, html, react js, scss, gsap, coding, ux/ui design, front-end, web design, web development, phu nguyen, hi991016, creative design, creative dev, art direction, agency, creativ, studio, ux design, storytelling, javascript, animated,typographic, jQuery, responsive">

    <!-- @meta facebook -->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="HARVEST">
    <meta property="og:title" content="HARVEST">
    <meta property="og:description" content="HARVEST">
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/ogimage.png">
    <meta property="og:url" content="<?= home_url(); ?>">

    <!-- @meta twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="HARVEST">
    <meta property="twitter:title" content="HARVEST">
    <meta property="twitter:description" content="HARVEST">
    <meta property="twitter:image" content="<?= get_template_directory_uri() ?>/ogimage.png">

    <link rel="canonical" href="<?= home_url(); ?>">
    <link rel="icon" href="<?= get_template_directory_uri() ?>/favicon.ico">

    <!-- @master css -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.min.css?ver=1.0">
   
    <!-- @fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php if (is_home() || is_front_page()) : ?>
    <title>HARVEST</title>
    <?php else : ?>
    <title><?php wp_title(''); ?> ｜ HARVEST</title>
    <?php endif;  ?>

    <?php wp_head(); ?>
</head>

<body>
    <!-- @header -->
    <header class="c-header <?php echo is_home() || is_front_page() ? "--hide" : "" ?>">
        <div class="c-header_container">
            <div class="c-header_left">
                <a href="<?= home_url(); ?>">
                    <h1>
                        <svg id="Group_26" data-name="Group 26" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="22.384"
                            viewBox="0 0 160 22.384">
                            <defs>
                                <clipPath id="clip-path-header-logo">
                                    <rect id="Rectangle_3" data-name="Rectangle 3" width="160" height="22.384"
                                        fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_25" data-name="Group 25" clip-path="url(#clip-path-header-logo)">
                                <path id="Path_12" data-name="Path 12"
                                    d="M45.04,5.677,31.307,0l7.839,13.713a11.364,11.364,0,0,0,1.368,2.053v.044h-8.92v-.044a5.048,5.048,0,0,0-.8-1.987l-.993-1.756h-1.19l2.118,3.743v.044H22.056v-.044a12.734,12.734,0,0,0,1.368-2.053L27.113,7.26l1.548-2.708L18.5.353V.4a4.151,4.151,0,0,0-.972,3.114v9.142a4.15,4.15,0,0,0,.972,3.113v.044H9.361v-.044A7.673,7.673,0,0,0,9.8,12.653V8.6H8.7v4.053a7.734,7.734,0,0,0,.441,3.113v.044H0L15.047,22.03h9.14v-.044c-.008-.017-.016-.039-.024-.057l.244.1H33.55v-.044a3.253,3.253,0,0,1-.85-1.776l4.4,1.82h8.678v-.044l-.23-.406,1.09.45h8.92v-.044a11.154,11.154,0,0,1-1.32-1.969l4.874,2.015h9.143v-.044c-.028-.058-.055-.123-.083-.2s-.054-.154-.08-.244-.051-.187-.075-.295c-.015-.068-.029-.146-.042-.222l1.966.812a3.6,3.6,0,0,0,.751.294,6.3,6.3,0,0,0,.993.184,11.554,11.554,0,0,0,1.272.064c.306,0,.6-.008.878-.023s.544-.037.795-.064.487-.06.708-.1.428-.077.619-.12.367-.088.527-.134.3-.093.432-.14.239-.093.334-.137a2.021,2.021,0,0,0,.234-.125V21.5a.8.8,0,0,1-.163-.125,1.2,1.2,0,0,1-.141-.169,1.873,1.873,0,0,1-.121-.2c-.037-.071-.071-.146-.1-.222s-.059-.153-.084-.23-.048-.152-.068-.226-.038-.144-.053-.211-.029-.128-.04-.184l-.041-.224-.041-.224-.041-.224-.041-.224-.041-.224-.041-.224-.041-.224-.041-.224c-.041-.224-.089-.439-.146-.646-.008-.029-.02-.055-.029-.084l12.024,4.97h.043l2.617-4.578,10.22,4.224H116.37l.345-3.177,6.084,2.514a36.036,36.036,0,0,0,8.194.928c3.484,0,6.136-1.141,6.9-3.662l8.216,3.4h10.115v-.044a3.711,3.711,0,0,1-1.193-3.113v-6.2l4.9,2.026h.045L160,6.573,144.953.353l-.021,8.126h-.045L140.206.618h-.22V12.653a3.71,3.71,0,0,0,1.193,3.113v.044H131.063v-.044a3.71,3.71,0,0,0,1.193-3.113V.618h-.22l-4.7,7.861h-.043v-5.1l-5.712-2.361.553,6.051h-.045c-3.157-4.483-7.705-6.58-9.1-6.58-.441,0-.551.11-.551.265,0,1.435,10.642,4.35,10.642,10.068,0,3.645-2.979,5.257-7.131,5.257a36.058,36.058,0,0,1-8.194-.928l-.175-7.155h.043c3.157,5.3,7.794,7.751,9.495,7.751.354,0,.419-.154.419-.288,0-1.081-10.177-5.122-10.177-10.466a4.741,4.741,0,0,1,.4-1.982l0,0L101.323.353l.728,6.691h-.043L95.163.618h-.4V7.97l3.511-3.841h.043v7.906h-.043l-3.511-3.84v7.352h.4l6.846-6.427h.043l-.728,6.691H86.066v-.044a4.162,4.162,0,0,0,.97-3.113V3.511c0-1.4-.116-1.306-.116-1.306L82.438.353V.4a10.419,10.419,0,0,0-1.37,2.053l-7.84,13.713h-.043l-7-12.248-6.767-2.8a3.221,3.221,0,0,1,1.942,3.121c0,3.781-5.43,4.055-8.192,4.273v.121a28.085,28.085,0,0,1,4.527-.021c2.585.242,3.313,1.523,3.643,3.311l.331,1.79c.088.442.309,1.3.773,1.568v.044a9.824,9.824,0,0,1-4.527.84c-3.8,0-4.218-1.392-4.46-3.313l-.527-4.328h-.158v4.13a7.678,7.678,0,0,0,.443,3.114v.044H44.068v-.044a4.152,4.152,0,0,0,.972-3.114Z"
                                    transform="translate(0 0)" fill="#1a1311" />
                                <line id="Line_3" data-name="Line 3" transform="translate(31.263 0)" fill="#1a1311" />
                                <path id="Path_13" data-name="Path 13"
                                    d="M181.275.879V.923a4.922,4.922,0,0,0,.8,1.987l3.481,6.149.6-1.038-3.782-6.691Z"
                                    transform="translate(-108.377 -0.526)" fill="#1a1311" />
                                <path id="Path_14" data-name="Path 14"
                                    d="M132.1,5.4c0-1.921-.309-3.864-.884-3.864v7.64c.6,0,.884-1.877.884-3.776"
                                    transform="translate(-78.45 -0.92)" fill="#1a1311" />
                                <path id="Path_15" data-name="Path 15"
                                    d="M22.075.88V.924a7.735,7.735,0,0,0-.441,3.114V8.09h1.1V4.038A7.675,7.675,0,0,0,22.3.924V.88h0V.924c.008.016.016.039.024.057Z"
                                    transform="translate(-12.934 -0.526)" fill="#1a1311" />
                            </g>
                        </svg>
                    </h1>
                </a>
            </div>
            <div class="c-header_right">
                <a href="<?= home_url(); ?>/contact/">Contact</a>
            </div>
        </div>
    </header>
    <!-- @@header -->