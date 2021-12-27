<?php

    class Posts extends Dbh {
        public function getPost() {
            $sql = "SELECT * FROM posts";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while ($result = $stmt->fetchAll()) {
                return $result;
            }
        }

        public function addPost($title, $content, $author) {
            $sql = "INSERT INTO posts(title, content, author) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $content, $author]);
        }

        public function editPost($id) {
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        public function updatePost($title, $content, $author, $id) {
            $sql = "UPDATE posts SET title = ?, content = ?, author = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $content, $author, $id]);
        }

        public function delPost($id) {
            $sql = "DELETE FROM posts WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
