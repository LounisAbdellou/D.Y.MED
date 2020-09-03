<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/articles/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/articles/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/articles/onAvant/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/articles/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/articles/stock/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/register',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/login',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/categories/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/categories/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/categories/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/detail/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/detail/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/detail/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/deletePanier/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/searchbar',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/producteurs/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/producteurs/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/producteurs/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandeProd/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandeProd/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandeProd/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/transporteurs/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/transporteurs/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/transporteurs/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/expeditions/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/expeditions/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/expeditions/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/adresses/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/adresses/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/adresses/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/carte_bleues/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/carte_bleues/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/carte_bleues/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandes_clients/store',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandes_clients/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/commandes_clients/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/cart/shipping/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/users/update/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/users/delete/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/users/getByToken/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/users/addMonth/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/users/addYear/*',
      'http://ec2-18-218-191-39.us-east-2.compute.amazonaws.com/search/prop',
    ];
}
