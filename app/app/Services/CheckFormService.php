<?php

namespace App\Services;

class CheckFormService {
    public static function checkGender($contact) {
        if($contact->gender === 0) {
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        return $gender;
    }

    public static function checkAge($contact) {
        switch($contact->age) {
            case 1:
                $age = '~19';
                break;
            case 2:
                $age = '20~29';
                break;
            case 3:
                $age = '30~39';
                break;
            case 4:
                $age = '40~49';
                break;
            case 5:
                $age = '50~59';
                break;
            case 6:
                $age = '60~';
                break;
            default:
                $age = '';
                break;
        }
        return $age;
    }
}
