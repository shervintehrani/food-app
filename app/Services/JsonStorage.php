<?php


namespace App\Services;


class JsonStorage
{
    /**
     * Generate full path of a JSON file
     */
    private function path($file)
    {
        return storage_path("app/data/{$file}.json");
    }


    /**
     * Read JSON file and return as array
     */
    public function read($file)
    {
        if (!file_exists($this->path($file))) {
            return [];
        }


        return json_decode(file_get_contents($this->path($file)), true);
    }


    /**
     * Write array data into JSON file
     */
    public function write($file, $data)
    {
        file_put_contents(
            $this->path($file),
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }
}
