<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 5/10/2017
 * Time: 4:50 PM
 */

namespace Controller;


use Silex\Application;

class AdminBlogController
{
    public function deletePostAction(Application $app, $id)
    {
    /** @var Connection $conn */
    $conn = $app['db'];
    $sql = "DELETE FROM posts WHERE id=:post_id";
    $conn ->executeQuery($sql, [
        'post_id'=>$id,
    ]);

        return $app->redirect('/php/index.php');
    }
}