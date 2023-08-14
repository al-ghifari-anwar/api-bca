<?php

namespace com\bca\openapi\client\utils;

use Exception;
use ReflectionClass;

class JsonMapper
{

    public function parse($source, &$destination)
    {
        if (is_array($source)) {
            $getClass = get_class($destination[0]);
            //echo "\n=======array class ".$getClass."=======\n";
            $array = array();
            foreach ($source as $sourceItem) {
                $obj = new $getClass();
                $this->parse($sourceItem, $obj);
                $array[] = $obj;
            }
            $destination = $array;
        } else {
            if ($source != null) {
                $sourceReflection = new \ReflectionObject($source);
                $sourceProperties = $sourceReflection->getProperties();
                foreach ($sourceProperties as $sourceProperty) {
                    try {
                        $name = $sourceProperty->getName();
                        if (is_object(@$destination->{$name})) {
                            // echo "\n=======process object ".$name."=======\n";
                            $this->parse($source->$name, $destination->{$name});
                        } elseif (is_array(@$destination->{$name})) {
                            //echo "\n=======process array ".$name."=======\n";
                            $this->parse($source->$name, $destination->{$name});
                        } else {
                            //echo "\n=======process primitive ".$name."=======\n";
                            $destination->{$name} = $source->$name;
                        }
                    } catch (Exception) {
                    }
                }
            }
        }
    }
}
