<?php

/**
 * ZF-Disqus - Interface for ZendX_Disqus_Endpoints_*
 *
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2013
 * @version    1.0
 * @license    BSD
 */
interface ZendX_Disqus_Interfaces_Endpoint
{

    public function getData ();

    public function getUrl ();
}