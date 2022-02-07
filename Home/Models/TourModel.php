<?php

class TourModel extends BaseModel {
    const TABLE = 'tour';

    public function getAll($select = ['*'],$orderBys = ['']){
        return $this->all(self::TABLE,$select,$orderBys);
    }
    public function getAllLimit($start,$number){
        return $this->all_limit(self::TABLE,$start,$number);
    }
    public function findById($id){
        return $this->find(self::TABLE,$id);
    }
    public function store($data){
        $this->create(self::TABLE,$data);
    }
    public function updateData($id,$data){
        $this->update(self::TABLE,$id,$data);
    }
    public function deleteData($id){
        $this->destroy(self::TABLE,$id);
    }
    public function findByCondition($col,$value){
        return $this->findBy(self::TABLE,$col,$value);
    }
    public function checkExist($column,$value){
        return $this->isExist(self::TABLE,$column,$value);
    }

    public function getInfoTour($col,$value){
        return $this->findBy(self::TABLE,$col,$value);
    }
    public function checkExitsUpdate($column,$value,$id){
        return $this->isExistUpdate(self::TABLE,$column,$value,$id);
    }
}