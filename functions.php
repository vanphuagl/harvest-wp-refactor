<?php
    /** Define */
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );
    /** Hook */

    // initialize custom settings for the website
    function initTheme() {
        // change the editor to old version
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('gutenberg_use_widgets_block_editor', '__return_false');
        add_filter('use_widgets_block_editor', '__return_false');
    }

    /** Functions */

    function remove_menus() {
        remove_menu_page( 'edit.php' );// 投稿.
		
		if ( current_user_can( 'editor' ) ) {// 投稿者の場合
			remove_menu_page( 'edit.php?post_type=page' ); // 固定.
			remove_menu_page( 'edit-comments.php' ); // コメント.
			remove_menu_page( 'tools.php' ); // ツール.
		}
    }

    function remove_admin_bar_menus( $wp_admin_bar ) {

			$wp_admin_bar->remove_menu( 'comments' ); // コメント.
			$wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
	
	}

    function create_post_type() {
        register_post_type(
            'works',
            array(
                'label' => 'Works',
                'labels' => array(
                    'all_items' => 'Works一覧',
                    'add_new' => '新規追加',
                    'add_new_item' => 'Works追加',
                    'edit_item' => 'Works編集',
                    'new_item' => 'Works追加',
                    'view_item' => 'Worksビュー',
                    'search_items' => 'Works検索',
                    'not_found' => '見つかりません',
                    'not_found_in_trash' => 'ゴミ箱に見つかりません',
                ),
                // 'public' => true,
                'has_archive' => true,
                'menu_position' => 2,
                'supports' => [ 'title', 'thumbnail', 'editor' ],
            )
        );	
    }
    
    function create_taxonomy() {
        $labels = array(
            'name' => _x( 'カテゴリー', 'taxonomy general name' ),
            'singular_name' => _x( 'カテゴリー', 'taxonomy singular name' ),
            'search_items' =>  __( 'カテゴリー検索' ),
            'popular_items' => __( '人気のカテゴリ' ),
            'all_items' => __( 'カテゴリー一覧' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'カテゴリー編集' ), 
            'update_item' => __( 'カテゴリーの更新' ),
            'add_new_item' => __( 'カテゴリー新規追加' ),
            'menu_name' => __( 'カテゴリー' ),
        );
        
        // register_taxonomy('services', 'services' ,array(
        //     'labels'                     => $labels,
        //     'hierarchical'               => true,
        //     'rewrite'                    => array('slug' => 'services', 'with_front' => true),
        //     'public'                     => true,
        //     'show_ui'                    => true,
        //     'show_admin_column'          => true,
        //     'show_in_nav_menus'          => true,
        //     'show_tagcloud'              => true,
        // ));
    }
    
    function pagination_tdc($post_type, $wp_query, $paged, $cat = "", $filter = "") {
        if( $wp_query->max_num_pages <= 1 ) return;

        $paged = $paged;
        $max = intval( $wp_query->max_num_pages );
       
        if ( $paged >= 1 ) $links[] = $paged;

        if ( $paged >= 3 ) {
               $links[] = $paged - 1;
               $links[] = $paged - 2;
        }
       
        if ( ( $paged + 2 ) <= $max ) {
               $links[] = $paged + 2;
               $links[] = $paged + 1;
        }

        $html = '';
        $html .= '<div class="c-pagination" data-cat="'.$cat.'" role="navigation">' . "\n";
        
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, 1, $filter).'" >1</a>';
            } else {
                $html .= '<a '.$class.'>1</a>';
            }
            if ( ! in_array( 2, $links ) )
                $html .= '<a>…</a>';
        }
        sort( $links );

        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, $link, $filter).'">'.$link .'</a>' . "\n";
            } else {
                $html .= '<a '.$class.'>'. $link .'</a>';
            }
        }

        if (!in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) ) $html .= '<a class="item">…</a>' . "\n";
            // $class = $paged == $max ? ' class="item"' : '';
            $html .= '<a class="item" href="'.build_url($post_type, $cat, $max, $filter).'">'.$max.'</a>';
        }

        $html .= '</div>' . "\n";
        return $html;
    }
    
    function build_url($post_type, $cat, $paged, $filter){
        if ($cat) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?cate='.$cat;
        } elseif ($filter) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?'.$filter;
        } else {
            $url = home_url('/'.$post_type.'/page/'.$paged);
        }
        return $url;
    }

    //
    function add_page_to_admin_menu() {
        add_menu_page( 'Services', 'Services', 'manage_categories', 'post.php?post=14&action=edit', '','dashicons-admin-post', 2);
        add_menu_page( 'Bespoke', 'Bespoke', 'manage_categories', 'post.php?post=16&action=edit', '','dashicons-admin-post', 3);
        add_menu_page( 'Exhibition', 'Exhibition', 'manage_categories', 'post.php?post=18&action=edit', '','dashicons-admin-post', 4);
    }
    // add_action( 'admin_menu', 'add_page_to_admin_menu' );

    add_action('init', 'initTheme');
    add_theme_support('post-thumbnails', array('post'));
    // add_action( 'admin_menu', 'remove_menus' );
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );
    // add_action('init', 'create_post_type');
    add_action( 'init', 'create_taxonomy', 0 );

    // ## pasword protected
    add_filter( 'protected_title_format', 'remove_protected_text' );
    function remove_protected_text() {
        return '%s';
    }
    add_filter( 'ppwp_customize_password_form', 'customize_pwd_form', 10, 3 );
    function customize_pwd_form( $element, $post_id, $wrong_password_message ) {
      $label  = 'pwbox-' . ( empty( $post_id ) ? rand() : $post_id );
      $home_url = home_url();
      $custom_elements = '
        <div class="detail_pass js-password">
            <div class="detail_pass_form unlock-form">' . $wrong_password_message . '
                <label class="pass-label" for="' . $label . '">' . __( "パスワードを入力してください" ) . ' </label>
                <input name="post_password" id="' . $label . '" type="password" placeholder="" required autofocus />
                <input type="submit" name="Submit" value="' . esc_attr__( "送信" ) . '" />
            </div>
            <div class="detail_pass_notes">
                ※ こちらの動画はパスワードが必要です。<br />
                動画の視聴をご希望の方は<a href="'. $home_url .'/contact/password">こちら</a>よりパスワードを請求してください。
            </div>
        </div>';
        return $custom_elements;
    }

    function custom_password_cookie() {
        if (!empty($_POST['post_password'])) {
            // ユーザーが入力したパスワードを取得
            $password = sanitize_text_field($_POST['post_password']);
    
            // ヘッダーがすでに送信されていないかチェック
            if (!headers_sent()) {
                // 1日（24時間）有効なクッキーを設定（SecureとHttpOnly追加）
                setcookie('wp-postpass_' . COOKIEHASH, $password, time() + 3600 * 24, COOKIEPATH, COOKIE_DOMAIN, false, true);
            }
    
            // 現在のページにリダイレクト（投稿ページに留まる）
            wp_safe_redirect($_SERVER['REQUEST_URI']);
            exit;
        }
    }
    add_action('wp', 'custom_password_cookie');
    
    

    // add_action('init', function() {
    //     remove_post_type_support('works', 'editor');
    //     remove_post_type_support('page', 'editor');
    // }, 99);