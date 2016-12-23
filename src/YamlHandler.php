<?php

namespace RBDTools;

use Symfony\Component\Yaml\Yaml;

class YamlHandler implements YamlHandlerInterface
{
    /**
     * instance of Symphony YAML
     * @var Symfony\Component\Yaml\Yaml
     */
    protected $yaml;

    public function __construct()
    {
        $this->yaml = new Yaml();
    }

    /**
     * reads from yaml file
     *
     * @param  string $filename
     * @return array
     */
    public function read($filename)
    {
        return $this->yaml->parse(file_get_contents($filename));
    }

    /**
     * writes array to yaml file
     *
     * @param  array $datas
     * @param  string $filename
     * @return void
     */
    public function write($data, $filename)
    {
        $yamlData = $this->yaml->dump($data);

        file_put_contents($filename, $yamlData);
    }
}
