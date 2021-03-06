<?php

declare(strict_types=1);

namespace Nusje2000\Socket\Event;

use Nusje2000\Socket\Connection\SocketConnectionInterface;
use Nusje2000\Socket\Frame\FrameInterface;
use Nusje2000\Socket\WebSocketInterface;

final class FrameEvent extends AbstractSocketEvent implements ConnectionAwareEvent
{
    /**
     * @var SocketConnectionInterface
     */
    private $connection;

    /**
     * @var FrameInterface
     */
    private $frame;

    public function __construct(
        WebSocketInterface $socket,
        SocketConnectionInterface $connection,
        FrameInterface $frame
    ) {
        parent::__construct($socket);
        $this->frame = $frame;
        $this->connection = $connection;
    }

    /**
     * @return SocketConnectionInterface
     */
    public function getConnection(): SocketConnectionInterface
    {
        return $this->connection;
    }

    /**
     * @return FrameInterface
     */
    public function getFrame(): FrameInterface
    {
        return $this->frame;
    }
}
