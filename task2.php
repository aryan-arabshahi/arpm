<?php

/**
 * The Collection class.
 */
class Collection
{
    /**
     * The data inputs.
     * 
     * @var array
     */
    private $data;

    /**
     * The max recursive depth.
     * 
     * @var int
     */
    private $MAX_RECURSIVE_DEPTH = 4;

    /**
     * The constructor.
     * 
     * @param array $data The data inputs.
     */
    function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * The count item.
     * 
     * @param mixed $item The item to count.
     * 
     * @return integer
     */
    public function countItem($item): int
    {
        $itemCount = 0;

        foreach ($this->data as $data)
        {
            $itemCount += $this->recursiveCountItem($data, $item);
        }

        return $itemCount;
    }

    /**
     * Recursive count item.
     * 
     * @param mixed   $data              The partial data.
     * @param mixed   $item              The item to count.
     * @param integer $maxRecursiveDepth The max recursive depth.
     * 
     * @return integer
     * @throws ERROR
     */
    private function recursiveCountItem($data, $item, int $maxRecursiveDepth = 0)
    {
        if ($maxRecursiveDepth > $this->MAX_RECURSIVE_DEPTH)
        {
            throw new ERROR('The max recursive depth has been exceeded');
        }

        $maxRecursiveDepth++;

        $itemCount = 0;

        if ( is_array($data) )
        {
            foreach ($data as $partialData)
            {
                $itemCount += $this->recursiveCountItem($partialData, $item, $maxRecursiveDepth);
            }
        }
        else
        {
            if ($data === $item)
            {
                $itemCount++;
            }
        }

        return $itemCount;
    }
}

$array = [
    'fruit' => ['apple', 'pear', 'strawberry', 'cheer' => ['one more level' => 'strawberry']],
    'red' => ['strawberry', 'cheer', 'tomato'],
    'sweet' => ['sugar', 'cake', 'strawberry'],
];

$collection = new Collection($array);

$count = $collection->countItem('strawberry');

echo 'The item count: ' . $count;
