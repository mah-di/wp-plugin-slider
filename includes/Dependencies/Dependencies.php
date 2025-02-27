<?php

final class Dependencies
{
	public function __construct()
	{
		add_action( 'plugins_loaded', [ $this, 'define_dependency_constants' ] );
	}

    public function define_dependency_constants() {
        $this->define_WooCommerce();
    }

    private function define_WooCommerce()
    {
        $is_active = false;

        if ( class_exists( 'WooCommerce' ) )
            $is_active = true;

        define( 'CS_WC_IS_ACTIVE', $is_active );
    }
}

new Dependencies;
