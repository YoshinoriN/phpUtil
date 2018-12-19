<?php

class StringConverter
{
    /**
     * Convert string boolean value to 
     * 
     * @param string 'true' or 'false'. Also can specify uppercase.
     * @return boolean
     */
    public static function toBoolean(string $str): boolean
    {
        $lowerString = mb_strtolower($str);
        if (!in_array($lowerString, ['true', 'false'], true)) {
            throw new \InvalidArgumentException("Can not specify 'true' or 'false'. Also can specify uppercase.");
        }
        return ($lowerString === 'true') ? true : false;
    }
}