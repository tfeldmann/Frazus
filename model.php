<?php

require_once("prevent_injections.php");

class Model
{
    /**
     * Setup database connection
     */
    function __construct()
    {
        include_once("config.php");
        $mysqlConnect = mysql_connect($db_loc, $db_user, $db_pass) or die(mysql_error());
        mysql_select_db($db_name) or die(mysql_error());
        mysql_query('set character set utf8;') or die(mysql_error());
    }


    /**
     * Adds a question. If the chosen category doesn't exist it will be
     * created.
     * @param [type] $category [description]
     * @param [type] $question [description]
     * @param [type] $answer   [description]
     */
    function add_question($category, $question, $answer)
    {
        // category
        $query = mysql_query("SELECT id
                                FROM categories
                               WHERE name = '$category'
                               LIMIT 1");
        if (!$query) return false;

        if (mysql_num_rows($query) == 0)
        {
            $category_id = $this->add_category($category);
        }
        else
        {
            $id = mysql_fetch_array($query);
            $category_id = $id[0];
        }

        // insert question and answer
        $query = mysql_query(
            "INSERT INTO questions (question, answer, category)
                  VALUES ('$question', '$answer', $category_id)");
        if (!$query) return false;

        return true;
    }


    /**
     * List all available categories
     * @return array list of all categories
     */
    function list_categories()
    {
        $categories = array();
        $query = mysql_query("SELECT name FROM categories");
        while ($category = mysql_fetch_array($query))
        {
            $categories[] = $category['name'];
        }
        return $categories;
    }


    /**
     * Add a category
     * @param string $name name of new category
     * @return id of inserted category
     */
    function add_category($name)
    {
        $query = mysql_query("INSERT INTO categories SET name = '$name'");
        return mysql_insert_id();
    }
}
