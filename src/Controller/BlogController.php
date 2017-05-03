<?php

namespace Controller;

use Doctrine\DBAL\Connection;
use Silex\Application;

/**
 * Created by PhpStorm.
 * User: default
 * Date: 5/3/2017
 * Time: 4:32 PM
 */
class BlogController
{
    public function indexAction(Application $app)
    {

        /** @var \Twig_Environment $twig */
        $twig = $app['twig'];
        return $twig->render('blog.twig');
    }
    public function showPostAction(Application $app, $id)
    {
    /** @var \Twig_Environment $twig */
    $twig = $app['twig'];
    /** @var Connection $conn */
    $conn = $app['db'];
     $sql = "SELECT * FROM posts WHERE id = $id";
     $post = $app['db']->fetchAssoc($sql);

    return $twig->render('blog-post.twig', [
        'post'=>$post,  //передаем массив в шаблон
    ]);
}
}