<?php

/**
 * Class ImageSize
 * améliorations possibles :
 *  mettre en static et renvoyer l'instance à chaque fois pour créer à la volé
 *  utiliser les namespaces
 *  utiliser l'autoload
 */
class ImageSize {

	private $slug;
	private $description;
	private $width;
	private $height;
	
	public function __construct( $slug, $description, $width, $height ) 
	{
		$this->slug = $slug;
		$this->description = $description;
		$this->width = $width;
		$this->height = $height;

		add_action( 'after_setup_theme', [ $this, 'awesomeflat_setup' ] );

		add_filter( 'image_size_names_choose', [ $this, 'my_image_sizes' ] );


	}

	public function awesomeflat_setup()
	{
		add_theme_support( 'post-thumbnails' );
		add_image_size( $this->slug, $this->width, $this->height, array( 'center', 'center')  );
	}


	public function my_image_sizes($sizes)
	{
		$addsizes = array(
			"{$this->slug}" => __( "{$this->description}")
		);
		$newsizes = array_merge($sizes, $addsizes);
		return $newsizes;
	}

}
