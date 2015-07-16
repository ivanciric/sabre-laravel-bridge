<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/16/15
 * Time: 4:17 PM
 */

namespace Emcodenet\SabreLaravelBridge;


class FileDB {

    const DB_PATH = "db/";
    private $path;
    private $data = array();
    private static $entities = array();
    public function __construct($path)
    {
        $this->path = $path;
    }
    public static function entity($name)
    {
        $p = self::DB_PATH . $name . ".db";
        if (!file_exists($p)) {
            if (!file_exists(dirname($p))) {
                mkdir(dirname($p), 0755, true);
            }
            $h = touch($p);
        }
        if(!empty(self::$entities[$name])) {
            $db = self::$entities[$name];
        }
        else {
            $db = new FileDB($p);
            $db->readData();
            self::$entities[$name] = $db;
        }
        return $db;
    }
    public function get($key)
    {
        return $this->data[$key];
    }
    public function all()
    {
        return $this->data;
    }
    public function filter($key, $value){
        $col = new Collection();
        foreach($this->data as $row){
            if(isset($row[$key]) && Utils::startsWith($row[$key], $value)){
                $col->addItem($row);
            }
        }
        return $col->items;
    }
    public function filterOne($key, $value){
        foreach($this->data as $row){
            if(isset($row[$key]) && $row[$key]===$value){
                return $row;
            }
        }
        return null;
    }
    public function put($key, $value)
    {
        $this->data[$key] = $value;
        $this->writeData();
    }
    private function readData()
    {
        $this->data = json_decode(file_get_contents($this->path), true);
    }
    private function writeData()
    {
        file_put_contents($this->path, json_encode($this->data));
    }

}