<?php
/**
 * Traffic jam
 *
 * @author Rory Scholman <rory@roryy.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Trafficjam;

interface Queue
{
    public function publish(string $message): void;

    public function consume(callable $callback): void;

    public function acknowledge(ConsumeMessage $consumeMessage): void;

    /**
     * @throws QueueIsEmpty
     */
    public function pop(): ConsumeMessage;
}
