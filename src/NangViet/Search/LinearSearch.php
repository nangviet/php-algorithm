<?php

namespace NangViet\Search;

class LinearSearch
{
    /**
     * Linear search algorithm find index of value in array
     *
     * @param array $array
     * @param mixed $value
     * 
     * @return int
     */
    public function search($array, $value)
    {
        $n = count($array);
        for ($i = 0; $i < $n; $i++) {
            if ($array[$i] == $value) {
                return $i;
            }
        }

        return -1;
    }
}
