<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 23.02.2018
 * Time: 22:35
 */

namespace Corp\Repositories;
use Corp\Comment;


class CommentsRepository extends Repository
{

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }
}