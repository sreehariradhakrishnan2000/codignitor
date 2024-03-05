<?php
namespace App\Models;

use CodeIgniter\Model;

class FieldModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];

    public function getFields()
    {
        return $this->findAll();
    }

    public function addField($data)
    {
        return $this->insert($data);
    }

    public function editField($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteField($id)
    {
        return $this->delete($id);
    }
}
