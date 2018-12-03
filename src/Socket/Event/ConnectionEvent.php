<?php

declare(strict_types=1);

namespace Nusje2000\Socket\Event;

use Nusje2000\Socket\Connection\WebSocketConnectionInterface;
use Nusje2000\Socket\WebSocketInterface;

/**
 * Class ConnectionEvent
 *
 * @package Nusje2000\Socket\Event
 */
final class ConnectionEvent extends AbstractSocketEvent
{
    /**
     * @var WebSocketConnectionInterface
     */
    protected $connection;

    /**
     * ConnectionEvent constructor.
     *
     * @param WebSocketInterface           $socket
     * @param WebSocketConnectionInterface $connection
     */
    public function __construct(WebSocketInterface $socket, WebSocketConnectionInterface $connection)
    {
        parent::__construct($socket);
        $this->connection = $connection;
    }

    /**
     * @return WebSocketConnectionInterface
     */
    public function getConnection(): WebSocketConnectionInterface
    {
        return $this->connection;
    }
}