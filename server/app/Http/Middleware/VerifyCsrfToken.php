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
      'https://aws.dymed-back-server.dev/articles/store',
      'https://aws.dymed-back-server.dev/articles/update/*',
      'https://aws.dymed-back-server.dev/articles/onAvant/*',
      'https://aws.dymed-back-server.dev/articles/delete/*',
      'https://aws.dymed-back-server.dev/articles/stock/*',
      'https://aws.dymed-back-server.dev/register',
      'https://aws.dymed-back-server.dev/login',
      'https://aws.dymed-back-server.dev/categories/store',
      'https://aws.dymed-back-server.dev/categories/update/*',
      'https://aws.dymed-back-server.dev/categories/delete/*',
      'https://aws.dymed-back-server.dev/detail/store',
      'https://aws.dymed-back-server.dev/detail/update/*',
      'https://aws.dymed-back-server.dev/detail/delete/*',
      'https://aws.dymed-back-server.dev/cart/delete/*',
      'https://aws.dymed-back-server.dev/cart/store',
      'https://aws.dymed-back-server.dev/cart/delete/*',
      'https://aws.dymed-back-server.dev/cart/deletePanier/*',
      'https://aws.dymed-back-server.dev/cart/update/*',
      'https://aws.dymed-back-server.dev/searchbar',
      'https://aws.dymed-back-server.dev/producteurs/store',
      'https://aws.dymed-back-server.dev/producteurs/update/*',
      'https://aws.dymed-back-server.dev/producteurs/delete/*',
      'https://aws.dymed-back-server.dev/commandeProd/store',
      'https://aws.dymed-back-server.dev/commandeProd/update/*',
      'https://aws.dymed-back-server.dev/commandeProd/delete/*',
      'https://aws.dymed-back-server.dev/transporteurs/store',
      'https://aws.dymed-back-server.dev/transporteurs/update/*',
      'https://aws.dymed-back-server.dev/transporteurs/delete/*',
      'https://aws.dymed-back-server.dev/expeditions/store',
      'https://aws.dymed-back-server.dev/expeditions/update/*',
      'https://aws.dymed-back-server.dev/expeditions/delete/*',
      'https://aws.dymed-back-server.dev/adresses/store',
      'https://aws.dymed-back-server.dev/adresses/update/*',
      'https://aws.dymed-back-server.dev/adresses/delete/*',
      'https://aws.dymed-back-server.dev/carte_bleues/store',
      'https://aws.dymed-back-server.dev/carte_bleues/update/*',
      'https://aws.dymed-back-server.dev/carte_bleues/delete/*',
      'https://aws.dymed-back-server.dev/commandes_clients/store',
      'https://aws.dymed-back-server.dev/commandes_clients/update/*',
      'https://aws.dymed-back-server.dev/commandes_clients/delete/*',
      'https://aws.dymed-back-server.dev/cart/shipping/*',
      'https://aws.dymed-back-server.dev/users/update/*',
      'https://aws.dymed-back-server.dev/users/delete/*',
      'https://aws.dymed-back-server.dev/users/getByToken/*',
      'https://aws.dymed-back-server.dev/users/addMonth/*',
      'https://aws.dymed-back-server.dev/users/addYear/*',
      'https://aws.dymed-back-server.dev/search/prop',
    ];
}
