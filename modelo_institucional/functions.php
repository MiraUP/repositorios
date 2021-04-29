<?php 
    
    /** Criar função para puxar as folhas de estilos */
    function load_scripts() { /* Iniciar a função load_scripts */
        
        /** Folha de estilo do MaterializeCSS */
        wp_enqueue_style(
            'materializecss', 
            get_template_directory_uri() . '/assets/sass/materialize.css',
            array (),
            '1.0',
            'all'
        ); 

        /** Icones */
        wp_enqueue_style(
            'font-awesome', 
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
            array (),
            '5.15.3',
            'all'
        ); 

        wp_enqueue_style( /* Inicia o Hook enqueue_style para enfileirar os estilos */
            'style', 
            get_template_directory_uri() . '/assets/css/style.css', /* Aponta o diretório da pasta do tema*/
            array (), /* Usar o array caso o estilo tenha dependencias de outros estilos */
            '1.0', /* Versão do estilo. A versão poderá ser vista no código fonte */
            'all' /* Tipo de mídia [print, screen ou all] */
        ); 



        /** Criar função para puxar os scritp js */
        wp_enqueue_script(
            'materializecss',
            'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
            array ('jquery'), /* usa o jquery nativo do wordpress */
            '1.0.0',
            true /* Adiciona no footer e não no header */
        );

        /** Script para iniciar funções */
        wp_enqueue_script(
            'init',
            get_template_directory_uri() . '/assets/js/_init.js',
            array (),
            '1.0',
            true
        );
    }

    add_action( 'wp_enqueue_scripts', 'load_scripts' ); /* Inicia a function de estilos */


    //Função de configuração do tema
    function modelomiraup_config() {
        //Registrando o Menu
        register_nav_menus(
            array(
                'main_menu' => 'Main Menu', /* Nome curto do menu [Slug] */
                'footer_menu' => 'Footer Menu'
            )
        );

        //Adicionando suporte ao tema
        $args = array (
            'height'    => '225',
            'width'     =>  '1920'
        );
        add_theme_support( 'custom-header', $args );

        // Adicionando imagens em miniaturas nos posts
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'modelomiraup_config', 0 );
