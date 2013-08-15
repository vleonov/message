<?php

/**
 * @property string $phone
 * @property string $hash
 */
class M_Phone extends Model
{
    protected $_tblName = 'phone';

    public function save()
    {
        if (!$this->_id) {
            $this->hash = md5(uniqid($this->phone));
        }

        return parent::save();
    }
}