<?php

if (!function_exists('db') && class_exists('Leaf\App')) {
    /**
     * Return the database object
     *
     * @return \Leaf\Db
     */
    function db()
    {
        if (!(\Leaf\Config::get($instance = "db.instance"))) {
            \Leaf\Config::set($instance, new \Leaf\Db());
        }

        return \Leaf\Config::get($instance);
    }
}
