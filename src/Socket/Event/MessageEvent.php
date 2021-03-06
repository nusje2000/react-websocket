<?php

declare(strict_types=1);

namespace Nusje2000\Socket\Event;

use Nusje2000\Socket\Connection\SocketConnectionInterface;
use Nusje2000\Socket\WebSocketInterface;

final class MessageEvent extends AbstractSocketEvent implements ConnectionAwareEvent
{
    /**
     * @var SocketConnectionInterface
     */
    private $connection;

    /**
     * @var string
     */
    private $message;

    public function __construct(
        WebSocketInterface $socket,
        SocketConnectionInterface $connection,
        string $message
    ) {
        parent::__construct($socket);
        $this->connection = $connection;
        $this->message = $message;
    }

    public function getConnection(): SocketConnectionInterface
    {
        return $this->connection;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
