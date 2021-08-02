<?php

if (!defined('ABSPATH')) {
    die('Invalid request.');
}

/**
 * Home Custom Metaboxes
 *
 * @package construeficaz
 */

 class customHomeMetaboxes extends customCMB2Class
 {
     /**
      * Main Constructor.
      */
     public function __construct()
     {
         add_action('cmb2_admin_init', array($this, 'home_metaboxes'));
     }

     public function home_metaboxes()
     {
         /* --------------------------------------------------------------
            1.- HOME: SLIDER SECTION
        -------------------------------------------------------------- */
         $cmb_home_hero = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_hero_metabox',
            'title'         => esc_html__('Home: Hero Principal', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_hero->add_field(array(
            'id'        => parent::PREFIX . 'home_hero_image',
            'name'      => esc_html__('Imagen de Fondo del Hero', 'construeficaz'),
            'desc'      => esc_html__('Cargar un fondo para este Item', 'construeficaz'),
            'type'      => 'file',

            'options' => array(
                'url' => false
            ),
            'text'    => array(
                'add_upload_file_text' => esc_html__('Cargar fondo', 'construeficaz'),
            ),
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png'
                )
            ),
            'preview_size' => 'thumbnail'
        ));

         $cmb_home_hero->add_field(array(
            'id'        => parent::PREFIX . 'home_hero_subtext',
            'name'      => esc_html__('Sub-Texto de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto ubicado luego del hero', 'construeficaz'),
            'type'      => 'wysiwyg',
            'options'   => array(
                'textarea_rows' => get_option('default_post_edit_rows', 2),
                'teeny'         => false
            )
        ));

         /* --------------------------------------------------------------
             2.- HOME: PRIMER DESCANSO
         -------------------------------------------------------------- */
         $cmb_home_descanso1 = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_descanso_metabox',
            'title'         => esc_html__('Home: Primer Descanso', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_descanso1->add_field(array(
            'id'        => parent::PREFIX . 'home_descanso_logo',
            'name'      => esc_html__('Logo del Descanso', 'construeficaz'),
            'desc'      => esc_html__('Cargar un logo para esta sección', 'construeficaz'),
            'type'      => 'file',

            'options' => array(
                'url' => false
            ),
            'text'    => array(
                'add_upload_file_text' => esc_html__('Cargar logo', 'construeficaz'),
            ),
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png'
                )
            ),
            'preview_size' => 'thumbnail'
        ));

         $cmb_home_descanso1->add_field(array(
            'id'        => parent::PREFIX . 'home_descanso_text',
            'name'      => esc_html__('Texto de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este descanso', 'construeficaz'),
            'type'      => 'wysiwyg',
            'options'   => array(
                'textarea_rows' => get_option('default_post_edit_rows', 2),
                'teeny'         => false
            )
        ));

         $cmb_home_descanso1->add_field(array(
            'id'        => parent::PREFIX . 'home_descanso_btn_text',
            'name'      => esc_html__('Texto del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este botón', 'construeficaz'),
            'type'      => 'text'
        ));

         $cmb_home_descanso1->add_field(array(
            'id'        => parent::PREFIX . 'home_descanso_btn_link',
            'name'      => esc_html__('Link del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el link de este botón', 'construeficaz'),
            'type'      => 'text_url'
        ));

         /* --------------------------------------------------------------
             2.- HOME: SECCIÓN SERVICIOS
         -------------------------------------------------------------- */
         $cmb_home_services = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_services_metabox',
            'title'         => esc_html__('Home: Sección de Servicios', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_services->add_field(array(
            'id'        => parent::PREFIX . 'home_services_image',
            'name'      => esc_html__('Imagen de Fondo de Sección', 'construeficaz'),
            'desc'      => esc_html__('Cargar una Imagen para esta sección', 'construeficaz'),
            'type'      => 'file',

            'options' => array(
                'url' => false
            ),
            'text'    => array(
                'add_upload_file_text' => esc_html__('Cargar Imagen', 'construeficaz'),
            ),
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png'
                )
            ),
            'preview_size' => 'thumbnail'
        ));

         $cmb_home_services->add_field(array(
            'id'        => parent::PREFIX . 'home_services_text',
            'name'      => esc_html__('Texto de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este descanso', 'construeficaz'),
            'type'      => 'wysiwyg',
            'options'   => array(
                'textarea_rows' => get_option('default_post_edit_rows', 2),
                'teeny'         => false
            )
        ));

         $cmb_home_services->add_field(array(
            'id'        => parent::PREFIX . 'home_services_btn_text',
            'name'      => esc_html__('Texto del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este botón', 'construeficaz'),
            'type'      => 'text'
        ));

         $cmb_home_services->add_field(array(
            'id'        => parent::PREFIX . 'home_services_btn_link',
            'name'      => esc_html__('Link del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el link de este botón', 'construeficaz'),
            'type'      => 'text_url'
        ));

         /* --------------------------------------------------------------
             3.- HOME: SECCIÓN TESTIMONIOS
         -------------------------------------------------------------- */
         $cmb_home_test = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_test_metabox',
            'title'         => esc_html__('Home: Sección de Testimonios', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $group_field_id = $cmb_home_test->add_field(array(
            'id'            => parent::PREFIX . 'home_test_group',
            'name'          => esc_html__('Grupos de Testimonios', 'construeficaz'),
            'description'   => __('Testimonios dentro de la Sección', 'construeficaz'),
            'type'          => 'group',
            'options'       => array(
                'group_title'       => __('Testimonio {#}', 'construeficaz'),
                'add_button'        => __('Agregar otro Testimonio', 'construeficaz'),
                'remove_button'     => __('Remover Testimonio', 'construeficaz'),
                'sortable'          => true,
                'closed'            => true,
                'remove_confirm'    => esc_html__('¿Estas seguro de remover este Testimonio?', 'construeficaz')
            )
        ));
        
         $cmb_home_test->add_group_field($group_field_id, array(
            'id'        => 'icon',
            'name'      => esc_html__('Ícono del Testimonio', 'construeficaz'),
            'desc'      => esc_html__('Cargar un Ícono para este Testimonio', 'construeficaz'),
            'type'      => 'file',
            'options'   => array(
                'url'   => false
            ),
            'text'      => array(
                'add_upload_file_text' => esc_html__('Cargar Ícono', 'construeficaz'),
            ),
            'query_args' => array(
                'type'  => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png'
                )
            ),
            'preview_size' => 'thumbnail'
        ));
        
         $cmb_home_test->add_group_field($group_field_id, array(
            'id'        => 'name',
            'name'      => esc_html__('Nombre de la Persona', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el nombre de la persona del testimonio', 'construeficaz'),
            'type'      => 'text'
        ));

         $cmb_home_test->add_group_field($group_field_id, array(
            'id'        => 'desc',
            'name'      => esc_html__('Texto del testimonio', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este testimonio', 'construeficaz'),
            'type'      => 'wysiwyg',
            'options'   => array(
                'textarea_rows' => get_option('default_post_edit_rows', 2),
                'teeny'         => false
            )
        ));

         /* --------------------------------------------------------------
             4.- HOME: SECCIÓN PARTNERS
         -------------------------------------------------------------- */
         $cmb_home_partners = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_partners_metabox',
            'title'         => esc_html__('Home: Sección de Partners', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_partners->add_field(array(
            'id'        => parent::PREFIX . 'home_partners_logos',
            'name'      => esc_html__('Listado de Logos', 'construeficaz'),
            'desc'      => esc_html__('Agregue los logos para agregar en este slider', 'construeficaz'),
            'type' => 'file_list',
            'preview_size' => array( 100, 100 ),
            'query_args' => array( 'type' => 'image' ),
            'text' => array(
                'add_upload_files_text' => esc_html__('Agregar o Cargar Logos', 'construeficaz'),
                'remove_image_text' => esc_html__('Remover Logo', 'construeficaz'),
                'file_text' => esc_html__('Logo:', 'construeficaz'),
                'file_download_text' => esc_html__('Descargar', 'construeficaz'),
                'remove_text' => esc_html__('Remover', 'construeficaz')
            )
        ));

         /* --------------------------------------------------------------
              5.- HOME: SECCIÓN BLOG
          -------------------------------------------------------------- */
         $cmb_home_blog = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_blog_metabox',
            'title'         => esc_html__('Home: Sección de Blog', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_blog->add_field(array(
            'id'        => parent::PREFIX . 'home_blog_text',
            'name'      => esc_html__('Texto de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de esta sección', 'construeficaz'),
            'type'      => 'wysiwyg',
            'options'   => array(
                'textarea_rows' => get_option('default_post_edit_rows', 2),
                'teeny'         => false
            )
        ));

         $cmb_home_blog->add_field(array(
            'id'        => parent::PREFIX . 'home_blog_btn_text',
            'name'      => esc_html__('Texto del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el texto de este botón', 'construeficaz'),
            'type'      => 'text'
        ));

         $cmb_home_blog->add_field(array(
            'id'        => parent::PREFIX . 'home_blog_btn_link',
            'name'      => esc_html__('Link del boton de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el link de este botón', 'construeficaz'),
            'type'      => 'text_url'
        ));

         /* --------------------------------------------------------------
             6.- HOME: SECCIÓN EQUIPO
         -------------------------------------------------------------- */
         $cmb_home_equipo = new_cmb2_box(array(
            'id'            => parent::PREFIX . 'home_equipo_metabox',
            'title'         => esc_html__('Home: Sección de Equipo', 'construeficaz'),
            'object_types'  => array('page'),
            'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'cmb_styles'    => true,
            'closed'        => false
        ));

         $cmb_home_equipo->add_field(array(
            'id'        => parent::PREFIX . 'home_equipo_title',
            'name'      => esc_html__('Título de la Sección', 'construeficaz'),
            'desc'      => esc_html__('Ingrese el titulo de esta Sección', 'construeficaz'),
            'type'      => 'text'
        ));
     }
 }

new customHomeMetaboxes;
