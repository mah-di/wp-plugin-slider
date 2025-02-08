<?php

final class Dependencies
{
	public function __construct()
	{
		require_once 'class-tgm-plugin-activation.php';

		add_action( 'plugins_loaded', [ $this, 'define_dependency_constants' ] );
	}

    public function define_dependency_constants() {
        $this->define_WooCommerce();
    }

    private function define_WooCommerce()
    {
        if ( class_exists( 'WooCommerce' ) )
            $is_active = true;

		else
            $is_active = false;

        define( 'MS_WC_IS_ACTIVE', $is_active );
    }
}

new Dependencies;
