<?php 

namespace Hexolus\UUID\Traits;

use Ramsey\Uuid\Uuid;

trait HasUUID {
    public static function bootHasUUID() {
        self::creating(function($model){
            if(!$model->{$model->getUUIDkey()}) {
                $model->{$model->getUUIDkey()} = $model->generateUUID();
            }
        });
    }

    public function getUUIDkey() {
        return config('uuid.key');
    }

    public function generateUUID() {
        return Uuid::uuid4()->toString();
    }
}