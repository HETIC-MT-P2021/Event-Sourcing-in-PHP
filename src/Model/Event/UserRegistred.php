<?php
 
// ./src/Model/Event/UserRegistered.php
 
declare(strict_types=1);
 
namespace App\Model\Event;
 
use Prooph\EventSourcing\AggregateChanged;
 
class UserRegistered extends AggregateChanged
{
    public function email(): string
    {
        return $this->payload['email'];
    }
 
    public function password(): string
    {
        return $this->payload['password'];
    }
}