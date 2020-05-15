<?php

    class Job
    {
        private $db;
        
        public function __construct() 
        { 
            $this->db = new Database; 
        }

        // GET ALL JOBS 
        public function getAllJobs()
        {
            $this ->db->query("SELECT jobs.*, categories.name AS cname 
            FROM jobs INNER JOIN categories ON jobs.category_id = categories.id 
            ORDER BY post_date DESC");
            $results = $this->db->resultSet();
            return $results;
        }

        // GET ALL CATEGORIES
        public function getCategories()
        {
            $this ->db->query("SELECT * FROM categories");
            $results = $this->db->resultSet();
            return $results;
        }

        // GET JOBS BY CATEGORY
        public function getByCategory($category)
        {
            $this ->db->query("SELECT jobs.*, categories.name AS cname 
            FROM jobs INNER JOIN categories ON jobs.category_id = categories.id 
            WHERE jobs.category_id = $category 
            ORDER BY post_date DESC");
            $results = $this->db->resultSet();
            return $results;
        }

        // GET CATEGORY TITLE
        public function getCategory($category_id)
        {
            $this->db->query("SELECT * FROM categories WHERE id= :category_id");
            $this->db->bind(":category_id", $category_id);
            $row=$this->db->single();
            return $row;
        }

        public function getJob($id)
        {
            $this->db->query("SELECT * FROM jobs WHERE id= :id");
            $this->db->bind(":id", $id);
            $row=$this->db->single();
            return $row;
        }

        


    }



// NON-OBJECT PROBLEM STOP SO FAR




?>