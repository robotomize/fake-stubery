<?php


namespace stubzero;

/**
 * Class Generator
 *
 * @package stubzero
 * @author robotomize@gmail.com
 */
class Generator
{
    public static function code($path)
    {
        $crawler = new ClassCrawler($path);
        $crawler->start();
        $files = $crawler->getFiles();

        foreach ($files as $filename) {
            require_once $filename;
            $t = explode(".",$filename);
            $obj = strtolower($t[1]);
            $class = ucfirst($t[1]);
            ${$obj} = new $class();
            var_dump(${$obj});
        }
    }

    /**
     * @param array $classes
     *
     * @return array
     */
    public static function generateSmartCollection(array $classes)
    {
        return self::pullToCollection($classes, 'generateSmart');
    }

    /**
     * @param array $classes
     *
     * @return array
     */
    public static function generateQuickCollection(array $classes)
    {
        return self::pullToCollection($classes, 'generateQuick');
    }

    /**
     * @param $className
     * @return mixed
     * @throws Exception\StubZeroException
     */
    public static function generateSmart($className)
    {
        $creator = new Creator($className);
        $creator->setType(Creator::LEXICAL_TYPE);
        $creator->start();

        return $creator->getFoundModel();
    }

    /**
     * @param $className
     * @return mixed
     * @throws Exception\StubZeroException
     */
    public static function generateQuick($className)
    {
        $creator = new Creator($className);
        $creator->setType(Creator::VAR_TYPE);
        $creator->start();

        return $creator->getFoundModel();
    }

    /**
     * @param array $classes
     * @param       $methodName
     *
     * @return array
     */
    private static function pullToCollection(array $classes, $methodName)
    {
        $objectCollection = [];

        foreach ($classes as $name) {
            $objectCollection[] = $methodName($name);
        }
        return $objectCollection;
    }
}
