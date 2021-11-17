<?php
declare(strict_types=1);

namespace App\Rank;

/**
 * Inspired by Alex Crawford and his PHP implementation.
 *
 * @link https://github.com/alexcrawford/lexorank-php
 * @link https://github.com/xissy/lexorank
 */
class Rank
{
    /**
     * @var string
     */
    protected const MIN_CHAR = '0';

    /**
     * @var string
     */
    protected const MAX_CHAR = 'z';

    /**
     * @var string
     */
    protected $prev;

    /**
     * @var string
     */
    protected $next;

    /**
     * @param string $prev
     * @param string $next
     */
    public function __construct(string $prev, string $next)
    {
        $this->setPrev($prev);
        $this->setNext($next);
    }

    /**
     * @param string $prev
     *
     * @return void
     */
    protected function setPrev(string $prev)
    {
        $this->prev = $prev === '' ? static::MIN_CHAR : $prev;
    }

    /**
     * @param string $next
     *
     * @return void
     */
    protected function setNext(string $next)
    {
        $this->next = $next === '' ? static::MAX_CHAR : $next;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        $rank = '';
        $i = 0;

        while (true) {
            $prevChar = $this->getChar($this->prev, $i, self::MIN_CHAR);
            $nextChar = $this->getChar($this->next, $i, self::MAX_CHAR);

            if ($prevChar === $nextChar) {
                $rank .= $prevChar;
                $i++;

                continue;
            }

            $midChar = $this->midChar($prevChar, $nextChar);
            if (in_array($midChar, [$prevChar, $nextChar], true)) {
                $rank .= $prevChar;
                $i++;

                continue;
            }

            $rank .= $midChar;

            break;
        }

        return $rank;
    }

    /**
     * @param string $s
     * @param int $i
     * @param string $defaultChar
     *
     * @return mixed|string
     */
    protected function getChar(string $s, int $i, string $defaultChar)
    {
        return $s[$i] ?? $defaultChar;
    }

    /**
     * @param string $prev
     * @param string $next
     *
     * @return string
     */
    protected function midChar(string $prev, string $next)
    {
        $ordPrev = ord($prev);
        $ordNext = ord($next);
        if ($ordPrev > $ordNext) {
            return $prev;
        }

        $number = (int)(($ordPrev + $ordNext) / 2);

        return chr($number);
    }
}
