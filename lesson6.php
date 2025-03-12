<?php

interface CanBeLiked
{
    public function like();
    public function isLiked();
}

class Post implements CanBeLiked
{
    public function like()
    {
        echo 'Like the post';
    }

    public function isLiked()
    {
        return false;
    }
}

class Comment implements CanBeLiked
{
    public function like()
    {
        echo 'Like the comment';
    }

    public function isLiked()
    {
        return false;
    }
}

class Thread implements CanBeLiked
{
    public function like()
    {
        echo 'Like the thread';
    }

    public function isLiked()
    {
        return false;
    }
}

class PerformLike
{
    public function handle($model)
    {
        if ($model->isLiked()) {
            return;
        }

        $model->like();
    }
}


(new PerformLike())->handle(new Comment);
echo "\n";
(new PerformLike())->handle(new Post);
echo "\n";
(new PerformLike())->handle(new Thread);