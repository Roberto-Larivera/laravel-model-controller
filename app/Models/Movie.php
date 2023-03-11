<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
quando si crea il database e si crea la tabella all'interno, 
il model da creare si deve chiamare al singolare della tabella 
dentro il database -- dt => books allora il model => Book
*/
class Movie extends Model
{
    use HasFactory;

    //in caso la tabella del database non si chiama al plurale inglese del model allora si utilizza questo per specificare la tabella:
        //      rotected $table = 'NomeTabellaDbItaliano'
}
