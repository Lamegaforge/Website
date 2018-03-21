
<?php
namespace App\Services\Entities;

use App\Services\Contracts\Entity;

abstract class AbstractEntity implements Entity
{
    /**
     * Les attributs du bean
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Constructeur
     *
     * @param array $attrs
     */
    public function __construct(array $attrs = [])
    {
        foreach ($attrs as $key => $value) {
            $this->setAttribute($key, $value);
        }
    }

    /**
     * Magic setter
     *
     * @param string $key
     * @param mixed  $value
     */
    public function __set($key, $value)
    {
        return $this->setAttribute($key, $value);
    }

    /**
     * Magic getter
     *
     * @param  string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->getAttribute($key);
    }

    /**
     * Modifie la valeur du champ
     *
     * @param string $key
     * @param mixed  $value
     */
    public function setAttribute($key, $value)
    {
        $this->hasKey($key);
        
        $this->attributes[$key] = $value;
    }

    /**
     * Retourne la valeur du champ
     *
     * @param  string $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        $this->hasKey($key);

        return $this->attributes[$key];
    }

    /**
     * Retourne la liste des attributs et leur valeur
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Détermine si la clé existe
     *
     * @param  string $key
     * @throws \LiawLim\Core\Exceptions\UnexpectedKeyException
     */
    protected function hasKey($key)
    {
        if (! array_key_exists($key, $this->attributes)) {
            throw new UnexpectedKeyException("Unexpected attribute $key");
        }
    }
}