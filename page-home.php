<?php get_header(); ?>

    <!-- @main -->
    <main class="homepage">
        <!-- top// -->
        <section class="top">
            <div class="top_container">
                <div class="top_video">
                    <div class="pc-only">
                        <video class="js-play" playsinline muted>
                            <source src="<?= get_template_directory_uri() ?>/assets/img/harvest_pc.mp4">
                        </video>
                    </div>
                    <div class="sp-only">
                        <video class="js-play" playsinline muted>
                            <source src="<?= get_template_directory_uri() ?>/assets/img/harvest_sp.mp4">
                        </video>
                    </div>
                </div>
                <div class="top_logo">
                    <!-- <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="520"
                            height="72.748" viewBox="0 0 520 72.748">
                            <defs>
                                <clipPath id="clip-path-top-logo">
                                    <rect id="Rectangle_313" data-name="Rectangle 313" width="520" height="72.748"
                                        fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_232" data-name="Group 232" transform="translate(-540 -181)">
                                <g id="Group_231" data-name="Group 231" transform="translate(540 181)">
                                    <path id="Path_25" data-name="Path 25"
                                        d="M70.739,29.94H74.6L68.284,18.78l-1.947,3.375Z"
                                        transform="translate(20.383 5.763)" fill="#000" />
                                    <g id="Group_230" data-name="Group 230" transform="translate(0 0)">
                                        <g id="Group_229" data-name="Group 229" clip-path="url(#clip-path-top-logo)">
                                            <path id="Path_26" data-name="Path 26"
                                                d="M146.381,18.449,101.748,0l25.478,44.567a36.932,36.932,0,0,0,4.446,6.671v.144H102.681v-.144c0-.929-.646-3.086-2.584-6.458L96.87,39.074H93l6.885,12.164v.144h-28.2v-.144a41.385,41.385,0,0,0,4.445-6.671L88.116,23.594l5.032-8.8L60.137,1.149v.144c-1.58,1.506-3.16,4.519-3.16,10.12V41.123c0,5.6,1.58,8.609,3.16,10.116v.144H30.423v-.144c.724-1.507,1.44-4.519,1.44-10.116V27.952H28.275V41.123c0,5.6.716,8.609,1.432,10.116v.144H0L48.9,71.6H78.608v-.144c-.025-.055-.051-.127-.077-.184l.793.328h29.714v-.144a10.574,10.574,0,0,1-2.763-5.772l14.31,5.914h28.2v-.144l-.746-1.32,3.542,1.464h28.99v-.144a36.249,36.249,0,0,1-4.291-6.4L192.123,71.6h29.714v-.144c-.09-.188-.18-.4-.269-.638s-.176-.5-.261-.792-.166-.609-.243-.958c-.048-.221-.093-.476-.137-.72l6.388,2.64a11.713,11.713,0,0,0,2.441.955,20.468,20.468,0,0,0,3.227.6,37.551,37.551,0,0,0,4.135.206c1,0,1.947-.027,2.854-.076s1.768-.12,2.583-.209,1.583-.195,2.3-.314,1.391-.25,2.013-.389,1.192-.286,1.712-.437.989-.3,1.4-.454.778-.3,1.086-.446a6.568,6.568,0,0,0,.759-.405v-.144a2.594,2.594,0,0,1-.531-.406,3.892,3.892,0,0,1-.459-.55,6.08,6.08,0,0,1-.395-.655c-.12-.231-.231-.473-.332-.72s-.192-.5-.274-.748-.157-.5-.222-.735-.123-.469-.173-.685-.094-.417-.129-.6l-.135-.727-.135-.727-.133-.727-.135-.727-.135-.727-.135-.727-.133-.728-.135-.727c-.135-.727-.289-1.427-.473-2.1-.026-.1-.065-.179-.093-.273l39.077,16.151h.141l8.5-14.877L328.615,71.6H378.2l1.123-10.325L399.1,69.442a117.116,117.116,0,0,0,26.632,3.016c11.323,0,19.941-3.709,22.425-11.9l26.7,11.037h32.875v-.144c-1.938-1.506-3.878-4.519-3.878-10.116V41.187l15.928,6.583h.148L520,21.361,471.1,1.148l-.069,26.41h-.148L455.669,2.007h-.716V41.122c0,5.6,1.938,8.61,3.876,10.116v.144H425.956v-.144c1.938-1.506,3.876-4.518,3.876-10.116V2.007h-.716l-15.289,25.55h-.14V10.974L395.122,3.3l1.8,19.664h-.148C386.512,8.395,371.729,1.58,367.205,1.58c-1.432,0-1.791.358-1.791.86C365.415,7.1,400,16.577,400,35.162c0,11.845-9.683,17.084-23.175,17.084A117.187,117.187,0,0,1,350.2,49.23l-.569-23.253h.14C360.029,43.2,375.1,51.169,380.626,51.169c1.151,0,1.362-.5,1.362-.934,0-3.514-33.076-16.648-33.076-34.015A15.407,15.407,0,0,1,350.2,9.779l-.005.008L329.3,1.149,331.668,22.9h-.14L309.28,2.009h-1.293V25.9L319.4,13.418h.14V39.112h-.14L307.987,26.63V50.523h1.293l22.248-20.886h.14L329.3,51.383H279.714v-.144c1.572-1.507,3.152-4.519,3.152-10.116V11.412c0-4.534-.376-4.244-.376-4.244L267.924,1.148v.144a33.86,33.86,0,0,0-4.453,6.672L237.992,52.53h-.14L215.094,12.723,193.1,3.633a10.469,10.469,0,0,1,6.31,10.145c0,12.288-17.648,13.179-26.623,13.888v.393A91.276,91.276,0,0,1,187.5,27.99c8.4.785,10.767,4.951,11.841,10.761l1.074,5.816c.288,1.436,1,4.235,2.513,5.095v.144c-1.58,1.005-6.749,2.729-14.712,2.729-12.347,0-13.709-4.523-14.5-10.767L172.009,27.7H171.5V41.122c0,5.6.716,8.614,1.44,10.12v.144H143.222v-.144c1.58-1.506,3.16-4.522,3.16-10.12Z"
                                                transform="translate(0 0)" fill="#000" />
                                            <line id="Line_72" data-name="Line 72" x1="0.001"
                                                transform="translate(101.606 0)" fill="#000" />
                                            <path id="Path_27" data-name="Path 27"
                                                d="M181.275.879v.144c0,.931.576,2.942,2.585,6.458l11.312,19.983,1.945-3.372L184.826,2.347Z"
                                                transform="translate(55.643 0.27)" fill="#000" />
                                            <path id="Path_28" data-name="Path 28"
                                                d="M134.091,14.1c0-6.243-1-12.557-2.873-12.557V26.368c1.938,0,2.873-6.1,2.873-12.272"
                                                transform="translate(40.278 0.472)" fill="#000" />
                                            <path id="Path_29" data-name="Path 29"
                                                d="M23.066.88v.144c-.716,1.506-1.432,4.519-1.432,10.12V24.311h3.589V11.144c0-5.6-.716-8.614-1.44-10.12V.88h0v.144c.026.054.052.125.078.184Z"
                                                transform="translate(6.641 0.27)" fill="#000" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </h2> -->
                </div>
              <div class="top_scroll"><span></span></div>
            </div>
        </section>
        <!-- //top -->

        <!-- statement// -->
        <section class="statement js-offset-top">
            <div class="statement_container">
                <div class="statement_inner" data-ufade>
                    <div class="statement_content">
                        <p>
                            <span class="en">HARVEST</span>は広告<span class="tight">、</span><span class="en">MV</span><span class="tight">、</span>映画などの映像業界で活躍する<br class="pc-only" /><span class="katakana">シネマトグラファー</span>の<span class="katakana">マネジメントオフィス</span>です。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //statement -->

        <!-- member// -->
        <section class="member">
            <div class="member_container">
                <div class="member_wrapper">
                    <div class="member_heading">
                        <span></span>
                        <h2>Member</h2>
                    </div>

                    <div class="member_group">
                        <h3>CINEMATOGRAPHER</h3>
                        <div class="member_list">
                            <?php
                                $args = array(
                                    'role'    => 'author',
                                    'orderby' => 'ID',
                                    'order'   => 'ASC'
                                );
                                $users = get_users( $args );
                                if ( count($users) > 0 ) :
                                    foreach ( $users as $user ) :
                            ?>
                            <a href="<?= get_author_posts_url( $user->ID ); ?>" class="member_items" data-ufade>
                                <div class="member_jpname">
                                    <p class="last_name"><?= $user->last_name; ?></p>
                                    <p class="first_name"><?= $user->first_name; ?></p>
                                </div>
                                <div class="member_enname">
                                    <p><small>|　</small><?= $user->name_en; ?></p>
                                </div>
                            </a>
                            <?php 
                                    endforeach;
                                else: echo '<p class="nofound">No member found</p>';
                                endif;
                            ?>
                        </div>
                    </div>

                    <div class="member_group">
                        <h3>MANAGER</h3>
                        <div class="member_list">
                            <!-- ## -->
                            <a href="<?= home_url(); ?>" class="member_items --disabled" data-ufade>
                                <div class="member_jpname">
                                    <p class="last_name">入野</p>
                                    <p class="first_name">恵</p>
                                </div>
                                <div class="member_enname">
                                    <p><small>|　</small>Megumi Irino</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="member_bar"></div>

                    <div class="member_contact" data-ufade>
                        <a href="<?= home_url(); ?>/contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //member -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>